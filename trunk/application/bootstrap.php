<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/kohana/core'.EXT;

if (is_file(APPPATH.'classes/kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('America/Chicago');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('en-us');

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);


$hostname = $_SERVER['SERVER_NAME'];

if (strpos($hostname, 'earlybirds.qyuki.com') !== FALSE)  {
	Cookie::$domain = 'earlybirds.qyuki.com';
}
if (strpos($hostname, 'eb.qyuki.com') !== FALSE)  {
	Cookie::$domain = 'eb.qyuki.com';
}

if (strpos($hostname, '8eta.qyuki.com') !== FALSE)  {
	Cookie::$domain = '8eta.qyuki.com';
}

Cookie::$salt = 'fdsh-tretgd-re-gfds-gt-erg-fdg-';



/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	 'auth'       => MODPATH.'auth',       // Basic authentication
	 //'cache'      => MODPATH.'cache',      // Caching with multiple backends
	 //'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
	 'image'      => MODPATH.'image',      // Image manipulation
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	 'formo'      => MODPATH.'formo',
	 //'scaffold' => MODPATH.'scaffold',
	 //'curd' => MODPATH.'curd',
	 //'unittest'   => MODPATH.'unittest',   // Unit testing
	 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));
/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

Route::set('sections', '<directory>(/<controller>(/<action>(/<id>(/<param>))))',
    array('directory'=> "(admin|jobs)"))
    ->defaults(array(
         'directory' => 'admin',
        'controller' => 'user',
        'action'     => 'index',
    ));
    
Route::set('default', '(<controller>(/<action>(/<id>(/<param1>(/<param2>(/<param3>))))))')
	->defaults(array(
		'controller' => 'stimulus',
		'action'     => 'index',
	));
	
define('SIGNED_IN_HOME','/stimulus');
define('NON_SIGNED_IN_HOME','/user');


/**
http://qy.earlybirds.qyuki.com/user/set_password?id=1000000000000000025&token=abcae1c1734de15183e51b16868edb27


http://owa.qyuki.com/api.php
?owa_apiKey=4859263d75db6d5d927a6726d923c725
&owa_do=getResultSet
&owa_metrics=visitDuration,bounces,repeatVisitors,newVisitors,visits,pageViews
&owa_dimensions=date
&owa_startDate=20120401
&owa_endDate=20120631
&owa_limit=100
&owa_siteId=9a58b61af1a3d047ecc6cd1e16cddb4d
&owa_format=xml
*/
