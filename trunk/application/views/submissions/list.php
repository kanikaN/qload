<?php
$genres = ORM::factory('genre')->find_all();
$genres_images =array();

foreach($genres as $item) {
	$genres_images[$item->id] = $item->image;
}
foreach($submission_list as $subitem) {
	$src = $genres_images[$subitem->default_genre_id];
	
	$items = $subitem->get_content_list(true);
	
	 $href = '/user/create';
	if ($subitem->status != "PUBLISHED") {
			if ($subitem->stimulus_id ) {
					$href = "/stimulus/participate/{$subitem->stimulus_id}/?submission_id=".$subitem->id;
			} else {
					$href = "/user/create/?submission_id=".$subitem->id;
			}
	} else{
			$href = "/submissions/view/".$subitem->id;
	}

	$html =  "
	<div class=\"ui-widget\" style=\"padding:10px\" >
	<div class=\"ui-widget-header \" style=\"height:28px\"    >
		<img style=\"float:left;margin:4px 5px 2px\" width=\"20\" src=\"$src\"  />
		<span style=\"float:left;display:block;color:#4a4a4a;line-height:22px;font-size:14px;vertical-align:top;margin-top:2px\">{$subitem->title}</span>
	</div>
	<div class=\"ui-corner-bottom ui-helper-clearfix ui-widget-content\" style=\"padding:10px;height:150px\" >
	";if (count($items) > 0) {
			$item = $items[0];
			if ($item->type == 'image') {
				$gen = $item->get_generated_preset(Model_Content_Viewable::PRESET_THUMB_X_150);
				if ($gen == null)  {
					$gen = $item;
				}
				$html .= "<img style=\"float:left;margin-right:15px;max-width:250px\" src=\"{$gen->file_path}\" height=\"150\" />";
			} else if ($item->type == 'video') {
				$gen = $item->get_generated_preset(Model_Content_Video::PRESET_THUMB_X_150);
				if ($gen) {
					$html .= "<img style=\"float:left;margin-right:15px;max-width:250px\" src=\"{$gen->file_path}\" height=\"150\" />";
				} else {
					$html.= "<div class=\"ui-corner-all ui-state-highlight\"style=\"padding:10px;margin:10px;float:left;width:150px;\">Preview Not Generated</div>";
				}
			} else if ($item->type == 'text') {
			
			} else if ($item->type == 'audio') {
				$html .= '<audio  controls="" preload="none" style="width:250px;float:left;" >
					 		<source src="'.$item->file_path.'" type="'.$item->mime_type.'" />
					  </audio>';
				
			}
			
		}
		$desc = substr(strip_tags($subitem->description),0,100);
		$html .= "
		<div style=\"height:150px;float:left;margin-left:10px;\">
		<div style=\"height:135px;width:400px\">$desc... 	</div>
		<div><a  href=\"$href\">View</a>";
	if ($user->id == $subitem->owner_id)  {
		$html .="
		| <a href=\"/submissions/remove/{$subitem->id}?key=".time()."\" style=\"display:inline-block;\">Delete</a>";
	}
	$html .= "
	</div> <!-- End of actions -->
	</div> <!-- right box over -->
	</div><!-- end of ui-widget-content -->
	</div>";
	echo $html;
}
?>








