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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  


<!-- Page content -->
<div id="page-content">
 <!-- Form Validation Content -->
    <!-- Grid Content Block -->
    <div class="block">
    <div class="block-title">
                    <h2>Create Examination</h2>
<?php 
$idmk=$_GET['idmk'];
$idtest=$_GET['idtest'];

  ?>
                </div>
      <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-borderless" id="dynamic_field"> 
                               <thead>
                                    <tr>
                                        <th class="text-center">question</th>
                                        <th class="text-center">answer</th>
                                      
                                    </tr>
                                </thead>
                 
                                  <tr> 
                                         <td><textarea  name="soal[]" placeholder="Please write a question" class="form-control name_list" /></textarea></td>
                                          <td><textarea name="jawabankunci[]" placeholder="Please write an answer" class="form-control name_list" /></textarea></td>    
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  


                                    </tr>  
                                          
                                                                
                               </table>  
                                <div class="form-group form-actions">
                                     <div class="col-md-8 col-md-offset-4">
                                            
                                        <input type="button" name="submit" id="submit" value ="submit" class="btn btn-effect-ripple btn-primary"></button>
                                        </div>
                                                </div>
                          </div>  
                     </form>  
    </div>
 <script>  
 $(document).ready(function(){  
      var i=1;  
      
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><textarea name="soal[]" placeholder="Please write a question" class="form-control name_list" /></td><td><textarea name="jawabankunci[]" id="'+i+' placeholder="Please write an answer" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php?idmk=<?php echo $idmk ?>&idtest=<?php echo $idtest;?>",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                  window.location.href="seeQList.php?idmk=<?php echo $idmk;?>&idtest=<?php echo $idtest;?>";
                }  
           });  
      });  
 });  
 </script>

        
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