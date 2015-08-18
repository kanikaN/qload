<div align="center">
<?php

$path = $stimulus->main_image;
if ($stimulus->content_id) {
	$content  = ORM::factory('content',$stimulus->content_id);
	$item = $content->get_generated_preset(Model_Content_Viewable::PRESET_LARGE_800_X);
	if ($item) {
		$path = $item->file_path;
	}
}

if (empty($path) ) {
	
	echo "<h3> {$stimulus->title} </h3>";
	echo "<div> {$stimulus->summary} </div>";
} else {
echo '<img src="'.$path.'" width="700"> </img> ';
}
?>
</div>
