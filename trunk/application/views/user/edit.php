<h3>Edit Profile Information</h3>
<div class="ui-widget" style="width:500px">
<div  align="left">

    <form class="registration-form" action="/user/edit" enctype="multipart/form-data" method="POST">
    
    <div>
       <label>User Name</label><span ><?php echo $user->username;?></span> 
    </div>
    
    <div>
       <label>Email </label><span><?php echo $user->email;?></span>
    </div>
    <?php if (Session::instance()->get('should_reset_password') ): ?>
    <div style="display:none" >
    <?php endif; ?>
    
    <div>
       <label>First Name</label><input type="text" value="<?php echo $user->first_name;?>" name="first_name"/>
       <span class="form_error" ><?php echo @$errors['first_name']?></span>
    </div>
   
    <div>
        <label>Last Name</label><input type="text" value="<?php echo $user->last_name;?>" name="last_name"/>
        <span class="form_error" ><?php echo @$errors['last_name']?></span>
    </div>
    
    <div>
        <label>DOB </label><span> <?php echo $user->dob;?></span>
    </div>
    
    <div>
        <label>Gender </label> <span> <?php echo $user->gender; ?></span>
    </div>
    <div>
    <label>Myself </label><textarea style="height:200px" name="myself"><?php echo $user->myself; ?></textarea>
          <span class="form_error" ><?php echo @$errors['myself']?></span>
     </div>
     
    <div>
     <label>State </label><select id="state_selector" type="text" name="state"></select>
             <span class="form_error" ><?php echo @$errors['state']?></span>
   
    </div>
    <div>
        <label>City </label><select type="text" id="city_selector"  name="city"></select>
             <span class="form_error" ><?php echo @$errors['city']?></span>
    </div>
    
    <div>
        <label>Picture </label><input type="file"  name="content_file[]"/>
          <span class="form_error" ><?php echo @$errors['content_file']?></span>
     </div>
     
     <?php if  (Session::instance()->get('should_reset_password') ): ?>
     </div>
     <?php endif; ?>
     
    <div>
        <label>Password </label><input type="password"  name="password"/>
             <span class="form_error" ><?php echo @$errors['password']?></span>
   
    </div>
    <div>
        <label>Confirm </label><input type="password"  name="confirm_password"/>
          <span class="form_error" ><?php echo @$errors['confirm_password']?></span>
     </div>
     
     <input type="submit" class="submit" style="height:40px" name="submit" value="submit" />
 
    
</form>
</div>
</div>


<script type="text/javascript">
var gCity = "<?php echo $user->city; ?>";
var gState = "<?php echo $user->state; ?>";
</script>



