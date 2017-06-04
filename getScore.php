
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
<?php include 'inc/winnowing.php'; ?>
<?php require 'vendor/autoload.php';?>
<?php include 'inc/JaroWinkler.php';?>


            

<!-- Page content -->
<div id="page-content">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-5 col-md-5 col-md-offset-5 col-lg-4 col-lg-offset-4">
           <!-- Alert Messages Block -->
    <div class="block">
        <!-- Alert Messages Title -->
        <div class="block-title">
            <h2>Finish Exam</h2>
        </div>
        <!-- END Alert Messages Title -->

        <!-- Alert Messages Content -->
        <div class="row">
            
         

                    <h3><strong><center>Are you sure?</center></strong></h3>
                     <form role="form" name="kumpulanidsj" action="" method="post">
                       <div class="block-section"><center>
                        <a href="javascript:history.back()"><button class="btn btn-effect-ripple btn-primary">Back</button></a>

                       <button type="submit" name="submit" id="submit" value="submit" class="btn btn-effect-ripple btn-danger">Finish</button></center>
                         </div>
                    </div>
                <!-- END Info Alert -->
               
                <?php
                isset($_SESSION['username']);
                    $n=0;
                    $query = mysql_query("SELECT * FROM tb_soaljawab ");
                    while ($baris = mysql_fetch_array($query)) {
                        $idsj = $baris['idsoal'];
                        ?>
                        <input type="hidden" name="idsj[<?php echo $n; ?>]" value="<?php echo $idsj; ?>">
                        <?php
                        $n++;
                    }
                    
                ?>  
            

<?php
$tambahtext = @$_POST['submit'];
    if($tambahtext) {   
    $idsj =$_POST['idsj'];
    $idmk =$_GET['idmk'];
    $idtest =$_GET['idtest'];
    $username =$_SESSION['username'];
    // Meload library Sastrawi
    $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
    $stemmer  = $stemmerFactory->createStemmer();
    
    $arrlength=count($idsj);
        for($x=0;$x<$arrlength;$x++)
        
        {
        $idsoal = $idsj[$x];
        $query = mysql_query("SELECT  idsoal,soal,jawabankunci from tb_soaljawab where idsoal = '$idsoal' AND idmk='$idmk' AND idtest='$idtest'");
        $exists = mysql_num_rows($query);
       
            if($exists > 0) //IF there are no returning rows or no existing username
            {
            while($row = mysql_fetch_assoc($query)) // display all rows from query
            {
            $output1=$row["jawabankunci"];
            $n=3;
            $window=5;
            $prima=2;

                    //checking synonym
                    $query = mysql_query("SELECT * FROM sinonim");
                    while ($row4 = @mysql_fetch_array($query)) {
                        $kata1=$row4["kata1"];
                        $kata2=$row4["kata2"];                   
                        $output1=strtolower("$output1");
                        $output1=str_replace("$kata1", "$kata2", "$output1");
                        }

                    

                  
                    
                    $kalimat1   = $stemmer->stem($output1);

                 


            $query2 = mysql_query("SELECT  * from tb_mahasiswa where idsoal = '$idsoal' and idmk='$idmk' and idtest='$idtest' and nama='$username'");
            $exists2 = mysql_num_rows($query2);
                if($exists2 > 0) //IF there are no returning rows or no existing username
                {
                   while($row2 = mysql_fetch_assoc($query2)) // display all rows from query
                   {
                    $output2=$row2["jawaban"];
                    $idjawaban=$row2["idjawaban"];
                    //checking synonym
                    $query = mysql_query("SELECT * FROM sinonim");
                    while ($row3 = @mysql_fetch_array($query)) {
                        $kata1=$row3["kata1"];
                        $kata2=$row3["kata2"];
                        
                        $output2=strtolower("$output2");
                        $output2=str_replace("$kata1", "$kata2", "$output2");
                        }
                        
                   

                     //stemming
                    $kalimat2   = $stemmer->stem($output2);
                    

                    
                    $w = new winnowing($kalimat1, $kalimat2);
                    $w->SetPrimeNumber($prima);
                    $w->SetNGramValue($n);
                    $w->SetNWindowValue($window);

                    $w->process();
                    $nilai = $w->GetJaccardCoefficient();
                    
                    $query4 = mysql_query("insert into tb_nilai (idmk, idtest, username, idsoal, idjawaban, nilai) values ('$idmk','$idtest','$username','$idsoal','$idjawaban','$nilai')");
                    
                    }?>
                    <script type="text/javascript">
                     window.location="totalScore.php?idmk=<?php echo $idmk;?>&idtest=<?php echo $idtest;?>";

                      </script>
            <?php
                }
            }
        }

    }
}

?>  
    
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
