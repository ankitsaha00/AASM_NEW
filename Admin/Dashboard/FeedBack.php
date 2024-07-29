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
                                     <h4 class="text-white">All FeedBack's</h4>
                                </div>
                                <div class="card-body">
                               <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                   <thead>
                                    <tr>
                                      <th scope="col">SL No</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Reating</th>
                                      <th scope="col">Message</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Time</th>
                                       <th scope="col">Options</th>

                                    </tr>
                                  </thead>
                                  <tbody class="text-center">
                                    <?php 
                                        $sql="SELECT * FROM feedback";
                                        $Result=$server->insert($sql);
                                         $i=1;
                                        foreach($Result As $data)
                                          {
                                        ?>
                                      <tr>
                                      <th scope="row"><?php echo $i++; ?></th>
                                      <td><?php echo $data['Name']; ?></td>
                                      <td><?php echo $data['Email']; ?></td>
                                      <td><?php echo $data['Reating']; ?><i class="fa-solid fa-star"></i></td>
                                      <td><?php echo $data['Message']; ?></td>
                                      <td><?php echo $data['Date'];?></td>
                                      <td><?php echo $data['Time'];?></td>
                                      <td> 
                                        <button type="button" class="btn btn-danger delete_btn" data-id="<?php echo $data['SL'];?>" data-url="../../Action/Reating.php"><i class="fa-sharp fa-solid fa-trash"></i></button>
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
        </div>
       <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php

    include("Footer.php");
    ?>
    <script>
        $(document).ready()
        {
           
           $("#send").click(function(e){
             let sl=$(this).val();
             alert(sl);
             $("#exampleModal").modal("show");
           });
        }   
     </script>