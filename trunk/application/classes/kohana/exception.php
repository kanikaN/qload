<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Custom exception class to override default exception handling of Kohana.
 * <http://kohana.sebicas.com/index.php/guide/kohana/errors>
 * 
 * Modified to show custom 404 page as well as include user info to the log.
 */
class Kohana_Exception extends Kohana_Kohana_Exception 
{
    /**
     * Overriden to show custom page for 404 errors
     */
    public static function handler(Exception $e)
    {
        switch (get_class($e))
        {
            case 'HTTP_Exception_404':
                $response = new Response();
                $response->status(404);
              //  $view = new View('errors/report');
               // $view->message = $e->getMessage();
                echo $response->body("<h2>Page Not Found</h2> <a href=\"/\" >Go Home</a>")->send_headers()->body();
                return TRUE;
                break;
            default:
                return Kohana_Kohana_Exception::handler($e);
                break;
        }
    }
    

}
