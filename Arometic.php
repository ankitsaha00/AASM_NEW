<?php 
include("Header.php");
?><!--====== End Header ======-->
        <!--====== Start Page-title-area section ======-->
        <!--====== End Page-title-area section ======-->
        <!--====== Start Gallery section ======-->
        <section class="gallery-section pt-95 pb-70" oncontextmenu="return false">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <!--====== Section Title ======-->
                        <div class="section-title mb-40">
                            <span class="sub-title"><i class="flaticon-plant"></i>Photo Gallery</span>
                            <h2>Popular Arometic Plants Gallery
                                Inside Our Garden</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
                <div class="row gallery-active">
                    <?php 
                     $sql="SELECT * FROM plants WHERE Type='Arometic'";
                    $Result=$server->insert($sql);
                    foreach($Result As $data)
                    {
                      ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-3 cat-5">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInDown">
                            <div class="project-img">
                                <img src="Document/plants/<?php echo $data['Image_Location'];?>" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title"><?php echo $data['Plant_Name'];?></h3>
                                            <spen><?php echo $data['information'];?></spen>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                     }
                    ?>

                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-1 cat-4">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInDown">
                            <div class="project-img">
                                <img src="assets/images/gallery/Ziziphus oenoplia.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h5 class="title">Ziziphus oenoplia</h5>
                                            <spen>Fruits are edible & good source of Vitamin C </spen>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-2">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInUp">
                            <div class="project-img">
                                <img src="assets/images/gallery/Zingiber zerumbet.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h5 class="title">Zingiber zerumbet</h5>
                                            <spen>Used as Shampoo & natural hair conditioner</spen>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-4 cat-1">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInLeft">
                            <div class="project-img">
                                <img src="assets/images/gallery/Alpinia calcarata.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Alpinia calcarata</h3>
                                            <span>Used for treating cold & cough,Swelling & Stomachache</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-5 cat-2">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInDown">
                            <div class="project-img">
                                <img src="assets/images/gallery/Tylophora indica.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <!-- <a href="project-details.html" class="icon-btn"><i class="fas fa-arrow-right"></i></a> -->
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Tylophora indica</h3>
                                            <span>Roots used as laxative</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-4 cat-3">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInRight">
                            <div class="project-img">
                                <img src="assets/images/gallery/Trichosanthes dioica.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Trichosanthes dioica</h3>
                                            <spen>Fresh Root Juice is given at early morning in empty stomach to expel to intestinal worm of Childrean</spen>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-2 cat-3">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInUp">
                            <div class="project-img">
                                <img src="assets/images/gallery/Xanthosoma sagittifolium.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h4 class="title">Xanthosoma sagittifolium</h4>
                                            <a href="project-details.html">Petiole & rhizome is used as vegetable</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-5">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInDown">
                            <div class="project-img">
                                <img src="assets/images/gallery/Tradescantia pallida.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <!-- <a href="project-details.html" class="icon-btn"><i class="fas fa-arrow-right"></i></a> -->
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Tradescantia pallida</h3>
                                            <spen>Ornamental Plant</spen>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-1">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInUp">
                            <div class="project-img">
                                <img src="assets/images/gallery/Syzygium samarangense.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Syzygium samarangense</h3>
                                            <span>Fruits are Edible</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Gallery section ======-->
        <!--====== Start Partners Section ======-->
<?php 
include("Footer.php");
?>

<script>
   document.addEventListener('keyup', (e) => {
    if (e.key == 'PrintScreen') {
        navigator.clipboard.writeText('');
        alert('Screenshots disabled!');
    }
});

/** TO DISABLE PRINTS WHIT CTRL+P **/
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key == 'p') {
        alert('This section is not allowed to print or export to PDF');
        e.cancelBubble = true;
        e.preventDefault();
        e.stopImmediatePropagation();
    }
});
</script>