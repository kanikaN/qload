<div id="help-form" class="ui-widget-content" style="font-size:16px;padding:10px">

<?php 
if (isset($message)) : ?>
<div class="ui-state-error ui-corner-all" style="font-weight:bold" > <?php echo $message ?>
</div>
<?php endif; ?>
<form method="POST"  > 
	My Email<br/> 
	<input name="email" type="email" value="<?php echo @$_POST['email']?>" style="width:600px;height:25px"/><br/><br/>
	My contact number<br/> 
	<input name="phone" type="text" style="width:600px;height:25px"/><br/><br/>
	
	Here is the problem I'm facing:
	<br/>
	<select style="font-size:16px"  name="problem">
	<?php
	
	
	$messages = array(
		"I can't register",
		"I can't login to my account",
		"My city is not listed",
		"I am not able to upload a file",
		"Audio/Video doesn't play on my device",
		"I can't see the content I uploaded",
		"Other"
		);
		foreach($messages as $msg) {
			echo "<option value=\"$msg\">$msg</option>";	
		}
	?>
	</select><br/><br/>
	A bit of detail<br/>
	<textarea name="message" style="width:600px;height:200px"><?php echo @$_POST['message']?></textarea><br/>
	<input type="submit" name="submit" style="font-size:20px" value="Help me!"/>
	</form>
</div>
