<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
     <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="http://192.168.2.100/citemp/user_management/users/logout">Logout</a></li>
                </ul>
            </div>
    <div class="row">
      <?php echo "Welcome";?>
    </div>
    
</div>
