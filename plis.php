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
<html>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
   <div class="block full">
        <div class="block-title">
            <h2>add question and answer</h2>
        </div>
                <div class="form-group">  
                     <form name="add_name" id="add_name">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field"> 
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
                                     <div class="col-md-8 col-md-offset-3">
                                            
                                        <input type="button" name="submit" id="submit" value ="submit" class="btn btn-effect-ripple btn-primary"></button>
                                        </div>
                                                </div>
                          </div>  
                     </form>  
                </div>  
           </div>  
      </div>
   
 </html>  
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
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>

