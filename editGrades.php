<?php
session_start();
include 'inc/connection.php'
?>
<?php
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("index.php");
}

//cek level user
if($_SESSION['level']!="Dosen"){
    header("index.php");
}
?>
<?php include 'inc/configDosen.php'; $template['header_link'] = 'WELCOME'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>


<!-- Page content -->
<div id="page-content">
    <!-- Grid Content Block -->
    <div class="block">
       
  <!-- Datatables Block -->
    <!-- Datatables is initialized in js/pages/uiTables.js -->
    <div class="block full">
        <div class="block-title">
            <h2>Answer List</h2>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th style="width: 120px;" class="text-center">ID</th>
                        <th style="width: 300px;" class="text-center">Question</th>
                        <th class="text-center">Answer</th>
                        <th style="width: 120px;" class="text-center">Score</th>
                            </tr>
                </thead>
                <tbody>
                   <tr>

                        <?php 
                    $usr = $_GET['usr'];
                    $idmk = $_GET['idmk'];
                    $idtest = $_GET['idtest'];
                    $query1 = mysql_query("SELECT * FROM tb_mahasiswa  JOIN tb_soaljawab ON tb_mahasiswa.idsoal=tb_soaljawab.idsoal  JOIN tb_nilai ON tb_mahasiswa.idjawaban=tb_nilai.idjawaban where tb_mahasiswa.nama='$usr'");
                    ?>
                    <form action="editGrades_proc.php?idmk=<?php echo $baris1['idmk']; ?>&usr=<?php echo $usr; ?>&idtest=<?php echo $baris1['idtest']; ?>&idsoal=<?php echo $idsoal; ?>&idjawaban=<?php echo $idjawaban; ?>" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    <?php
                    $jumlah = mysql_num_rows($query1);
                    while($baris1=mysql_fetch_array($query1)) {
                    ?> 
                    <tr>
                        
                        <input type="hidden" id="idtest" name="idtest" class="form-control" value="<?php echo $baris1['idtest']; ?>" >
                        <input type="hidden" id="idjawaban" name="idjawaban" class="form-control" value="<?php echo $baris1['idjawaban']; ?>" >
                         <td><center><input type="text" id="idsoal" name="idsoal" class="form-control" value="<?php echo $baris1['idsoal']; ?>" disabled>
                       </center></td>
                        <td><center><textarea rows="4" cols="50" id="soal" name="soal" class="form-control" 
                         disabled><?php echo $baris1['soal'] ;?></textarea></center></td>
                        <td><center><textarea rows="4" cols="50" id="jawaban" name="jawaban" class="form-control" 
                         disabled><?php echo $baris1['jawaban'] ;?></textarea></center></td>
                        
                        <td><center><input type="text" id="nilai" name="nilai" class="form-control" value="<?php echo $baris1['nilai']; ?>" >
                       </center></td>
                                
                
                    </tr>
                    <?php } ?>
                   
                </tbody>
              
            </table>
                            <CENTER><button type="submit" class="btn btn-effect-ripple btn-danger">Assign New Score</button></CENTER>
                            </form>
                           
            </div>
        </div>
    </div>
    <!-- END Datatables Block -->        
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