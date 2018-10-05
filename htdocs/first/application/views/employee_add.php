<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal">
    <fieldset>
    
    <!-- Form Name -->
    <legend>Employee Form</legend>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="firstname">First Name</label>  
      <div class="col-md-5">
      <input id="firstname" name="firstname" type="text" placeholder="firstname" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="lastname">Last Name</label>  
      <div class="col-md-5">
      <input id="lastname" name="lastname" type="text" placeholder="lastname" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Multiple Radios (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="gender">Gender</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="gender-0">
          <input type="radio" name="gender" id="gender-0" value="M">
          Male
        </label> 
        <label class="radio-inline" for="gender-1">
          <input type="radio" name="gender" id="gender-1" value="F">
          Female
        </label>
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="username">Username</label>  
      <div class="col-md-5">
      <input id="username" name="username" type="text" placeholder="username" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="email">Email</label>  
      <div class="col-md-5">
      <input id="email" name="email" type="email" placeholder="email" class="form-control input-md">
        
      </div>
    </div>
    
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="password">Password</label>
      <div class="col-md-5">
        <input id="password" name="password" type="password" placeholder="password" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Password input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="confirm">Confirm Password</label>
      <div class="col-md-5">
        <input id="confirm" name="confirm" type="password" placeholder="re-enter password" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="phone1st">Phone Number</label>  
      <div class="col-md-5">
      <input id="phone1st" name="phone1st" type="text" placeholder="phone number" class="form-control input-md" required="">
        
      </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="phone2nd">Second Phone</label>  
      <div class="col-md-5">
      <input id="phone2nd" name="phone2nd" type="text" placeholder="optional phone number" class="form-control input-md">
        
      </div>
    </div>
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="major">Major</label>
      <div class="col-md-5">
        <select id="major" name="major" class="form-control">
          <option value="1">Computer Science</option>
          <option value="2">Administratoin</option>
          <option value="3">Marketing</option>
          <option value="4">Management</option>
        </select>
      </div>
    </div>
    
    <!-- Button (Double) -->
    <div class="form-group">
        <label class="col-md-4"></label>
      <div class="col-md-8">
        <button id="signup" name="signup" class="btn btn-default">Add New</button>
        <button id="cancel" name="cancel" class="btn btn-default">Cancel</button>
      </div>
    </div>
    
    </fieldset>
    </form>