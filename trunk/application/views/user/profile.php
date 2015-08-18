<div class="ui-widget-content"  style="margin:5px 5px">
<?php


$picure_url = "/assets/default/img/default-user.png";
if ($user->profile_pic_id) {
	$picure_url = "/v/picture/{$user->profile_pic_id}/width_200";
}
$content = "<img src=\"$picure_url\" width=\"180\">";

$content .= "<div style=\"margin-bottom:5px;font-weight:bold;\" >"
.ucfirst($user->first_name )." ". ucfirst($user->last_name) ."</div>";
$content .= '<div style="font-size:12px"> ';
$content .= ucfirst($user->gender)."<br/>";
$content .= ucfirst($user->city) ."<br/>". ucfirst($user->state)."<br/>" ;
$content .= '</div>';
echo $content;
?>
</div>
