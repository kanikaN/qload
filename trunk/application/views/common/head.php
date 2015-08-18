<meta name="description" content="" />
<meta name="keywords" content="" />
<?php 
$def = isset($_COOKIE['jq']) ? $_COOKIE['jq']: "cupertino";
$jq = isset($_GET['jq'] )?	$_GET['jq'] : $def;
if ( !isset($_COOKIE['jq']) || $_COOKIE['jq'] != $jq) {
	setcookie("jq", $jq,time() + 24*60*60,"/");
}
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.19/themes/<?php echo $jq ?>/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" > </script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.19/jquery-ui.min.js"> </script>

<link rel="stylesheet" type="text/css" href="/assets/default/css/style.css?tm=<?php echo filemtime(DOCROOT."/assets/default/css/style.css");?>" />

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php 
$hostname = $_SERVER['SERVER_NAME'];
if (strpos($hostname, 'earlybirds.qyuki.com') !== FALSE) :
?>
<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://analytics.qyuki.com/" : "http://analytics.qyuki.com/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://analytics.qyuki.com/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->


				
<!-- Start Open Web Analytics Tracker -->
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'http://owa.qyuki.com/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', '9a58b61af1a3d047ecc6cd1e16cddb4d']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
owa_cmds.push(['trackDomStream']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
	_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End Open Web Analytics Code -->
				
<?php 
endif;
?>
<script src="/assets/default/js/site.js?tm=<?php echo filemtime(DOCROOT."/assets/default/js/site.js"); ?>" type="text/javascript" ></script>

