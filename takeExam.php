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


<!-- Page content -->
<div id="page-content">
    <!-- Grid Content Block -->
    <div class="block">
        <!-- Grid Content Title -->
        <div class="block-title">
            <h2>Ujian Jaringan Komputer</h2>
        </div>
        <!-- END Grid Content Title -->
         <form action="" method="post">
        <?PHP $query = mysql_query("SELECT  soal from tb_soaljawab");
            $exists = mysql_num_rows($query);
                if($exists > 0) //IF there are no returning rows or no existing username
                    {
                    while($row = mysql_fetch_assoc($query)) // display all rows from query
                    {
                        $kalimat1=$row["soal"];?>
            <table id="general-table" class="table table-striped table-bordered table-vcenter">
                        
                <tr>
                    <tr><?php echo $kalimat1;?> </tr>
                    <tr><b></b></tr>
                </tr>


                <tr>
                        <tr>
                            <textarea name="soal_essay$i; ?>]"  class="form-control" ></textarea>
                        </tr>
                </tr>
            <?php }}?>
            </table>
              <div class="block-section">
                   
                   
<input type="submit" name="submit" id="submit" class="button" value="Submit"/>
</form>
                                  </div>
<?PHP
    $idsoal = @$_POST['idsoal'];
    $nama = @$_SESSION['username'];
    $jawaban = @$_POST['jawaban'];
    $arr = array();    
    $tambahtext = @$_POST['submit'];
    if($tambahtext) {
           mysql_query("insert into tb_mahasiswa values('$idsoal', '$nama','$npm','$jawaban')");
            ?>
            <script type="text/javascript">
                window.location="halstudent.php";

            </script>
        
        <?php
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