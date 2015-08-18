<link href="/assets/default/3rdparty/jscrollpane/scrollbars.css" rel="stylesheet" type="text/css" />
<script src="/assets/default/3rdparty/jscrollpane/mousewheel.js"></script>
<script src="/assets/default/3rdparty/jscrollpane/scrollbars.js?"></script>
<script>
$(document).ready(function() {
  if ( $.browser.msie && $.browser.version < 10 ) {
  	  /* do nothing */ 
  } else { 
		var settings = {
		   // showArrows: false,
			contentWidth:120,
			
		};
		var storepane = $('.item-list');
		storepane.jScrollPane(settings);
	}
});    
</script>
<div style="font-size:18px;color:#555555">Comments</div>

<form method="POST" 	 style="margin-bottom:5px;" >
<input type="hidden" name="object_id" value="<?php echo $object_id;?>" />
<textarea  name="comment_text" style="width:580px;height:50px">
</textarea><br/>
<input style="margin:0px;font-weight:bold;border:0px;background:green;padding:3px 5px;color:white;" type="submit" name="submit" value="submit" style=""/>
</form>

<ul class="item-list scroll-pane vertical-only" style="height:300px;border-top:dotted 1px #AAAAAA">
<?php
foreach($comment_list as $item) {
	$profile_pic = $item->profile_pic;
	$owner_name =  $item->first_name.' '.$item->last_name;
	$owner_id = $item->owner_id;
	echo 
	"<li class=\"ui-helper-clearfix\" style=\"padding:3px\">
		<div style=\"float:left;\">
			<a  target=\"_blank\" href=\"/people/profile/$owner_id\"><img src=\"$profile_pic\" width=\"50\"/><a/>
		</div>
		<div style=\"float:left;margin-left:5px;width:500px\">
			<a target=\"_blank\" href=\"/people/profile/$owner_id\" class=\"user_name\" >
			$owner_name
			</a>
			<div class=\"comment_text\">
			{$item->comment_text}
			</div>
		</div>
	</li>";
}
?>

</ul>
