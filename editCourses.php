<?php
session_start();
include 'inc/connection.php'
?>
<?php
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    header("Location: index.php");//
}

//cek level user
if($_SESSION['level']!="Administrator"){
    header("Location: index.php");
}?>
<?php include 'inc/configAdmin.php'; $template['header_link'] = 'WELCOME'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<?php 
$idmk = $_GET['idmk'];
$query = mysql_query("SELECT * FROM tb_courses WHERE idmk='$idmk' ");
$baris=mysql_fetch_array($query); ?>

<!-- Page content -->
<div id="page-content">
 <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
    <!-- Grid Content Block -->
    <div class="block">
    <div class="block-title">
                    <h2>Edit Courses</h2>
                </div>
        <!-- END Grid Content Title -->
         <form action="editCourses_proc.php?idmk=<?php echo $idmk; ?>" method="post" class="form-horizontal form-bordered">
              <div class="block-section">
              <div class="form-group">
                        <label class="col-md-3 control-label">Course Name</label>
                        <div class="col-md-6">
                            <input type="text" id="courses" name="courses" class="form-control" value="<?php echo $baris['courses'];?>">
                        </div>
              </div>
                <div class="form-group">
                        <label class="col-md-3 control-label">Username</label>
                        <div class="col-md-6">
                            <input type="text" id="username" name="username" class="form-control" value="<?php echo $baris['username'];?>">
                        </div>
                </div>
                   
            <div class="form-group form-actions">
                <div class="col-md-8 col-md-offset-3">
                                            
            <button type="submit" name="submit" id="submit"  value="Submit" class="btn btn-effect-ripple btn-primary">Submit</button>
             <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
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