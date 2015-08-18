<ul class="qmenu top_nav ui-helper-clearfix">
<?php
$menu = array("/stimulus" => "Challenges",
	  "/submissions" => "Entries",
	   "/user" => "My Portfolio",
	   "/people" => "People");

	foreach($menu as $path => $name) {
	$cls = '';
	if (stripos($path, Request::current()->controller()) !== FALSE) {
		$cls = "active";
	}
	echo "<li  class=\"$cls\"><a  href=\"$path\"  > $name</a></li>";
}
?>
</ul>
