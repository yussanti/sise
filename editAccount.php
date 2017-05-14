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
<?php include 'inc/configAdmin.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<?php 
$usr = $_GET['usr'];
$query = mysql_query("SELECT * FROM tb_user WHERE username='$usr' ");
$baris=mysql_fetch_array($query); ?>
<!-- Page content -->
<div id="page-content">
    
    

    <!-- Wizards Content -->
    <!-- Form Wizards are initialized in js/pages/formsWizard.js -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
          <!-- General Elements Block -->
            <div class="block">
                <!-- General Elements Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default toggle-bordered enable-tooltip" data-toggle="button" title="Toggles .form-bordered class"></a>
                    </div>
                    <h2>Edit Account</h2>
                </div>
                <!-- END General Elements Title -->

                <!-- General Elements Content -->
                <form action="editAccount_proc.php?usr=<?php echo $usr; ?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            <p class="form-control-static"><?php echo $baris['username'];?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Email</label>
                        <div class="col-md-6">
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo $baris['email'];?>">
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-email">Password</label>
                        <div class="col-md-6">
                            <input type="password" id="password" name="password" class="form-control" value="<?php echo $baris['password'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-password">Confirm Password</label>
                        <div class="col-md-6">
                            <input type="password" id="example-password" name="example-password" class="form-control" value="<?php echo $baris['password'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-text-input">Name</label>
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo $baris['name'];?>">
                           
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-email">ID</label>
                        <div class="col-md-6">
                            <input type="text" id="npm" name="npm" class="form-control" value="<?php echo $baris['npm'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-password">Major</label>
                        <div class="col-md-6">
                            <input type="text" id="major" name="major" class="form-control" value="<?php echo $baris['major'];?>">
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-md-3 control-label">Roles</label>
                        <div class="col-md-9">
                        <?php 
                       
                        if  ($baris['level'] == "Mahasiswa") {?>
                            <div class="radio">
                                <label for="example-radio1">
                                    <input type="radio" id="example-radio1" name="q" value="Administrator"> Administrator
                                </label>
                            </div>
                       
                            <div class="radio">
                                <label for="example-radio2">
                                    <input type="radio" id="example-radio2" name="q" value="Dosen"> Lecturer
                                </label>
                            </div>
                            <div class="radio">
                                <label for="example-radio3">
                                    <input type="radio" id="example-radio3" name="q" value="Mahasiswa" checked=""> Student
                                </label>
                            </div>
                           <?php } else if ($baris['level'] == "Dosen") {?>
                            <div class="radio">
                                <label for="example-radio1">
                                    <input type="radio" id="example-radio1" name="q" value="Administrator"> Administrator
                                </label>
                            </div>
                       
                            <div class="radio">
                                <label for="example-radio2">
                                    <input type="radio" id="example-radio2" name="q" value="Dosen" checked=""> Lecturer
                                </label>
                            </div>
                            <div class="radio">
                                <label for="example-radio3">
                                    <input type="radio" id="example-radio3" name="q" value="Mahasiswa"> Student
                                </label>
                            </div>
                            <?php } else if ($baris['level'] == "Administrator") {?>
                            <div class="radio">
                                <label for="example-radio1">
                                    <input type="radio" id="example-radio1" name="q" value="Administrator" checked=""> Administrator
                                </label>
                            </div>
                       
                            <div class="radio">
                                <label for="example-radio2">
                                    <input type="radio" id="example-radio2" name="q" value="Dosen"> Lecturer
                                </label>
                            </div>
                            <div class="radio">
                                <label for="example-radio3">
                                    <input type="radio" id="example-radio3" name="q" value="Mahasiswa"> Student
                                </label>
                            </div>
                            <?php }?>
                        </div>

                    </div>
                   
                    <div class="form-group form-actions">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Submit</button>
                            <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
                <!-- END General Elements Content -->
            </div>
            <!-- END General Elements Block -->
            </div>
            <!-- END Clickable Wizard Block -->

        
<?php
    $username = @$_POST['username'];
    $email = @$_POST['email'];
    $password = @$_POST['password'];
    $nama = @$_POST['name'];
    $npm = @$_POST['npm'];
    $major = @$_POST['major'];
    $role = @$_POST['q'];
    $tambahtext = @$_POST['submit'];
    if($tambahtext) {
        mysqli_query($connection,"INSERT INTO tb_user (username, email, password, name, npm, major, level, img) values ('$username', '$email','$password','$nama','$npm','$major','$role','')") or die(mysql_error($connection));
       
    }
    
?>
           

    
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsWizard.js"></script>
<script>$(function(){ FormsWizard.init(); });</script>

<?php include 'inc/template_end.php'; ?>