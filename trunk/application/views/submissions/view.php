<h3><?php echo $submission->title ; ?></h3>
<div  class="ui-widget-content" >
<div style="padding:10px;font-size:18px" class="ui-helper-clearfix">
	<?php
	
	$owner = ORM::factory('user',$submission->owner_id);
	
	if ($submission->stimulus_id) {
		$stimulus  = ORM::factory("stimulus",$submission->stimulus_id);
		if ($stimulus->loaded()) {
			echo "<div class=\"submission_view_stimulus\">Challenge: {$stimulus->title}</div>"; 
		}
	}
	
	if ($submission->default_genre_id) {
		$genre  = ORM::factory("genre",$submission->default_genre_id);
		if ($genre->loaded()) {
			echo "<div class=\"submission_view_genre\">Genre: {$genre->genre_name}</div>"; 
		}
	}
	echo "<div style=\"margin:10px 5px 10px;border :dotted 1px #CCCCCC;padding:5px;background:white\"><center>";
	
	$contentList = $submission->get_content_list();
	foreach($contentList as $item) {
		switch( $item->type) {
			case 'text':
				echo "<div align=\"left\" style=\"word-wrap:break-word;\">".$item->text_content."</div>";
				$submission->description  = '';
			break;
			case 'image':
				$path = $item->get_generated_preset(Model_Content_Viewable::PRESET_LARGE_800_X)->file_path;
				echo "<img width=\"700\" src=\"{$path}\" /> ";
			
			break;
			
			case 'video':
				$gitem = $item->get_generated_preset(Model_Content_Video::PRESET_VIDEO_MP4_640_X);
				$path = $item->file_path;
				
				$flv = $item->get_generated_preset(Model_Content_Video::PRESET_VIDEO_FLV_320_X);
				$mp4 = $item->get_generated_preset(Model_Content_Video::PRESET_VIDEO_MP4_640_X);
				$webm = $item->get_generated_preset(Model_Content_Video::PRESET_VIDEO_WEBM_640_X);
				$video_conversion_not_done  = false;
				//<source src="'.$path.'" type="'.$item->mime_type.'" />
				$gImageItem = $item->get_generated_preset(Model_Content_Video::PRESET_IMAGE_640_X);
				echo '<video   controls preload="none" width="640" height="420" style="width:640px;height:420px"
					 	poster="'.$gImageItem->file_path.'">';
					 	if ($mp4 && false ) {
					 		echo '<source src="'.$mp4->file_path.'" type="'.$mp4->mime_type.'" />';
					 	}
					 	if ($webm) {
					 		echo '<source src="'.$webm->file_path.'" type="'.$webm->mime_type.'" />';
					 	}
					 	if ($flv) {
					 		echo '<source src="'.$flv->file_path.'" type="'.$flv->mime_type.'" />';
					 	} else {
					 		$video_conversion_not_done = true;
					 	}
					 	'<source src="'.$item->file_path.'" type="'.$item->mime_type.'" />';
				echo '</video>';
				if ($video_conversion_not_done) {
					echo "<div style=\"margin-top:10px\" class=\"ui-state-highlight ui-corner-all\" >The uploaded video is currently being processed. It will be available for viewing soon...</div>";
				}
			break;
			
			case 'audio':
				echo '<audio  controls="" preload="none" style="width:700px" >
					 		<source src="'.$item->file_path.'" type="'.$item->mime_type.'" />
					  </audio>';
			break;
				
			default:
			break;
		}
		
	}
	echo "</center></div>";
	if (!empty($submission->description)) {
		echo "<div class=\"ui-corner-all\" style=\"border:dotted 1px #CCCCCC;padding:5px;margin:5px;\"> ".$submission->description."</div>";
	}
	
	$picure_url = "/assets/default/img/default-user.png";
	if ($owner->profile_pic_id) {
		$picure_url = "/v/picture/{$owner->profile_pic_id}/square";
	}
	
	echo "<img src=\"$picure_url\" height=\"50\"/> {$owner->first_name}  {$owner->last_name }";
	?>
<?php  if (Request::current()->action() != 'preview'): ?>
<center style="margin-top:20px"><iframe frameBorder="0"  src="/comments/view/<?php echo $submission->id?>?tm=<?php echo time();?>" style="border:none;margin-top:15px;width:700px;height:500px;overflow-x:hidden" ></iframe>
</center>
<?php endif;?>
</div>

