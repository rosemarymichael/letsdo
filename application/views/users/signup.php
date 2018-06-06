
<!------ Include the above in your HEAD tag ---------->
<html>
<head>
<title>Project Handler</title>
<link rel="stylesheet" type ="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script  type="text/javascript" src="<?= base_url()?>assets/js/signup.js"></script>

</head>

 <body>
<style>
{
  background: url('<?=base_url()?>images/sss.jpg');
  font-size: 10pt;
}
</style>
<input type="hidden" name="base_url" value="<?=base_url()?>" id="base_url">
<div class="container" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
           <?= form_open('',array('id'=>'user_signup'));?>
                    <br><br><CENTER><h3 style="color:green;">Sign Up</CENTER>
                    <h4></h4>
                    <div class="row">
                            <?php echo form_label('First Name'); ?>
                            <?php echo form_input(array('id' => 'first_name', 'name' => 'first_name','class'=>'form-control','value'=>set_value('first_name'))); ?>
                            <?php echo form_error('first_name'); ?><br />

                            <?php echo form_label('Last Name'); ?>
                            <?php echo form_input(array('id' => 'last_name', 'name' => 'last_name','class'=>'form-control','value'=>set_value('last_name'))); ?>
                            <?php echo form_error('last_name'); ?><br />

                            <?php echo form_label('Email Address'); ?>
                            <?php echo form_input(array('id' => 'user_email', 'name' => 'user_email','class'=>'form-control','value'=>set_value('user_email'))); ?>
                            <?php echo form_error('user_email'); ?><br />

                            <?php echo form_label('Password'); ?>
                            <?php echo form_input(array('type' => 'password','id' => 'user_password', 'name' => 'user_password','class'=>'form-control','value'=>set_value('user_password'))); ?>
                            <?php echo form_error('user_password'); ?><br />
                            
                             <?php echo form_label('Confirm Password'); ?>
                            <?php echo form_input(array('type' => 'password','id' => 'confirm_password', 'name' => 'confirm_password','class'=>'form-control','value'=>set_value('confirm_password'))); ?>
                            <?php echo form_error('confirm_password'); ?><br />

                    </div>
                    <br>
                 
     
                    <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy.</span>
                    <div>
                    <a href="<?=base_url()?>users/signup">
                        <button class="btn btn-primary" id="sign_up" type="submit">
                        Sign Up
                        </button>
                    </a>
                    <a href="<?=base_url()?>users/signin">
                        <button class="btn btn-primary" type="button">Sign In</button>
                    </a>
            <?=form_close();?>        
          </div>
</div>            
</div>
</div>
</body>
</html>