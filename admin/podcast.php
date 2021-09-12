<?php 
session_start();
$connection = mysqli_connect("localhost","root","","wetalkk");
include ('includes/header.php');
include ('includes/navbar.php');

?>
<link rel="stylesheet" href="../admin/code.css">

<script src="https://kit.fontawesome.com/9a427e7cd4.js" crossorigin="anonymous"></script>
<div class="container-fluid">
<!-- Modal -->

<div class="modal fade" id="addadminprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            
            <div class="col-lg-7">
                <div class="p-5">
                    <div >
                        <h3 >Create New Podcast</h3>
                    </div>
                    <form class="user" action="code.php" method="POST" enctype="multipart/from-data">
                        <div class="form-group">
                            <div >
                                
                                <input type="text" name="titleV" class="f-group" 
                                    placeholder="Entrer Title" required>
                                    
                            </div>
                            
                        </div>
                        <div class="form-group">
                   
                            <input type="text" name="subtitleV" class="f-group" 
                                placeholder="Entrer Subtitle" required>
                                
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                          
                              <textarea type="text" name="descriptionV" class="area" 
                                placeholder="Entrer Description" required></textarea>
                            </div>
                            <div class="col-sm-6">
                                
                                <input type="file"  name="video"  class="f-group"
                             
                                    placeholder="Upload video" required>
                                    
                            </div>
                        </div>
                        <div >
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="podcast_btn" class="btn btn-primary">Save </button>
      </div>

                      
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>

</div>


      </div>
      
    </div>
  </div>
</div>
<!-- DataTales Example -->

<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Admin Profile</h6>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                                 Add New Podcast
</button>
                            </div>
                        <div class="card-body">
<?php

 if(isset($_SESSION['success']) && $_SESSION['success']!='')
 {
     echo '<h2 class="bg-primary text-white"> '.$_SESSION['success'].'</h2>';
     unset($_SESSION['success']);
 }

 if(isset($_SESSION['status']) &&$_SESSION['status']!='')
 {
     echo '<h2 class="bg-danger text-white"> '.$_SESSION['status'].'</h2>';
     unset($_SESSION['status']);
 }
?>
                            <div class="table-responsive">
<?php
$connection = mysqli_connect("localhost","root","","wetalkk");
$query = "SELECT * FROM podcast";
$query_run = mysqli_query($connection,$query);
?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>subTitle</th>
                                            <th>Description</th>
                                            <th>Video</th>
                                            <th>Edit</th>
                                            <th>DELETE</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                    <tbody>
                                        <?php
                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                            while($row = mysqli_fetch_assoc($query_run))
                                            {
                                                ?>
                                                
                                        <tr>
                                            <td><?php echo $row['id']    ?></td>
                                            <td><?php echo $row['titleV']    ?></td>
                                            <td><?php echo $row['subtitleV']    ?></td>
                                            <td><?php echo $row['descriptionV']    ?></td>
                                            <td><?php echo $row['video']    ?></td>
                                            <td>
                                                <form action="podcast_edit.php" method="POST">
                                                    <input  type="hidden"name="edit_id" value="<?php echo $row['id'] ?>" >
                                                <button type="submit" name="edit_btn" class="btn btn-success" > EDIT</button>
                                            </form>
                                            </td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                            </form>
                                            </td>
                                            
                                        </tr>
                                        <?php
                                            }
                                        }
                                        else{
                                            echo "no record found";
                                        }
                                        ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
<?php
    include ('includes/scripts.php');
    include ('includes/footer.php');
    ?>