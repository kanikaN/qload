<ul class="item-list ui-helper-clearfix" >
<?php
foreach($list as $item) {
    $html =  "<li class=\"ui-widget-content\" style=\"float:left;width:100%\">";
    if (!$item->file_path) {
    	$html .= " <img style=\"float:left\" src=\"{$item->main_image}\" height=\"150\" >";
    } else {
    	$html .= " <img style=\"float:left\" src=\"{$item->file_path}\" height=\"150\" >";
    }
    $html .= "<div style=\"margin-left:130px;padding:0px;\"><h3>".$item->title."</h3>"
    .'<div style="margin-bottom:2px">'.$item->summary.' </div>'
    ."<a class=\"href_button\" href=\"/stimulus/view/{$item->stimulus_id}\">View</a></div></li>";
echo $html;
}

?>
</ul>


