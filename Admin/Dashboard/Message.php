 <?php
 include("Header.php");
 include("Sidebar.php");
 ?> 
 <div class="page-wrapper">
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-primary">
                                     <h4 class="text-white">All Message</h4>
                                </div>
                                <div class="card-body">
                               <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                   <thead>
                                    <tr>
                                      <th scope="col">SL No</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Ph No</th>
                                      <th scope="col">Subject</th>
                                      <th scope="col">Message</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Time</th>
                                       <th scope="col">Options</th>

                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                     $sql="SELECT * FROM contact  ORDER BY SL DESC";
                                     if($data=$server->fetch_data($sql))
                                     {
                                      $i=1;
                                      foreach($data as $item)
                                      {
                                      ?>
                                      <tr>
                                      <th scope="row"><?php echo $i++; ?></th>
                                      <td><?php echo $item['Name']; ?></td>
                                      <td><?php echo $item['Email']; ?></td>
                                      <td><?php echo $item['PhNo']; ?></td>
                                      <td><?php echo $item['Subject']; ?></td>
                                      <td><?php echo $item['Msg']; ?></td>
                                      <td><?php echo $item['Date'];?></td>
                                      <td><?php echo $item['Time'];?></td>
                                      <td> 
                                        <button type="button" class="btn btn-danger delete_btn" data-id="<?php echo $item['SL'];?>" data-url="../../Action/Contect_Us.php">Delete</button>

                                        <button class="btn btn-info" id="send" name="btn" onclick="show('<?php echo $item['Name'];?>','<?php echo $item['Email']; ?>')">Reply</button>
                                      </td>
                                    </tr>
                                    <?php
                                     }
                                     }
                                    ?>
                                  </tbody>
                                </table>
                                </div>
                               </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reply Panel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="Value_Store_Form" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1"style="font-size: 18px;">Name</label>
                            <input type="text" class="form-control" id="Name" Name="Name" readonly>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1"style="font-size: 18px;">Email</label>
                            <input type="text" class="form-control" id="Email" Name="Email" readonly>
                          </div>
                            
                             <div class="form-group">
                            <label for="exampleInputEmail1"style="font-size: 18px;">Subject</label>
                            <input type="text" class="form-control"  Name="Subject"  id="Subject" required>
                          </div>

                           <div class="form-group">
                            <label for="exampleInputEmail1"style="font-size: 18px;">Message</label>
                            <input type="text" class="form-control"  Name="msg" id="msg" required>
                          </div>
                          <div class="form-group">
                           <input type="hidden" id="url" value="../../Action/Reply.php">

                          <input type="submit" name="submit" id="submit" class="btn btn-primary mt-2" value="Reply"> 
                          </div>
                           
                      </form>
      </div>
    </div>
  </div>
</div>
<?php

    include("Footer.php");
    ?>
    <script>
      function show(Name,Email)
      {
        $("#Name").val(Name);
        $("#Email").val(Email);
        $("#exampleModal").modal("show");
      }
       function closeModal()
      {
         $("#exampleModal").modal("hide");
      }
     </script>