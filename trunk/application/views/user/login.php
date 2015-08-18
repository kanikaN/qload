<form class="login-form ui-corner-bottom" method="POST" style="opacity:0.85;float:right;padding:3px 8px;background:#A8D053;margin-right:10px">
<?php if (isset($error_message)):?>
<div class="ui-state-error " style="font-size:12px;font-weight:bold" ><?php echo $error_message; ?></div>
<?php endif;?>
<a href="/user/register" style="opacity:1;font-weight:bold;display:inline-block;text-decoration:none;font-size:12px;background:green;color:white;padding:3px 6px 3px 6px" class="ui-state-highlight" >Create New Account</a>
<span style="color:black;font-size:12px">Login</span><input placeholder="Email" type="text"  name="email" style="width:130px"/>
<span style="color:black;font-size:12px"></span><input placeholder="Password" type="password" name="password" style="width:130px"/>
<input type="submit" " style="margin:0px;font-weight:bold;border:0px;background:green;color:white;" name="submit" value="Submit" />
<div align="right" style="display:inline;font-size:12px;">
        <a href="/user/forgot_password">Forgot Password</a>
    </div>
</form>


