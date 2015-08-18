<div class="ui-helper-clearfix " >
<?php
foreach($userList as $item) {
	$picure_url = "/assets/default/img/default-user.png";
	if ($item->profile_pic_id) {
		$picure_url = "/v/picture/{$item->profile_pic_id}/square";
	}
	
    $html =  "<div  class=\"ui-widget-content\" style=\"background:#F8f8f8f;padding:3px;overflow:auto;margin-bottom:5px\">"
    ."<div style=\"width:50px;float:left;\" ><a href=\"/people/profile/{$item->id}\" style=\"display:block;min-height:50px\">"
    ."<img src=\"$picure_url\" width=\"50\"  /></a></div>"
    ."<div style=\"margin-left:60px;width:650px\"><a style=\"font-size:14px;font-weight:bold;text-decoration:none;cursor:pointer;\" href=\"/people/profile/{$item->id}\">"
    . ucfirst($item->first_name)." ".ucfirst($item->last_name)
    ."</a>";
    if (!empty($item->myself) ) {                
    	$html .= "<div style=\"color:#555555;font-size:14px\">&quot;{$item->myself}&quot;</div>";
    }
    $html .= "</div><div style=\"clear:both\"></div></div>";
    echo $html;
}   
?>
</div>
