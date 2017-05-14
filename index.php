<?php
session_start();
if($_SESSION){
    if($_SESSION['level']=="Administrator")
    {
        header("Location: dashboardAdm.php");
    }
    if($_SESSION['level']=="Dosen")
    {
        header("Location: dashboardLect.php");
    }
    if($_SESSION['level']=="Mahasiswa")
    {
        header("Location: DashboardStud.php");
    }
}
include('login.php'); 
?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Login Container -->
<div id="login-container">
    <!-- Login Header -->
    <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
        <strong>Welcome to Simple O</strong>
    </h1>
    <!-- END Login Header -->

    <!-- Login Block -->
    <div class="block animation-fadeInQuickInv">
        <!-- Login Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="page_ready_reminder.php" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Forgot your password?"><i class="fa fa-exclamation-circle"></i></a>
             
            </div>
            <h2>Sign In</h2>
        </div>
        <!-- END Login Title -->

        <!-- Login Form -->
        <form id="form-login" action="" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Your password..">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-8">
                    <label class="csscheckbox csscheckbox-primary">
                        <input type="checkbox" id="login-remember-me" name="login-remember-me">
                        <span></span>
                    </label>
                    Remember Me?
                </div>
                <div class="col-xs-4 text-right">
                    <button type="submit" name="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i>Sign In</button>
                </div>
            </div>
        </form>
        <!-- END Login Form -->
    </div>
    <!-- END Login Block -->

    <!-- Footer -->
    <footer class="text-muted text-center animation-pullUp">
        <small><span id="year-copy"></span> &copy; <?php echo "Simple O" . ' ' . $template['version']; ?></a></small>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Login Container -->

<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyLogin.js"></script>
<script>$(function(){ ReadyLogin.init(); });</script>

<?php include 'inc/template_end.php'; ?>