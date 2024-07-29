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
                                     <h4 class="text-white">Arometic Plants</h4>
                                </div>
                                <div class="card-body">
                                <button class=" btn btn-success mb-2" onclick="showmodel()">Add Arometic Plants</button>
                               <div class="table-responsive">
                                <table id="table" class="table  table-bordered" style="width:100%">
                                   <thead>
                                    <tr>
                                      <th scope="col">SL No</th>
                                      <th scope="col">Plant Name</th>
                                      <th scope="col">Plant Detalis</th>
                                      <th scope="col">Image Name</th>
                                      <th scope="col">Image</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Time</th>
                                       <th scope="col">Options</th>

                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                        $sql="SELECT * FROM plants WHERE Type='Arometic'";
                                        $Result=$server->insert($sql);
                                        $i=1;
                                        foreach($Result As $data)
                                          {
                                        ?>
                                      <tr>
                                      <th scope="row"><?php echo $i++; ?></th>
                                      <td><?php echo $data['Plant_Name']; ?></td>
                                      <td><?php echo $data['information']; ?></td>
                                       <td><?php echo $data['Image_Location']; ?></td>
                                      <td><img src="../../Document/plants/<?php echo $data['Image_Location'];?>" height=100px,width=100px;></td>
                                      <td><?php echo $data['Date'];?></td>
                                      <td><?php echo $data['Time'];?></td>
                                      <td> 
                                        <button type="button" class="btn btn-danger delete_btn" data-id="<?php echo $data['SL'];?>" data-name="<?php echo $data['Image_Location'];?>" data-url="../../Action/Arometic.php"><i class="fa-sharp fa-solid fa-trash"></i></button>
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
                      <h5 class="modal-title" id="exampleModalLabel">Add Arometic Plants</h5>
                      <button type="button btn-danger" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="Value_Store_Form" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="exampleInputEmail1"style="font-size: 18px;">Plant Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" Name="Name" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1"style="font-size: 18px;">Plant Information</label>
                            <input type="text" class="form-control" id="Detalis" Name="Detalis" required>
                          </div>

                          <div class="form-group">
                            <label for="exampleInputPassword1" style="font-size: 18px;">Upload Plant Image </label>
                            <input type="file" class="form-control pdf" name="PlantImage" id="fileChooser" onchange="return ValidateFileUpload()"  required>
                          </div>
                          <div class="form-group">
                            <img src="images/noimg.jpg" id="blah" height=100px,width=100px;>

                          </div>
                           <input type="hidden" id="url" value="../../Action/Arometic.php">
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

<SCRIPT type="text/javascript">
    function ValidateFileUpload() {
        var fuData = document.getElementById('fileChooser');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }
</SCRIPT>