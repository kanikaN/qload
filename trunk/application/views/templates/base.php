<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?echo $page_title ?></title>
<?php include Kohana::find_file('views', 'common/head'); ?>
<?php 
foreach($styles as $style) {
    echo "<link rel\"stylesheet\" type=\"text/css\" href=\"$style\" />";
} 
if ($enable_fancybox):
	?>
	<link rel="stylesheet" href="/assets/default/3rdparty/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/assets/default/3rdparty/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
			$("a.preview").button();
			$("a.iframe").fancybox({
				width :900,
				height:800
			});
			
			$("a.#help").fancybox({
				width :750,
				height:650,
				onComplete : function() {
					$("#feedback-frame").attr("src","/pages/feedback");		
				}
			});
	});
	</script>

<?php
endif;
if($enable_js_scrollbar): 
?>
	<link href="/assets/default/3rdparty/jscrollpane/scrollbars.css" rel="stylesheet" type="text/css" />
	<script src="/assets/default/3rdparty/jscrollpane/mousewheel.js"></script>
	<script src="/assets/default/3rdparty/jscrollpane/scrollbars.js?"></script>
<?php 
endif;
if ($enable_player) : 
?>
	<link href="/assets/default/3rdparty/mediaelementjs/mediaelementplayer.min.css" rel="stylesheet" type="text/css"/>
	<script src="/assets/default/3rdparty/mediaelementjs/mediaelement-and-player.min.js"></script>
	
	<script>
// using jQuery
$(document).ready(function() {
		var options =	{
		
	
	plugins: ['flash','silverlight'],
    // specify to force MediaElement to use a particular video or audio type
    type: '',
    // path to Flash and Silverlight plugins
    pluginPath: '/assets/default/3rdparty/mediaelementjs/',
    // name of flash file
    flashName: 'flashmediaelement.swf',
    // name of silverlight file
    silverlightName: 'silverlightmediaelement.xap',
    // default if the <video width> is not specified
    defaultVideoWidth: 640,
    // default if the <video height> is not specified     
    defaultVideoHeight: 420,
    // overrides <video width>
   pluginWidth: -1,
    // overrides <video height>       
   pluginHeight: -1,
    mode:'shim'
    	};

/*@cc_on
  @if (@_jscript_version == 9)
    options.mode = 'shim';
  @end
@*/
$('video').mediaelementplayer(options);

	var audioOptions =	{
		
	
	plugins: ['flash','silverlight'],
    // specify to force MediaElement to use a particular video or audio type
    type: '',
    // path to Flash and Silverlight plugins
    pluginPath: '/assets/default/3rdparty/mediaelementjs/',
    // name of flash file
    flashName: 'flashmediaelement.swf',
    // name of silverlight file
    silverlightName: 'silverlightmediaelement.xap',
    // default if the <video width> is not specified
    defaultVideoWidth: 640,
    // default if the <video height> is not specified     
    defaultVideoHeight: 50,
    // overrides <video width>
   pluginWidth: -1,
    // overrides <video height>       
   pluginHeight: -1,
    mode:'shim'
    	};
$('audio').mediaelementplayer(audioOptions);

});
</script>
<?php 
endif; 
?>

<?php
if ($enable_editor) :
?>
	<!-- Load TinyMCE -->
	<script type="text/javascript" src="/assets/default/3rdparty/tinymce/jscripts/tiny_mce/jquery.tinymce.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('textarea.tinymce').tinymce({
				// Location of TinyMCE script
				script_url : '/assets/default/3rdparty/tinymce/jscripts/tiny_mce/tiny_mce.js',
	
				// General options
				theme : "advanced",
				plugins : "lists,pagebreak,,advhr,emotions,iespell,contextmenu,paste,fullscreen,noneditable,nonbreaking,xhtmlxtras",
				// Theme options
				theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|undo,redo,|,forecolor,backcolor|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,
				//myText.trim().replaceAll("\\s+", " ");
				setup : function(ed) {
					ed.onInit.add(function(ed) {
						ed.getDoc().body.style.fontSize = '14px';
					});
					ed.onKeyDown.add(function(ed, e) {
					   var strip = (tinyMCE.activeEditor.getContent()).replace(/(<([^>]+)>)/ig,"");
					   strip = strip.replace(/&nbsp;/ig,' ');
					   var text = strip.split(' ').length + " Words, " +  strip.length + " Characters";
					   console.log(strip);
					   if ($("#word_character_count").length == 0  ) {
							/*$('<span id="word_character_count"></span>').prepend(
								$("#"+tinyMCE.activeEditor.id + '_path_row'));*/
						}
						$("#"+tinyMCE.activeEditor.id + '_path_row').html(text);   
						
				   });
				 }
	
			});
		});
	</script>
	<!-- /TinyMCE -->
