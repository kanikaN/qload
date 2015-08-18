<?php

function render_sub_menu($sec_menu) {
	$html = '<ul class="qmenu secondary_menu ">';
	foreach($sec_menu as $item) {
		$path = $item->path;
		$name = $item->name;
		$cls ='';
		if ($item->active) {
			$cls = 'active';
		}
		$html .= "<li class=\"$cls\"><a  href=\"$path\">$name</a></li>";
	}
	$html .= '</ul>';
	return $html;
}
?>

<?php 
if ($menu): ?>
<ul class="qmenu left_nav ui-helper-clearfix">
<?php
$content = '';

foreach($menu as $item ) {
	
	$cls = '';
	$sub = '';
	$style ='';
	if ($item->active) {
		$cls = 'active';
		
		if ($sub_menu != null ) {
			$sub = render_sub_menu($sub_menu);
			$style = 'style="border-right:solid 1px  #A8D053"';
		}
	}
		$content .= "<li class=\"ui-helper-clearfix  $cls\" $style><a  href=\"{$item->path}\" title=\"{$item->name}\">{$item->name}</a>";
	$content .= $sub;
	$content .= "</li>";
}
echo $content;
?>
</ul>
<?php endif; ?>
