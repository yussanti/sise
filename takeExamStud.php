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
if($_SESSION['level']!="Mahasiswa"){
    header("Location: index.php");
}?>
<?php include 'inc/configMahasiswa.php'; $template['header_link'] = 'WELCOME'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>


<!-- Page content -->
<div id="page-content">
    <!-- Grid Content Block -->
    <div class="block">
        <!-- Grid Content Title -->
        <div class="block-title">
            <h2>Ujian Jaringan Komputer</h2>
        </div>
        <form action="" method="post">
    <?php    
    $idmk = $_GET['idmk'];
    $idtest = $_GET['idtest'];
    $query1 = mysql_query("SELECT * FROM tb_soaljawab where idmk='$idmk' AND idtest='$idtest'");
    $jumlah = mysql_num_rows($query1);
    $i=1;
    $x=0;
    while($baris1=mysql_fetch_array($query1)) {
        ?>
        <input type="hidden" name="idsoal[<?php echo $x ; ?>]" value="<?php echo $baris1['idsoal']; ?>">
      
        <label>Question number <?php echo $i; ?></label>
        <br>
        <?php echo $baris1['soal']; ?>
        <br>
        <br>
        <div class="form-group">
            <label>Answer number <?php echo $i;?></label>
            <textarea class="form-control" rows="3" name="jawaban[<?php echo $x ; ?>]"></textarea>
        </div>
        <br>
        <br>
        <hr>
        <?php
        $x++;
        $i++;
    } ?>
              <div class="block-section">
                   
                   
<input type="submit" name="submit" id="submit" class="button" value="Submit"/>
</form>
                                  </div>
        
    </div>
    <!-- END Grid Content Block --> 

<?php
    $jawaban=$_POST["jawaban"];
    $idsoal=$_POST["idsoal"];
         
  
    $nama=$_SESSION['username'];
    
    $tambahtext = @$_POST['submit'];
    if($tambahtext) { 
    $arrlength=count($jawaban);
    for($x=0;$x<$arrlength;$x++)
    {
        $idQA= $idsoal[$x];
        $hasiljawaban= $jawaban[$x];
        mysql_query("insert into tb_mahasiswa (idjawaban, idmk, idtest, idsoal, nama, npm, jawaban) values ('','$idmk','$idtest','$idQA', '$nama', '', '$hasiljawaban')");?>
            <script type="text/javascript">
                window.location="getScore.php?idmk=<?php echo $idmk;?>&idtest=<?php echo $idtest;?>";

            </script>
            <?php
    } 

}

   ?>



</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyDashboard.js"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>

<?php include 'inc/template_end.php'; ?>