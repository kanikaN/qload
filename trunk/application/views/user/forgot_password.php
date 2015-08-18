<form class="login-form ui-corner-bottom" method="POST" style="opacity:0.85;padding:5px 10px 5px 10px;float:right;background:#A8D053;margin-right:10px">
<?php if (isset($error_message)):?>
<div class="ui-state-error" style="font-size:12px;font-weight:bold" ><?php echo $error_message; ?></div>
<?php endif;?>
<?php if (isset($info_message) ):?>
<div class="ui-state-highlight" style="font-size:12px;font-weight:bold" ><?php echo $info_message; ?></div>
<?php endif;?>
<span style="color:black;font-size:12px">Registered Email:</span><input type="text" name="email"/>
<input type="submit" style="margin:0px;border:0px;background:green;color:white;" name="submit" value="Recover" />
<div  align="right" style="font-size:12px;width:300px;display:inline">
        <a href="/user/login">Login</a>
    </div>
</form>


