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
if($_SESSION['level']!="Dosen"){
    header("Location: index.php");
}?>
<?php include 'inc/configDosen.php'; $template['header_link'] = 'WELCOME'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>


<!-- Page content -->
<div id="page-content">
 <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
    <!-- Grid Content Block -->
    <div class="block">
    <div class="block-title">
                    <h2>Create Examination</h2>
                </div>
        <!-- END Grid Content Title -->
         <form action="" method="post" class="form-horizontal form-bordered">
              <div class="block-section">
              <div class="form-group">
                        <label class="col-md-3 control-label">ID Courses</label>
                        <div class="col-md-6">
                            <input type="text" id="idmk" name="idmk" class="form-control" placeholder="Ex : 101">
                        </div>
              </div>
              <div class="form-group">
                        <label class="col-md-3 control-label">Examination Name</label>
                        <div class="col-md-6">
                            <input type="text" id="examName" name="examName" class="form-control" placeholder="Ex : Midterm Test">
                        </div>
              </div>
              <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-6">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Type a Password">
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
<?php
    $username = @$_SESSION['username'];
    $idmk = @$_POST['idmk'];
    $examName = @$_POST['examName'];
    $password = @$_POST['password'];
   $tambahtext = @$_POST['submit'];

    if($tambahtext) {
        mysqli_query($connection,"INSERT INTO tb_exam (idmk,idtest, exam, username) values ('$idmk','', '$examName', '$username')") or die(mysql_error($connection));
      
    }
    
?>
        
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