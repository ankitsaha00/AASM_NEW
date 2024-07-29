<?php
    include("Header.php");
    include("Sidebar.php");
?>
		<div class="page-wrapper">
            <div class="page-content">
                <div class="row ">
                    <div class="col-3">
                        <div class="card radius-10">
                            <div class="card-body">
                                <?php
                                $sql="SELECT * FROM contact";
                                 $tmsg=$server->total_row($sql); 
                                ?>
                                <a href="Message.php">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary"><h5>Total Message</h5></p>
                                    
                                        <h4 class="my-1"><?php echo $tmsg;?></h4>
                                        <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i></p>
                                    </div>
                                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>
                            </a>
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql="SELECT * FROM feedback";
                     $TFeedback=$server->total_row($sql); 
                    ?>
                    <div class="col-3">
                        <a href="FeedBack.php">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary"><h5>Total FeedBack</h5></p>
                                        
                                        <h4 class="my-1"><?php echo $TFeedback;?></h4>
                                        <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i></p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                                <div id="chart2"></div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <?php
                    $sql="SELECT * FROM notice";
                     $tn=$server->total_row($sql); 
                    ?>
                    <div class="col-3">
                        <a href="Notice.php">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary"><h5>Total Notice</h5></p>
                                        
                                        <h4 class="my-1"><?php echo $tn;?></h4>
                                        <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i></p>
                                    </div>
                                    <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-binoculars'></i>
                                    </div>
                                </div>
                                <div id="chart3"></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php
                    $sql="SELECT * FROM events";
                     $TEvent=$server->total_row($sql); 
                    ?>
                    <div class="col-3">
                        <div class="card radius-10">
                            <a href="Event.php">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-secondary"><h5>Event Image's</h5></p>
                                        
                                        <h4 class="my-1"><?php echo $TEvent; ?></h4>
                                        <p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i></p>
                                    </div>
                                    <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='bx bx-line-chart-down'></i>
                                    </div>
                                </div>
                                <div id="chart3"></div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                 <div class="border p-3 rounded">
                                 <div class="row d-flex justify-content-center">
                                    <h2 class="bg bg-success" style="text-align: center; color: white;">Detali Report</h2>
                                    <html>
                                          <?php
                                          $sql="SELECT * FROM `plants` WHERE Type='Medicinal'"; 
                                          $TMedicinal=$server->total_row($sql);

                                          $sql="SELECT * FROM `plants` WHERE Type='Arometic'"; 
                                          $TArometic=$server->total_row($sql);

                                          $sql="SELECT * FROM `members`"; 
                                          $TMembers=$server->total_row($sql);
                                          ?>
                                          <head>
                                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                            <script type="text/javascript">
                                              google.charts.load("current", {packages:["corechart"]});
                                              google.charts.setOnLoadCallback(drawChart);
                                              function drawChart() {
                                                var data = google.visualization.arrayToDataTable([
                                                  ['Detalis', 'Total'],
                                                  ['Total Message',<?php echo $tmsg;?>],
                                                  ['Total FeedBack',<?php echo $TFeedback;?>],
                                                  ['Total Notice',<?php echo $tn;?>],
                                                  ['Total Event',<?php echo $TEvent; ?>],
                                                  [' Medicinal Plants',<?php echo $TMedicinal; ?>],
                                                  [' Arometic Plants',<?php echo $TArometic; ?>],
                                                  [' Faculty Members',<?php echo $TMembers; ?>],
                                                ]);

                                                var options = {
                                                   is3D: true,
                                                };

                                                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                                chart.draw(data, options);
                                              }
                                            </script>
                                          </head>
                                          <body>
                                            <div id="donutchart" style="width: 900px; height: 500px;"></div>
                                          </body>
                                        </html>
                                    
                                 </div>
                              
                            </div>
                               
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
            
    <?php
    include("Footer.php");
    ?> -->
<!--     <script src="https://kit.fontawesome.com/0e693b507d.js" crossorigin="anonymous"></script> -->
<script>
    function cheque() {
        let id=$('#phone').val();
        $.post('../../Action/Admin/showinfo.php',   // url
       { id:id, phone:"phone"}, // data to be submit
       function(data, status, jqXHR) {// success callback
        $('#data').html(data);
        })


    }
</script>