<!DOCTYPE html>
<html class="no-js" lang="">
<?php $this->load->view('includes/head');?>
<body>
<?php $this->load->view('includes/header');?>

<section>
<div class=" container-fluid">
 <div class="row">

 <?php $this->load->view('includes/bredcrumb');?>
 
 <?php $this->load->view($template); ?>

</div>

</div>
</div>
</section>
<?php $this->load->view('includes/footer');?>
<?php $this->load->view('includes/scripts_bottom');?>

</body>
</html>
