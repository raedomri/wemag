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
                 $query = "SELECT * FROM register WHERE id='$id' ";
                 $query_run = mysqli_query($connection, $query);
                 
                  foreach($query_run as $row)
                  {
                      ?>
                      <form action="code.php" method="POST">
                          <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
                      <div class="form-group">
                                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" id="exampleFirstName"
                                    placeholder="Entrer Username">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        <div class="form-group">
                            <input type="email" name="edit_email"  value="<?php echo $row['email'] ?>" class="form-control" 
                                placeholder="Email Address">
                                <i class="fa fa-envelope-open" aria-hidden="true"></i>
                        </div>
                        <div class="form-group">
                                <input type="password" name="edit_pass" value="<?php echo $row['password'] ?>" class="form-control"
                                    placeholder="Password">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            </div>
                            <a href="register.php" class="btn btn-danger" >CANCEL</a>
                          <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>
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