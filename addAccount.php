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

<!-- Page content -->
<div id="page-content">
    
    

    <!-- Wizards Content -->
    <!-- Form Wizards are initialized in js/pages/formsWizard.js -->
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
            <!-- Clickable Wizard Block -->
            <div class="block">
                <!-- Clickable Wizard Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Registration</h2>
                </div>
                <!-- END Clickable Wizard Title -->

                <!-- Clickable Wizard Content -->
                <form id="clickable-wizard" action="" method="post" class="form-horizontal form-bordered">
                    <!-- First Step -->
                    <div id="clickable-first" class="step">
                        <!-- Step Info -->
                        <div class="form-group">
                            <div class="col-xs-12">
                                <ul class="nav nav-pills nav-justified clickable-steps">
                                    <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-first"><i class="fa fa-user"></i> <strong>Account</strong></a></li>
                                    <li><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-pencil-square-o"></i> <strong>Profile</strong></a></li>
                                    <li><a href="javascript:void(0)" data-gotostep="clickable-third"><i class="fa fa-check"></i> <strong>Confirmation</strong></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-clickable-username">Username</label>
                            <div class="col-md-6">
                                <input type="text" id="username" name="username" class="form-control" placeholder="Write a username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-clickable-email">Email</label>
                            <div class="col-md-6">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Enter your valid email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-clickable-password">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Write a password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-clickable-password2">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" id="example-clickable-password2" name="example-clickable-password2" class="form-control" placeholder="Confirm your password">
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Second Step -->
                    <div id="clickable-second" class="step">
                        <!-- Step Info -->
                        <div class="form-group">
                            <div class="col-xs-12">
                                <ul class="nav nav-pills nav-justified clickable-steps">
                                    <li><a href="javascript:void(0)" class="text-muted" data-gotostep="clickable-first"><i class="fa fa-user"></i> <del><strong>Account</strong></del></a></li>
                                    <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-pencil-square-o"></i> <strong>Profile</strong></a></li>
                                    <li><a href="javascript:void(0)" data-gotostep="clickable-third"><i class="fa fa-check"></i> <strong>Confirmation</strong></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-clickable-firstname">Name</label>
                            <div class="col-md-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-clickable-country">ID</label>
                            <div class="col-md-6">
                                <input type="text" id="npm" name="npm" class="form-control" placeholder="Example : 1306368450">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-clickable-city">Major</label>
                            <div class="col-md-6">
                                <input type="text" id="major" name="major" class="form-control" placeholder="Example : Computer Engineering">
                            </div>
                        </div>
                    </div>
                    <!-- END Second Step -->

                    <!-- Third Step -->
                    <div id="clickable-third" class="step">
                        <!-- Step Info -->
                        <div class="form-group">
                            <div class="col-xs-12">
                                <ul class="nav nav-pills nav-justified clickable-steps">
                                    <li><a href="javascript:void(0)" class="text-muted" data-gotostep="clickable-first"><i class="fa fa-user"></i> <del><strong>Account</strong></del></a></li>
                                    <li><a href="javascript:void(0)" class="text-muted" data-gotostep="clickable-second"><i class="fa fa-pencil-square-o"></i> <del><strong>Profile</strong></del></a></li>
                                    <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-third"><i class="fa fa-check"></i> <strong>Confirmation</strong></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Step Info -->
                       <div class="form-group">
                        <label class="col-md-3 control-label">Roles</label>
                        <div class="col-md-9">
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
                                    <input type="radio" id="example-radio3" name="q" value="Mahasiswa"> Student
                                </label>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- END Third Step -->

                    <!-- Form Buttons -->
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="reset" class="btn btn-effect-ripple btn-danger" id="back1">Back</button>
                            <button type="submit" class="btn btn-effect-ripple btn-primary" name="submit" id="submit">Next</button>
                            
                        </div>
                    </div>
                    <!-- END Form Buttons -->
                </form>
                <!-- END Clickable Wizard Content -->
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