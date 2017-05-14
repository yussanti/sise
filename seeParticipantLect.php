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
    <!-- Grid Content Block -->
    <div class="block">
       
  <!-- Datatables Block -->
    <!-- Datatables is initialized in js/pages/uiTables.js -->
    <div class="block full">
        <div class="block-title">
            <h2>View Participants</h2>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th style="width: 120px;" class="text-center">ID Courses</th>
                        <th class="text-center">Courses</th>
                        <th class="text-center">Participant</th>
                        
                        <th class="text-center" style="width: 100px;"><i class="gi gi-cogwheel"></i></th>

                    </tr>
                </thead>
                <tbody>
                   <tr>

                        <?php    
                        $idmk=$_GET['idmk'];
                     
                        $query1 = mysql_query("SELECT tb_peserta.idmk, tb_courses.courses, tb_peserta.username FROM tb_peserta INNER JOIN tb_courses ON tb_peserta.idmk=tb_peserta.idmk WHERE tb_peserta.idmk='$idmk'");
    
                     $jumlah = mysql_num_rows($query1);
                    while($baris1=mysql_fetch_array($query1)) {
                    ?> 
                    <tr>
                        <td><center><?php echo $baris1['idmk'] ;?></center></td>
                        
                        <td><center><?php echo $baris1['courses'] ;?></center></td>
                        <td><center><?php echo $baris1['username'] ;?></center></td>
                        <td class="text-center">
                            <a href="addParticipant.php?idmk=<?php echo $idmk; ?>" data-toggle="tooltip" title="add another participant" class="btn btn-effect-ripple btn-xs btn-info"><i class="gi gi-user_add"></i></a>
                            <a href="deleteParticipant.php?usr=<?php echo $baris1['username']; ?>&idmk=<?php echo $idmk;?>" data-toggle="tooltip" title="Delete participant" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    <?php } ?>
                   
                </tbody>
              
            </table>
             <center><a href="addParticipant.php?idmk=<?php echo $idmk; ?>"><button type="submit" class="btn btn-effect-ripple btn-primary" name="submit" id="submit">add Participant</button></a></center>
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