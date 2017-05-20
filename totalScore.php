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
<?php include 'inc/configMahasiswa.php'; $template['header_link'] = 'WELCOME'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<?php    
$idmk =$_GET['idmk'];
$idtest =$_GET['idtest'];
$username =$_SESSION['username'];
$nilaitotal=0;
    $i=1;
    $query2= mysql_query("SELECT * FROM tb_nilai where idmk='$idmk' and idtest='$idtest' and username='$username'");
    $jumlah2 = mysql_num_rows($query2);
    echo "$jumlah2";
    while($baris2=mysql_fetch_array($query2)) {
        $nilaitotal=$nilaitotal+$baris2['nilai'];
        $i++;
        } 
        $nilaitotal=$nilaitotal/$jumlah2; //hasil total nilai yang didapat dari penjumlahan semua nilai dari ujian, dibagi dengan jumlah soal
        $nilaitotal=round($nilaitotal, 2);
        
        $query3= mysql_query("insert into tb_totalnilai (idmk,idtest,username,total_nilai) values ('$idmk','$idtest','$username', '$nilaitotal') ");   

?>

<!-- Page content -->
<div id="page-content">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5 col-md-5 col-md-offset-5 col-lg-4 col-lg-offset-4">
           <!-- Alert Messages Block -->
    <div class="block">
        <!-- Alert Messages Title -->
        <div class="block-title">
            <h2>Results</h2>
        </div>
        <!-- END Alert Messages Title -->

        <!-- Alert Messages Content -->
        <div class="row">
            
            <div class="col-sm-10 col-lg-12">
                <!-- Info Alert -->
                <div class="alert alert-info alert-dismissable">
                    <h3><strong><center>Your Score</center></strong></h3>
                    <h4><center><?php echo $nilaitotal ?></center></h4>
                    <center><a href="dashboardStud.php"><button id="submit"  value="back" class="btn btn-effect-ripple btn-default">Back to Dashboard</button></a></center>
                </div>
                <!-- END Info Alert -->
            </div>
            
        </div>
        <!-- END Alert Messages Content -->
    </div>
    <!-- END Alert Messages Block -->
    </div>       
</div>
<!-- END Page Content -->






             
<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyDashboard.js"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>

<?php include 'inc/template_end.php'; ?>
