<?php 
session_start();

include ('includes/header.php');
include ('includes/navbar.php');

?>
 <div class="container-fluid">
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Edit Admin Profile</h6>
                                
                        <div class="card-body">
                                  
               <?php
               $connection = mysqli_connect("localhost","root","","wetalkk");
                if (isset($_POST['edit_btn']))
                {
                  $id = $_POST['edit_id'];
                 $query = "SELECT * FROM wetallent WHERE id='$id' ";
                 $query_run = mysqli_query($connection, $query);
                 
                  foreach($query_run as $row)
                  {
                      ?>
                       <form class="user" action="code.php" method="POST">
                        <div class="form-group">
                            
                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
                            <div >
                                <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control" 
                                    placeholder="Entrer Title" >
                                    
                            </div>
                            
                        </div>
                        <div class="form-group">
                   
                            <input type="text" name="edit_subtitle"value="<?php echo $row['subtitle'] ?>" class="form-control" 
                                placeholder="Entrer Subtitle" require>
                                
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                          
                              <textarea type="text" name="edit_description"  value="<?php echo $row['description'] ?>" class="from-control" 
                                placeholder="Entrer Description"></textarea>
                            </div>
                            <div class="col-sm-6">
                                
                                <input type="file"  name="edit_images"value="<?php echo $row['images'] ?>" class="form-control "
                             
                                    placeholder="Entrer Links" required>
                                    
                            </div>
                        </div>
                        <a href="wetallent.php" class="btn btn-danger" >CANCEL</a>
                          <button type="submit" name="update_btn" class="btn btn-primary"> Update </button>

                      
                    </form>
                     <?php
                      
                    }
                }
               ?>
                      
                           
                     
                        </div>
                        </div>
                    </div>

                </div>
          
<?php
    include ('includes/scripts.php');
    include ('includes/footer.php');
    ?>