<?php 
include("Header.php");
?><!--====== End Header ======-->
        <!--====== Start Page-title-area section ======-->
        <!--====== Start Skills Section  ======-->
       <!--====== End Skills Section  ======-->
        <!--====== Start CTA Section  ======-->
        <!--====== End CTA Section  ======-->
        <!--====== Start Team Section  ======-->
        <section class="team-section pt-125 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-12">
                        <!--====== Section-title ======-->
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <span class="sub-title"><i class="flaticon-plant"></i>Team Member</span>
                            <h2>Meet Our Faculty Members</h2>
                        </div>
                    </div>
                </div>
                <?php 
                $sql="SELECT * FROM members";
                $result=$server->fetch_data($sql);
                if($result)
                {
                ?>
                <div class="row justify-content-center">
                    <?php
                    foreach($result As  $row)
                    {
                    ?>
                    <div class="col-lg-4 col-sm-6">
                        <!--====== Single Team Item ======-->
                        <div class="single-team-item mb-50 wow fadeInUp">
                            <div class="member-img">
                                <img src="Document/Members/<?php echo $row['Image_Location'];?>" alt="Team Image" height=390px; width=390px;>
                                <div class="icon-btn"><i class="far fa-plus"></i></div>
                            </div>
                            <div class="member-info text-center">
                                <h3 class="title"><a href="single-team.html"><?php echo $row['Member_Name']; ?></a></h3>
                                <p><?php echo $row['Description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    } 
                }
                    ?>
                </div>
            </div>
        </section>
        <?php 
include("Footer.php");
?>