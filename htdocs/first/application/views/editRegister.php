<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('myasserts/mycss/registerCss.css') ?>">
<script src="<?php echo base_url('myasserts/myjs/registerjs.js') ?>"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Update Profile</a>
              </div>
              
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="<?php echo base_url()?>/RegisterController/editPost/<?php echo $result['id'] ?>" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo !empty($result) ? $result['id'] : ''; ?>">
                   <input type="text" name="name" id="name" tabindex="1" class="form-control" placeholder="Name" value="<?php echo $result['name'];?>">
                  </div>
                  <div class="form-group">
                    <input type="text" name="user_name" id="user_name" tabindex="1" class="form-control" placeholder="Username" value="<?php echo !empty($result) ? $result['user_name'] : '' ;?>">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="<?php echo !empty($result) ? $result['email'] : '';?>">
                  </div>
                  <div class="form-group">
                    <input type="text" name="contact_no" id="contact_no" tabindex="1" class="form-control" placeholder="Contact No" value="<?php echo !empty($result) ? $result['contact_no'] : '';?>">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Submit">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 