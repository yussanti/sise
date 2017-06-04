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
    <!-- First Row -->
    <div class="row">
        <!-- Simple Stats Widgets -->
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background">
                        <i class="gi gi-cardio text-light-op"></i>
                    </div>

             
                    
                    <h2 class="widget-heading h3">
                        <strong><span data-toggle="counter" data-to="
                        <?php 
                        $result = mysql_query("SELECT count(*) from tb_exam;");
                        $nama = mysql_result($result, 0);
                        echo $nama;?>"></span></strong>
                    </h2>
                    <span class="text-muted">Exams</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-success">
                        <i class="gi gi-user text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-success">
                        <strong> <span data-toggle="counter" data-to="
                        <?php 
                        $result = mysql_query("SELECT count(*) from tb_courses;");
                        $nama = mysql_result($result, 0);
                        echo $nama;?>"></span></strong>
                    </h2>
                    <span class="text-muted">Courses</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-warning">
                        <i class="gi gi-briefcase text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-warning">
                        <strong> <span data-toggle="counter" data-to="<?php 
                        $result = mysql_query("SELECT count(*) from tb_user where level='Mahasiswa';");
                        $nama = mysql_result($result, 0);
                        echo $nama;?>"></span></strong>
                    </h2>
                    <span class="text-muted">Students</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-warning">
                        <i class="gi gi-briefcase text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-warning">
                        <strong> <span data-toggle="counter" data-to="<?php 
                        $result = mysql_query("SELECT count(*) from tb_user where level='Dosen';");
                        $nama = mysql_result($result, 0);
                        echo $nama;?>"></span></strong>
                    </h2>
                    <span class="text-muted">Lecturers</span>
                </div>
            </a>
        </div>
    </div>
    <!-- END First Row -->
    <!-- Text Block -->
    <div class="block">
        <!-- Text Title -->
        <div class="block-title">
            <h2>WELCOME TO SIMPLE-O</h2>
        </div>
        <!-- END Text Title -->

        <!-- Paragraphs and Links -->
        <div class="row">
            <div class="col-md-12">
                <p class="lead"><strong>Sistem Penilai Esai Otomatis</strong></p>
                <p style="text-align:justify">Simple-O (Sistem Penilaian Esai Otomatis) merupakan program berbasis web untuk penilaian esai yang dikembangkan di Departemen Teknik Elektro Fakultas Teknik Universitas Indonesia sejak tahun 2007. Departemen Teknik Elektro, Universitas Indonesia telah banyak mengembangkan sistem penilai esai otomatis. Pengembangan sistem penilai esai otomatis ini diharapkan dapat memudahkan pengajar ataupun lembaga, dalam memberikan ujian berbentuk esai. Sistem penilai esai otomatis itu bernama Simple-O. Simple-O merupakan sistem yang dikembangkan dengan berbasis algoritma LSA (Latent Semantic Analysis). LSA merupakan metode yang berbasis corpus atau corpus-based. </p>
                
            </div>
        </div>
        <!-- END Paragraphs and Links -->
    </div>
    <!-- END Text Block -->
   
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyDashboard.js"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>

<?php include 'inc/template_end.php'; ?>