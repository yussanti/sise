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
            <h2>Review Grades</h2>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                <thead>
                    <tr>
                        <th class="text-center">Courses</th>
                        <th class="text-center">Exam</th>
                        <th class="text-center">Participant</th>
                        <th class="text-center">Score</th>
                        
                        <th class="text-center" >Review Answer</th>

                    </tr>
                </thead>
                <tbody>
                   <tr>

                        <?php    
                         if (isset($idmk)) {
                            $idmk = $_GET['idmk'];
                            $idmk=$_GET['idmk'];
                            $idtest=$_GET['idtest'];
                            $username=$_SESSION['username'];
                            $query1 = mysql_query("SELECT tb_courses.courses, tb_exam.exam, tb_totalnilai.mahasiswa, tb_totalnilai.total_nilai FROM tb_totalnilai NATURAL JOIN tb_exam NATURAL JOIN tb_courses  WHERE tb_totalnilai.idmk ='$idmk' AND tb_totalnilai.idtest = '$idtest'");
                        } else {
                            $query1 = mysql_query("SELECT tb_courses.courses, tb_exam.exam, tb_totalnilai.mahasiswa, tb_totalnilai.total_nilai FROM tb_totalnilai NATURAL JOIN tb_exam NATURAL JOIN tb_courses ");
                        }
                        
    
                     $jumlah = mysql_num_rows($query1);
                    while($baris1=mysql_fetch_array($query1)) {
                    ?> 
                    <tr>
                        
                        <td><center><?php echo $baris1['courses'] ;?></center></td>
                        <td><center><?php echo $baris1['exam'] ;?></center></td>
                        
                        <td><center><?php echo $baris1['mahasiswa'] ;?></center></td>
                         <td><center><?php echo $baris1['total_nilai'] ;?></center></td>
                       
                        
                            <td> <center><a href="seeAnswer.php?usr=<?php echo $baris1['mahasiswa']; ?>"><button type="submit" class="btn btn-effect-ripple btn-primary" name="submit" id="submit">Review</button></a></center></td>
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