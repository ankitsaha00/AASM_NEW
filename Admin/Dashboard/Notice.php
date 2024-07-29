 
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
                                     <h4 class="text-white">Notice</h4>
                                </div>
                                <div class="card-body">
                                <button class=" btn btn-success mb-2" onclick="showmodel()">Add Notice</button>
                               <div class="table-responsive">
                                <table id="table" class="table  table-bordered" style="width:100%">
                                   <thead>
                                    <tr>
                                      <th scope="col">SL No</th>
                                      <th scope="col">Notice Title</th>
                                      <th scope="col">Notice Name</th>
                                      <th scope="col">Show Notice</th>
                                      <th scope="col">Change Status</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Time</th>
                                       <th scope="col">Options</th>

                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                        $sql="SELECT * FROM notice ORDER BY SL DESC";
                                        $Result=$server->insert($sql);
                                         $i=1;
                                        foreach($Result As $data)
                                          {
                                        ?>
                                      <tr>
                                      <th scope="row"><?php echo $i++; ?></th>
                                      <td><?php
                                      if($data['Show_new']=='Show')
                                      {
                                       echo $data['Notice_Title']?><img src='../../new.gif'>   
                                      <?php }
                                      
                                    else
                                    {
                                     echo $data['Notice_Title']; 
                                    }
                                     ?>
                                         
                                       </td>
                                      <td><?php echo $data['Notice_Location']; ?></td>
                                      <td><a href="../../Document/Total_Notice/<?php echo $data['Notice_Location']; ?>" target="_BLANK">Show Notice</a>
                                      </td>
                                      <td>
                                         <select class="form-control" name="status" onchange="status(<?php echo $data['SL'];?>,this.value,'showblink')" required>
                                          <option value="Show" <?php echo ($data['Show_new']=="Show")?"selected":"";?>>Show</option>

                                           <option value="Hide" <?php echo ($data['Show_new']=="Hide")?"selected":"";?>>Hide</option>
                                      </td>
                                      <td><?php echo $data['Date'];?></td>
                                      <td><?php echo $data['Time'];?></td>
                                      <td> 
                                        <button type="button" class="btn btn-danger delete_btn" data-id="<?php echo $data['SL'];?>" data-name="<?php echo $data['Notice_Location'];?>" data-url="../../Action/Notice.php"><i class="fa-sharp fa-solid fa-trash"></i></button>
                                      </td>
                                    </tr>
                                    <?php
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
            <!-- Modal -->
              <div class="modal fade" id="mymodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color: #a9caeb;">
                      <h5 class="modal-title" id="exampleModalLabel">Add Notice</h5>
                      <button type="button btn-danger" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="Value_Store_Form" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1"style="font-size: 18px;">Notice Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" Name="Notice_Title" aria-describedby="emailHelp" required>
                          </div>

                          <div class="form-group mt-2">
                            <label for="exampleInputEmail1"style="font-size: 18px;">Animation</label>
                            <select class="form-select" aria-label="Default select example" name="Animation" id="Animation" required>
                              <option selected>Select Your Animation Status</option>
                              <option value="Show">Show</option>
                              <option value="Hide">Hide</option>
                            </select>
                          </div>
                          <div class="form-group mt-2">
                            <label for="exampleInputPassword1" style="font-size: 18px;">Upload Notice </label>
                            <input type="file" class="form-control pdf" name="Notice" required>
                          </div>
                           <input type="hidden" id="url" value="../../Action/Notice.php">
                          <input type="submit" class="btn btn-primary mt-2" name="Submit" id="Submit" value="Submit">
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal()">Close</button>
                    </div>
                  </div>
                </div>
              </div>
<!-- close Model -->
        </div>

<?php

  include("Footer.php");
   ?>
<script>
  function showmodel()
  {
     $("#mymodel").modal("show");
  }
  function closeModal()
  {
     $("#mymodel").modal("hide");
  }
</script>