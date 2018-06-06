<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?= base_url('assets/js/signup.js');?>" type="text/javascript"></script>
<!------ Include the above in your HEAD tag ---------->
<br><br>
<div class="container">
    <style>
    </style>
 <?php 
 
 
 if (isset($message))
   { ?>
         <CENTER><h3 style="color:green;"><?=$message;?></h3></CENTER><br>
     <?php 
   } ?>

  <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                 <header class="panel-heading">
                    <CENTER><h3 style="color:green;">User Login</CENTER>
                 </header>
                <div class="panel-body">
                    <form  method="post" action="">
                        <fieldset>
                            <?php echo form_label('Email Address'); ?>
                            <?php echo form_error('user_email'); ?><br />
                            <?php echo form_input(array('id' => 'user_email', 'name' => 'user_email','class'=>'form-control','value'=>set_value('user_email'))); ?><br />
                            <?php echo form_label('Password'); ?>
                            <?php echo form_error('user_password'); ?><br />
                            <?php echo form_input(array('id' => 'user_password','type'=>'password','name' => 'user_password','class'=>'form-control','value'=>set_value('user_password'))); ?><br />
                            <button type="submit" class="btn btn-success btn-block">Sign In</button>
                            <p>New Member? <a href="<?=base_url()?>users/signup" class="button">Sign Up</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
