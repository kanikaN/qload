<div class="submission-create-form ui-helper-clearfix ui-widget">


<?php 

$submit_nudge = 'Submit your Entry';
$title_nudge  = 'Add a Title to your submission';
if ($rule->text_supported) {
$submit_nudge =	 "Submit your song/music.";
$title_nudge  = "Give your story a name.";
} else if ($rule->image_supported) {
	$submit_nudge = "Submit your Pictures";
	$title_nudge  = "Give your picture/s a caption.";
}  else if ($rule->audio_supported) {
	$submit_nudge = "Submit your song/music.";
	$title_nudge  = "Give your creation a title.";
} else if ($rule->video_supported) {
	$submit_nudge = "Submit your song/music.";
	$title_nudge  = "Give your film title.";
}
$titleText = '';

?>
<div stlye="margin-bottom:10px">
<span style="font-size:22px"><?php echo $submit_nudge ;?> </span><br/>
</div>
<div class="ui-widget-content ui-helper-clearfix" style="margin-top:20px">
<form method="POST" enctype="multipart/form-data" >
	<label> Title </label><br/>
	<input name="title" type="text" value="<?php echo @$submission->title; ?>" style="width:99%"/>
	<span class="form_error" ><?echo @$errors['title'] ?> </span>
	<span class="form_info" ><?echo $title_nudge ?> </span>
	<br/>
	<?php
	$display_summary = false;
	if ($submission->id) {
		echo "<input type=\"hidden\" name=\"submission_id\" value=\"{$submission->id}\" />";
	}
	echo "<input type=\"hidden\" name=\"stimulus_id\" value=\"{$submission->stimulus_id}\" />";
	echo "<input type=\"hidden\" name=\"genre_id\" value=\"{$submission->default_genre_id}\" />";
	
	$text_content = null;
	$file_content = array();
	
	if ($submission) {
		$submission->load_content();
		$list = $submission->get_content_list(true);
		foreach($list as $item) {
			if ($item->type =='text') {
				$text_content = $item;
				echo "<input type=\"hidden\" name=\"text_content_id\" value=\"{$text_content->id}\" />";
			} else {
				$file_content[] = $item;
				echo "<input type=\"hidden\" name=\"content_file_id[]\" value=\"{$item->id}\" />";
			}
		}
	}
	
	if ($rule->text_supported) {
		
	?>
	 	<label  style="display:block;margin-top:10px"> Write Your Story  </label> 
	 	<span class="form_info">
	 	If you have already written one, copy and paste the content in the text box below.</span>
	 	<textarea class="tinymce" name="text_content" style="width:99%;margin-top:10px;height:200px"><?php 
	 	echo @$text_content->text_content;
	 	?></textarea>
	 	<span class="form_error"><?php echo @$errors['text_content']?></span>
	<?php 
	} else {
	 	$description_string = "Say Something about your entry";
	 $maxFiles = max(
	 	 $rule->image_supported,
	 	 $rule->video_supported ,
	 	 $rule->audio_supported
	 	 );
	 	$filter = "";
	 	$text = "";
	 	$accept = "";
	 	if ($rule->video_supported) {
	 		$text .= "Upload Video";
	 		$accept = "video/*";
	 		$description_string =  "Say something about the film/video.";
	 	} 
	 	
	 	if ($rule->audio_supported) {
	 		if ($text != '') {
	 			$text .= " OR Audio file from your computer ";
	 			$accept .= ",audio/*";
	 			$description_string = "Say something about your creation";
	 			
	 		} else {
	 			$description_string = "Say something about this song/music";
	 			$accept = ",audio/*";
	 			$text .= "Upload the audio file from your computer.";
	 		}
	 	} else if($text != '') {
	 		$text .= " file from your computer";
	 	}
	 	
	 	if ($rule->image_supported) {
	 		$accept = "image/*";
	 		if ($text != '') {
	 			$text .= " OR Image ";
	 		} else {
	 			$text .= "Upload Image file from your computer";
	 		}
	 		$description_string = "Say something about the picture/s.";
	 	}
	 	
	 	/**
	 	Linking content from an external URL is not permitted.
	 	*/
		
		echo "<div>";
		for($idx = 1; $idx <= $maxFiles; $idx++) {
			
			if ($idx <= count($file_content) ) {
				$item = $file_content[$idx-1];
				echo '<div  style="border:dotted 1px #CCCCCC;margin-bottom:5px">';
				echo '<label  style="display:block;margin-top:10px"> Submitted File - '.$item->original_file_name.' </label>';
				if ($item->type =='image') {
					$path = $item->get_generated_preset(Model_Content_Viewable::PRESET_THUMB_X_150)->file_path;
					echo "<img src =\"$path\"  height=\"100\" />";
				} else if ($item->type =='video' ) {
					
					$poster = $item->get_generated_preset(Model_Content_Viewable::PRESET_THUMB_X_150)->file_path;
					 echo '<video   controls preload="none" width="320" height="240"
					 	poster="'.$poster.'" >
					 		<source src="'.$item->file_path.'" type="'.$item->mime_type.'" />
					  </video>';
					  
					
				} else if ($item->type =='audio' ) {
					 echo '<audio  controls preload="none" width="720" height="50" >
					 		<source src="'.$item->file_path.'" type="'.$item->mime_type.'" />
					 		</audio>';
				} else  if ($item){
					echo "Un supported File Type Uploaded";
				}
				$path = "";
				if ($submission->stimulus_id) {
					$path = "/stimulus/participate/{$submission->stimulus_id}/?submission_id={$submission->id}&remove=";
				} else {
					$path = "/user/create/?submission_id={$submission->id}&remove=";
				}
				$path.=$item->id;
				echo "<a style=\"margin:3px;width:130px;text-align:center;padding:1px 10px;display:block;font-weight:bold;text-decoration:none;background:#900000;color:white;border:solid 1px #AAAAAA\" href=\"$path\">Remove File</a></div>";
				
				
			} else {
				echo "<label  style=\"display:block;margin-top:10px\"> $text  </label>"; 
				echo "<input name =\"content_file[]\" accept=\"$accept\" type=\"file\" />";
			}
		}
		echo "</div>";
		
		echo '<span class="form_error">'.@$errors['content_file'].' </span>';
		 ?>
		<div>
			<label style="display:block;margin-top:10px"> <?php echo $description_string ?> </label> 
			<textarea name="description" style="width:99%;height:80px;margin-top:10px"><?php
			echo $submission->description;
			?></textarea>
			</div>
		<?
		}
		
		if(!empty($rule->rule_text)) {
		?>
		<div class="ui-corner-all" style="margin:10px 5px;padding:5px;border:dotted 2px #CCCCCC;background:#CCCCCC;">
		<b>Rules</b>
		<div  style="width:90%;margin-top:10px"  >
		<?php
			echo $rule->rule_text;
		?>
		</div>
		</div>
		<?php if (!empty($rule->tos) && empty($submission->id) ): ?>
		<span style="display:inline;" >
		<input type="checkbox" style="display:inline;width:20px;" name="tos"></input>
		I accept the  <a  class="iframe" stlye="margin-top:10px;display:block;padding-top:10px;font-size:10px" href="/stimulus/tos/<?php echo $rule->id?>" >Terms of Challenge</a></span>
		<span class="form_error" ><?echo @$errors['tos'] ?> </span>
		<?php endif;?>
		<br/>
		<?php 
		}
		?>
		<input class="submit" type="submit" name="draft" value="Save" />
		<?php if (!empty($submission->id)):?>
		<a href="/submissions/preview/<?php echo $submission->id; ?>" class="preview_button preview iframe"/>Preview</a>
		<input class="submit" type="submit" name="publish" value="Publish" />
		<?php endif;?>
	</form>
</div>	
</div><!-- End Submission Create form -->

