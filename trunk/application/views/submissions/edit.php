<style>
	#toolbar {
		padding: 10px 4px;
	}
	.column { width: 98%; float: left; padding-bottom: 2px; }
	.portlet { margin: 0 1em 1em 0; width:100% }
	.portlet-header { margin: 0.3em; padding-bottom: 4px; padding-left: 0.2em; }
	.portlet-header .ui-icon { float: right; }
	.portlet-content { padding: 0.4em; }
	.ui-sortable-placeholder { border: 1px dotted black; visibility: visible !important; height: 50px !important; }
	.ui-sortable-placeholder * { visibility: hidden; }

	#tabs { height: 350px;float:left;width:98% } 
	.tabs-bottom { position: relative; } 
	.tabs-bottom .ui-tabs-panel { height: 350px; width:100%;overflow: none; } 
	.tabs-bottom .ui-tabs-nav { position: absolute !important; left: 0; bottom: 0; right:0; padding: 0 0.2em 0.2em 0; } 
	.tabs-bottom .ui-tabs-nav li {  border-top: none; border-bottom-width: 1px; }
	.ui-tabs-selected { margin-top: -3px !important; }
	.column .ui-widget-content {padding:0px}

.submission-create-form {
padding:10px;
width:700px
}
	</style>
	<script>
	$(function() {
		$( ".column" ).sortable({
			connectWith: ".column"
		});

		$( ".portlet" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
			.find( ".portlet-header" )
				.addClass( "ui-widget-header ui-corner-all" )
				.prepend( "<span class='ui-icon ui-icon-minusthick'></span>")
				.end()
			.find( ".portlet-content");

		$( ".portlet-header .ui-icon" ).click(function() {
			$( this ).toggleClass( "ui-icon-minusthick" ).toggleClass( "ui-icon-plusthick" );
			$( this ).parents( ".portlet:first" ).find( ".portlet-content" ).toggle();
		});

		$( ".column" ).disableSelection();
		$( "button" ).button();
		
		$( "#tabs" ).tabs();
		$( ".tabs-bottom .ui-tabs-nav, .tabs-bottom .ui-tabs-nav > *" )
			.removeClass( "ui-corner-all ui-corner-top" )
			.addClass( "ui-corner-bottom" );
	});
	</script>
	

<div class="submission-create-form ui-helper-clearfix ui-widget">
<div stlye="margin-bottom:10px">
<span style="font-size:22px">Add to your portfolio</span><br/>
<span style="font-size:12px">To respond to a Challenge, select "Challenges" and click on Participate. </span>
<br/>
<br/>
</div>

<div class="ui-widget-content ui-helper-clearfix" stlye="margin-top">
<label> Title </label> <br/><input type="text" style="width:99%"/><br/>
<div id="tabs" >
	<ul>
		<li><a href="#tabs-1">Add Text</a></li>
		<li><a href="#tabs-2">Add Image</a></li>
		<li><a href="#tabs-3">Add Audio</a></li>
		<li><a href="#tabs-4">Add Video</a></li>
	</ul>
	<div id="tabs-1" class="ui-helper-clearfix">
	    <iframe src="/content/add_text?ec=<?php echo rand(0,1000); ?>" 
	    style="border:none;width:100%;height:100%;overflow:hidden" >
	    </iframe>
	</div>
	<div id="tabs-2">
	<form style="width:500px">
	    <label class="file-upload" >Select Image</label>
			<input type="file" name="uploadfile3" />
	    </form>		
	</div>
	<div id="tabs-3">
	   <form style="width:500px">
	       Select Audio:<input type="file" /><input type="submit" value="upload" />
        </form>	</div>
        <div id="tabs-4">
		   <form style="width:500px" >
           Select Video:<input type="file" /><input type="submit" value="upload" />
        </form>	
    </div>
</div>

<label> Say Something about this upload </label> <br/><textarea  style="width:99%;height:80px"></textarea>
</div>

</div>	
</div><!-- End Submission Create form -->
	
