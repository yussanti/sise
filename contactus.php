<?php
session_start();
include 'inc/connection.php'
?>
<?php
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//
} else if(!isset($_SESSION['username'])){
    die("Anda belum login");
} else if(!isset($_SESSION['username'])){
    die("Anda belum login");
}?>
<?php include 'inc/configAdmin.php'; $template['header_link'] = 'WELCOME'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>


<!-- Page content -->
<div id="page-content">
 <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-12 col-sm-offset-1 col-md-12 col-md-offset-2 col-lg-10 col-lg-offset-1">
    <!-- Grid Content Block -->
    <div class="block">
    <div class="block-title">
                    <h2>Contact Us</h2>
                </div>
        <!-- END Grid Content Title -->
         <form action="" method="post" class="form-horizontal form-bordered">
              <div class="block-section">
              <div class="form-group">
                        <label class="col-md-3 control-label">Name</label>
                        <div class="col-md-6">
                            <input type="text" id="idmk" name="idmk" class="form-control" placeholder="Please write your name">
                        </div>
              </div>
              <div class="form-group">
                        <label class="col-md-3 control-label">Email</label>
                        <div class="col-md-6">
                            <input type="email" id="course" name="course" class="form-control" placeholder="Please write your email">
                        </div>
              </div>
              <div class="form-group">
                        <label class="col-md-3 control-label">Message</label>
                        <div class="col-md-6">
                            <textarea  name="lecturer" class="form-control" placeholder="Please write a message"></textarea>
                        </div>
              </div>
                   
            <div class="form-group form-actions">
                <div class="col-md-8 col-md-offset-5">
                                            
            <button type="submit" name="submit" id="submit"  value="Submit" class="btn btn-effect-ripple btn-primary">Submit</button>
            </div>
                    </div>       

        </form>
    </div>

    </div>
    <!-- END Grid Content Block --> 



</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyDashboard.js"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>

<?php include 'inc/template_end.php'; ?>