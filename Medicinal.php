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
                            <h2>Popular Medicinal Plants Gallery
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
                     $sql="SELECT * FROM plants WHERE Type='Medicinal'";
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
                                <img src="assets/images/gallery/Abelmoschus moschatus.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h5 class="title">Abelmoschus moschatus</h5>
                                            <spen>Seeds are use in Flatulence,Sex Stimulant & Sperm Enhancer.</spen>
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
                                <img src="assets/images/gallery/Abroma augusta.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h5 class="title">Abroma augusta</h5>
                                            <spen>Infusion of Petiole is used to cure Physical Weakness & Sexual Disabilities.</spen>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 item cat-3 cat-5">
                        <!--====== Gallery Item ======-->
                        <div class="single-project-item-three mb-30 wow fadeInDown">
                            <div class="project-img">
                                <img src="assets/images/gallery/Abrus precatorius.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Abrus precatorius</h3>
                                            <spen>Roots are used aginst sexual disease,jaundice & act as abortifacient</spen>
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
                                <img src="assets/images/gallery/Acacia auriculiformis.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Acacia auriculiformis</h3>
                                            <a href="project-details.html">Timber yielding plant</a>
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
                                <img src="assets/images/gallery/Abutilon indicum.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <!-- <a href="project-details.html" class="icon-btn"><i class="fas fa-arrow-right"></i></a> -->
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title"><a href="project-details.html">Abutilon indicum</a></h3>
                                            <span>Root is diueetic & used for leporsoy,Cough & Fever</span>
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
                                <img src="assets/images/gallery/Acacia catechu.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Acacia catechu</h3>
                                            <spen>Used against leucorrhoea,asthma,cough & bronchitis</spen>
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
                                <img src="assets/images/gallery/Acacia concinna.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title"><a href="project-details.html">Acacia concinna</a></h3>
                                            <a href="project-details.html">Fruit powder is used as Hair tonic</a>
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
                                <img src="assets/images/gallery/Abutilon indicum (1).jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <a href="project-details.html" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Abutilon indicum</h3>
                                            <spen>Stem bark is used treat diarrhoea,indigestion,acidity,gum swelling & Sental problems</spen>
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
                                <img src="assets/images/gallery/Acalypha indica.jpg" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <a href="project-details.html" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                                    <div class="hover-content text-white">
                                        <div class="text">
                                            <h3 class="title">Acalypha indica</h3>
                                            <span>Whole plant juice is used as an antidote of snake bite by the <b>Santal Trible</b></span>
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