<?php
endif;
?>


</head>
<body>
<center>
<div id="container"  align="center">
<div id="image_holder" >
    <div id="top_bar" >
    <?php 
    if ($header) {
         echo $header;
    }
    ?>
    </div>
    <div id="header" align="left" >
    <a href="/" style="margin:20px 20px;display:inline-block"><img src="/assets/default/img/logo.png" height="100"/></a>
   </div>
   
<?php 
    if ($top_nav) {
         echo $top_nav;
    }
    if ($sidebar_present) :
    ?>
    <div id="sidebar">
        <?php  echo $sidebar; ?>
    </div> <!-- End of Sidebar -->
    <div id="content" class="ui-helper-clearfix"  align="left">
		<div id="content_frame"  >
			<?php if ($error_message):?>
				<div class="ui-state-error ui-corner-all" style="font-weight:bold" ><?php echo $error_message; ?></div>
			<?php endif;?>
			<?php if ($info_message):?>
			<div class="ui-state-highlight ui-corner-all" style="margin-bottom:5px;" ><?php echo $info_message; ?></div>
			<?php endif;?>
		<?php 
		echo $content; 
		
		?>
		</div>
		<?php
		//print_r($pagination_config);
		if ($pagination_config['total_pages'] > 1) {
			echo "<center><div id=\"pagination\">";
			echo "<ul class=\"qmenu\" >";
			for($idx = 1; $idx <= $pagination_config['total_pages'];$idx++) {
				$cls = '';
				if($idx == $pagination_config['current_page']) {
					$cls = 'active';
					
				}
				echo '<li class="'.$cls.'"><a  href="'.$pagination_config['base_url'].'page_'.$idx.'" >'.$idx.'</a></li>';
			}
			echo  "</ul></div></center>";
		}
	?>
	</div> <!-- End of Content -->
	
	
	<?php 
	else: 
	?>
	<div> 
	<?php if ($error_message):?>
		<div class="ui-state-error ui-corner-all" style="font-weight:bold" ><?php echo $error_message; ?></div>
	<?php endif;?>
	<?php if ($info_message):?>
		<div class="ui-state-highlight ui-corner-all" style="margin-bottom:5px;" ><?php echo $info_message; ?></div>
	<?php endif;?>
	<?php echo $content; ?>
	<?php 
		endif;
	?>
	</div>
	
</div> <!-- end if image header -->
</div> <!-- End of Container -->
</center>

<div id="footer" class="ui-helper-clearfix" >
<div class  = "policy" align="center">
	Copyright &copy; 2012, Qyuki Digital Media Private Limited |
     <a class="iframe" target="_blank" href="/pages/tos">Terms Of Service</a> |
     <a class="iframe" target="_blank" href="/pages/privacy_policy">Privacy Policy</a> |
     <a class="iframe" target="_blank" href="/pages/report_abuse">Report Abuse Policy</a>
   </div>
</div>
<div style="position:fixed;right:0px;top:0"><a id="help"  href="#feedback-frame" style="padding:3px 10px"><img width="75" src="/assets/default/img/Help_and_Support.png" ></a> </div>
<div style="display:none" >
<div>
<iframe  id="feedback-frame" src="/pages/feedback" style="width:650px;height:500px;overflow:none">
</iframe>
</div>
</div>

</body>
</html>
