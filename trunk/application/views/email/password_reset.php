<?php echo $context_user->first_name ;?>! 
<br/>
<p>
Need some help with your password? Follow this <a href="http://<?php echo $_SERVER['SERVER_NAME']."/user/set_password/?id={$context_user->id}&token={$context_user->reset_token}";  ?>" >link </a> to quickly create a new one.  
Incase you just recalled your password or are someone else who accidentally typed your password under some other username, ignore this e-mail to continue your login process. 
</p>
We're about to change things for you. Get a preview as a Qyuki Earlybird.

