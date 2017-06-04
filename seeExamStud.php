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
       
  <!-- Datatables Block -->
    <!-- Datatables is initialized in js/pages/uiTables.js -->
    <div class="block full">
        <div class="block-title">
            <h2>Examination</h2>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th style="width: 120px;" class="text-center">ID Courses</th>
                        <th class="text-center">Lecturer</th>
                        <th class="text-center">Course</th>
                        
                        <th class="text-center">Exam Name</th>
                        <th class="text-center" style="width: 75px;">Details</th>
                    </tr>
                </thead>
                <tbody>
                   <tr>

                        <?php 
                        if (isset($idmk)) {
                            $idmk = $_GET['idmk'];
                            $username=$_SESSION['username'];
                            $query1 = mysql_query("SELECT * FROM tb_exam INNER JOIN tb_courses ON tb_exam.idmk = tb_courses.idmk where idmk='$idmk'");
                        } else {
                            $username=$_SESSION['username'];
                           $query1 = mysql_query("SELECT * FROM tb_exam INNER JOIN tb_courses ON tb_exam.idmk = tb_courses.idmk");
                        }

                   
    
                    $jumlah = mysql_num_rows($query1);
                    while($baris1=mysql_fetch_array($query1)) {
                    ?> 
                    <tr>
                        <td><center><?php echo $baris1['idmk'] ;?></center></td>
                        <td><center><?php echo $baris1['username'] ;?></center></td> 
                        
                        <td><center><?php echo $baris1['courses'] ;?></center></td> 
                        <td><center><?php echo $baris1['exam'] ;?></center></td>
                        
                        <td class="text-center">
                             <a href="takeExamStud.php?idmk=<?php echo $baris1['idmk'];?>&idtest=<?php echo $baris1['idtest'];?>" data-toggle="tooltip" title="Edit Courses"><button type="submit" name="take" id="submit"  value="take exam" class="btn btn-effect-ripple btn-primary">take exam</button></a>
                        </td>
                    </tr>
                    <?php } ?>
                   
                </tbody>
              
            </table>
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