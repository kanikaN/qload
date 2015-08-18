<h3>Enter Details</h3>
<div class="ui-widget" >
<div  align="left">
    <form class="registration-form" action="/user/register/submit" method="POST">
    <div >
        <label>Username</label><input type="text" value="<?php echo @$_POST['username']; ?>" name="username"/> 
        <span class="form_error" ><?php echo @$errors['username']?></span>
    </div>
    <div >
        <label>Email</label><input type="text" value="<?php echo @$_POST['email']; ?>"  name="email"/> 
        <span class="form_error" ><?php echo @$errors['email']?></span>
    </div>
    <div>
       <label>First Name</label><input type="text"  value="<?php echo @$_POST['first_name']; ?>" name="first_name"/> 
       <span class="form_error" ><?php echo @$errors['first_name']?></span>
    </div>
    <div>
        <label>Last Name</label><input type="text"  value="<?php echo @$_POST['last_name']; ?>" name="last_name"/>
        <span class="form_error" ><?php echo @$errors['last_name']?></span>
    </div>
    <div>
        <label>DOB </label><input readonly="true" type="text" id="datepicker"  value="<?php echo @$_POST['dob']; ?>" name="dob"/>
        <span class="form_error" ><?php echo @$errors['dob']?></span>
    </div>
    <div>
        <label>Gender </label><select type="text"   value="<?php echo @$_POST['gender']; ?>" name="gender">
        <option value="Male">Male</option>
        <option selected value="Female">Female</option>
        <option value="Other">Other</option>
        </select>
    </div>
    <span class="form_error" ><?php echo @$errors['gender']?></span>
    <div>
        <label>State </label><select  id="state_selector" type="text" name="state">
        </select>
        <span class="form_error" ><?php echo @$errors['state']?></span>
    </div>
    
    <div>
        <label>City </label><select type="text" id="city_selector"   name="city">
        </select>
        <span class="form_error" ><?php echo @$errors['city']?></span>
    </div>
     <div>
     <input type="checkbox" style="display:inline;width:20px;" name="tos"></input><span style="display:inline;" >I Agree to the 
     <a style="font-size:14px" class="iframe" target="_blank" href="/pages/tos" target="_blank"> Terms of Service </a>,
     <a style="font-size:14px" class="iframe" target="_blank" href="/pages/privacy_policy" target="_blank"> Privacy Policy </a> and 
     <a style="font-size:14px" class="iframe" target="_blank" href="/pages/report_abuse" target="_blank"> Report Abuse Policy </a><span>
        
        <span class="form_error" ><?php echo @$errors['tos']?></span>
    </div>
    <input type="submit" class="submit"  name="submit" value="submit" />
</form>
  <div align="left" style="font-size:12px">
        <a href="/user/login">Login</a>
        <a href="/user/forgot_password">Forgot Password</a>
    </div>
</div>
</div>
<?php 
if (!isset($_POST['state']) ){
	$_POST['state'] = "Andhra Pradesh";
}
if (!isset($_POST['city']) ){
	$_POST['city'] = "Hyderabad";
	
}
?>
<script type="text/javascript">
var gCity = "<?php echo  $_POST['city'] ?>";
var gState = "<?php echo $_POST['state'] ?>";
</script>
