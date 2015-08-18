<div class="ui-helper-clearfix">
<?php 
$content = '';
foreach($images as $item) {
	$content .= '<div style="float:left;margin:5px"><img src="/v/picture/'.$item->id.'/height_150" /></div>'; 
}

echo $content;
?>
</div>
