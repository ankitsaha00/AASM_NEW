<style>
img.d-block.w-100 {
    height: 380px;
}
</style>
<?php
include("Header.php"); 
?>
        <!--====== Start Banner Section ======-->
        <section class="banner-section">
            <!--====== Hero Wrapper ======-->
            <div class="hero-wrapper-three">
                <!--====== Hero Slider ======-->
                <div class="hero-slider-two">
                    <!--====== Single Slider ======-->
                     <?php 
                         $sql="SELECT * FROM mainslider";
                        $Result=$server->insert($sql);
                         foreach($Result As $row)
                         {
                           
                         ?>
                    <div class="single-slider">
                        
                        <div class="image-layer bg_cover" style="background-image: url(Document/MainSlider/<?php echo $row['Image_Name'];?>); filter: brightness(70%);"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <!--====== Hero Content ======-->
                                    <div class="hero-content text-center">
                                        <span class="sub-title" data-animation="fadeInUp" data-delay=".4s">RGU</span>
                                        <h1 data-animation="fadeInDown" data-delay=".5s">Raiganj University</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s"><?php echo $row['ImageTitle'];?></p>
                                        <div class="hero-button mb-30" data-animation="fadeInDown" data-delay=".7s">
                                            <a href="about.php" class="main-btn golden-btn mb-10">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php
                    } 
                    ?>
                    <!--====== Single Slider ======-->
                     
                </div>
            </div>
        </section>
          
        <!--====== End Banner Section ======-->
        <!--====== Start Features Section ======-->
        <section>
            <div class="row bg-info">
                        <div class="col-md-3 ml-5 mt-3">
                            <div class="card" style="height:450px; background:#0a4b69; padding:10px; margin-top:-20px;border:1px solid #ccc;box-shadow: 0px 0px 20px 0px #000000;margin-left:20px; margin-top:20px;">
                              <div class="card-header">
                                <h4 style="color:white;">Announcement</h4>
                                </div>
                                     <div class="overflow-auto">
                                      <ul class="list-group list-group-flush" style="background-color: pink;">
                                         <?php 
                                                $sql="SELECT * FROM notice ORDER BY SL DESC";
                                                $Result=$server->insert($sql);
                                                 $i=1;
                                                foreach($Result As $data)
                                                  {
                                                    if($data['Show_new']=='Show')
                                                    {
                                                    ?>
                                                          <a href="Document/Total_Notice/<?php echo $data['Notice_Location']; ?>" target="_BLANK"><li class="list-group-item" style="font-weight:bold;"><?php echo $data['Notice_Title']; ?><img src="new.gif"></li></a>
                                                    <?php
                                                    }
                                                    else
                                                    {
                                                    ?>
                                                       <a href="Document/Total_Notice/<?php echo $data['Notice_Location']; ?>" target="_BLANK"><li class="list-group-item" style="font-weight:bold;"><?php echo $data['Notice_Title']; ?></a>
                                                    <?php   
                                                    }
                                                ?>
                                        <?php 
                                          }
                                        ?>
                                      </ul>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                             <div class="card ml-4 mt-4">
                                  <div class="card-header" style="background-color:#0a4b69;">
                                     <h4 style="text-align:center; color:white;">Event's</h4>
                                  </div>
                                  <?php  
                                        $sql="SELECT * FROM events";
                                        $Result=$server->insert($sql);
                                  ?>
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                      <div class="carousel-inner">
                                       <?php
                                       $i=0;
                                        foreach($Result As $data)
                                        {
                                            $Actives='';
                                            if($i==0)
                                            {
                                               $Actives='active';
                                            }
                                        ?>
                                        <div class="carousel-item <?php echo $Actives;?>">
                                          <img class="d-block w-100" src="Document/Events/<?php echo $data['Image_Location'];?>" alt="First slide"><p style="background-color:#0a4b69; text-align: center; color:white;"><?php echo $data['Event_Title']; ?></p>
                                        </div>
                                        <?php
                                        $i++;
                                           } 
                                        ?>
                                      </div>
                                      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                      </a>
                                      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                      </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                     <div class="card" style="height:450px; background:#0a4b69; padding:10px;border:1px solid #ccc;box-shadow: 0px 0px 20px 0px #000000; margin-left:25px; margin-top:35px;">
                              <div class="card-header">
                                 <h4 style="color:white;">Links</h4>
                              </div>
                              <ul class="list-group list-group-flush">
                                <a href="about.php"><li class="list-group-item">About</li></a>
                                <a href="service-details.php"><li class="list-group-item">Facilities</li></a>
                                <a href="Medicinal.php"><li class="list-group-item">Medicinal Plants</li></a>
                                <a href="Arometic.php"><li class="list-group-item">Arometic Plants</li></a>
                                <a href="team.php"><li class="list-group-item">Members</li></a>
                                <a href="contact.php"><li class="list-group-item">Contact Us</li></a>
                              </ul>
                            </div>    
                    </div>
                    
        </section><!--====== End Features Section ======-->
        <!--====== Start About Section ======-->
       <!--====== End About Section ======-->
        <!--====== Start Service Section ======-->
        <!--====== End Service Section ======-->
        <!--====== Start Skills Section  ======-->
        <!--====== Start CTA Section ======-->
       <!--====== End CTA Section ======-->
        <!--====== Start Gallery Section ======-->
        <!--====== End Gallery Section ======-->
        <!--====== Start Pricing Section ======-->
        <!--====== End Pricing Section ======-->
        <!--====== Start Testimonial Section  ======-->
        <!--====== End Testimonial Section  ======-->
        <!--====== Start Blog Section  ======-->
        <!--====== End Blog Section  ======-->
        <!--====== Start Partners Section ======-->
        <!--====== End Partners Section ======-->
        <!--====== Start Footer ======-->
<?php 
include("Footer.php");
?>
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            loop: true,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',

            },
        });
    </script>