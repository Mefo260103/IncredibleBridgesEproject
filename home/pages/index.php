<?php
if(!empty($_POST)) {
	require_once ('../IncredibleBridgesEproject/Admin_eproject/admin/db/dbhelper.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="../style/grid.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="icon" href="http://www.domain.com/favicon.ico" type="image/x-icon" />
    <title>INCREDIBLE BRIDEGES</title>
    <style>
        .about-us{
        background-image: url('../img/SlideImg/background2.jpg');
        }
        .countrybannerfixed{ 
        background-image: url('../img/SlideImg/leo.jpg');
        }
        #china{
        background-image: url('../img/SlideImg/china.jpg');
        }
    </style>
</head>
<body>
    <section>
        <div class="slideshow-container"></div>
        <div class="navbar">
            <div class="navbar-left">
                <a href="home/index.php">
                    <span class="lg">INCREDIBLE</span>
                    <span class="go">Bridges</span>
                </a>
            </div>
            <div class="navbar-right">
                <ul>
                    <li>
                        <a href="gallery.php">GALLERY</a>
                    </li>
                    <li>
                        <a href="../top10bridges/top10Bridges.php">BRIDGES
                            <i class="fa-solid fa-caret-down"></i>
                        </a>
                    </li>
                    <li>
                        <a href="abus.php">ABOUT US</a>
                    </li>
                </ul>
            </div>
        </div>

         <!--Auto slide   -->

        <div class="Slide">
            <div class="mySlide fade">
                <img src="../img/SlideImg/img1.jpg" >
                <div class="text">
                    <h3><a id="readmore" href="../top10bridges/goldengate.php">
                        Golden Gate Bridge</a>
                    </h3>
                    <h1>
                        WORLD'S MOST FAMOUS BRIDGE
                    </h1>
                    <h5>
                        Golden Gate Bridge is most famous and most visited bridge in the World
                        <br><a href="../top10bridges/goldengate.php">read more</a>
                    </h5>
                </div>
            </div>

            <div class="mySlide fade">
                <img src="../img/SlideImg/img2.jpg" >
                <div class="text">
                    <h3><a id="readmore" href="../highest/dugebr.php">
                        Duge Bridge</a>
                    </h3>
                    <h1>
                        WORLD'S HIGHEST BRIDGE
                    </h1>
                    <h5>
                        HEIGHT : 565 metres (1,850 feet) above the Beipan River
                        <a href="../highest/dugebr.php">read more</a>
                    </h5>
                </div>
            </div>
            <div class="mySlide fade">
                <img src="../img/SlideImg/img3.jpg" >
                <div class="text">
                    <h3><a id="readmore" href="../oldest/limyra.php">
                        Bridge near Limyra</a>
                    </h3>
                    <h1>
                        WORLD'S OLDEST BRIDGE
                    </h1>
                    <h5>
                        Built in the late Late Helladic III (ca. 1300-1190 BC)
                        <a href="../oldest/limyra.php">read more</a>
                    </h5>
                </div>
            </div>
            <div class="mySlide fade">
                <img src="../img/SlideImg/img4.jpg" >
                <div class="text">
                    <h3><a id="readmore" href="../longest/danyang.php">
                        Danyang-Kunshan Grand Bridge</a>
                    </h3>
                    <h1>
                        WORLD'S LONGEST BRIDGE
                    </h1>
                    <h5>
                        LENGTH : 164.8-kilometre-long
                        <a href="../longest/danyang.php">read more</a>
                    </h5>
                </div>
            </div>

        </div>
        
    </section>

<!-- Menu -->
<section>
    <div class="navbar-menu">
        <div class="navbar-left">
            <a href="index.php">
                <span class="lg">INCREDIBLE</span>
                <span class="go">Bridges</span>
            </a>
        </div>
        <div class="navbar-right margin-o">
            <ul>
                <li><a href="#">HOME</a></li>
                <li>
                    <div class="dropdown">
                        <a href="#">BRIDGES</a>
                        <div class="dropdown-content">
                          <span class="list-bridges">
                            <a href="../top10bridges/top10Bridges.php">TOP 10 BRIDGES ></a>
    
                                <div class="top-content">
                                    <a href="../top10bridges/goldengate.php">THE GOLDEN GATE BRIDGES</a><br>
                                    <a href="../top10bridges/akashi.php">AKASHI KAIKYO BRIDGE</a><br>
                                    <a href="../top10bridges/sunshine.php">SUNSHINE SKYWAY BRIDGE</a><br>
                                    <a href="../top10bridges/tower.php">TOWER BRIDGE</a><br>
                                    <a href="../top10bridges/firthBrd.php">FORTH BRIDGE</a><br>
                                    <a href="../top10bridges/brooklyn.php">BROOKLYN BRIDGE</a><br>
                                    <a href="../top10bridges/chesapeake.php">CHESAPEAKE BAY BRIDGE–TUNNEL</a><br>
                                    <a href="../top10bridges/sydnes.php">SYDNEY HARBOUR BRIDGE</a><br>
                                    <a href="../top10bridges/leonard.php">LEONARD P. ZAKIM BUNKER HILL BRIDGE</a><br>
                                    <a href="../top10bridges/london.php">LONDON BRIDGE (LAKE HAVASU CITY)</a><br>
                                </div>
                              
                          </span>
                          <span class="list-bridges "><a href="../list-bridges/longest.php">LONGEST ></a>
                            <div class="top-content list-longest">
                                <a href="../longest/danyang.php">DANYANG–KUNSHAN GRAND BRIDGE</a><br>
                                <a href="../longest/tianjin.php">TIANJIN GRAND BRIDGE</a><br>
                                <a href="../longest/manchac.php">MANCHAC SWAMP BRIDGE</a><br>
                            </div>
                            </span><br>
                          <span class="list-bridges list-highest"><a href="../list-bridges/highest.php">HIGHEST ></a>
                            <div class="top-content list-highest">
                                <a href="../highest/dugebr.php">DUGE BRIDGE</a><br>
                                <a href="../highest/siduRiver.php">SIDU RIVER BRIDGE</a><br>
                                <a href="../highest/puli.php">PULI BRIDGE</a><br>
                            </div>  
                          </span><br>
                          <span class="list-bridges "><a href="../list-bridges/oldest.php">OLDEST ></a>
                            <div class="top-content list-oldest">
                                <a href="../oldest/limyra.php">BRIDGE NEAR LIMYRA</a><br>
                                <a href="../oldest/kapellebrucke.php">KAPELLBRUCKE</a><br>
                                <a href="../oldest/frankford.php">FRANKFORD AVENUE BRIDGE</a><br>
                                
                            </div>  
                          </span><br>
                        </div>
                      </div>
                </li>
                <li><a href="sitemap.php">SITE MAP</a></li>
                <li><a href="querry.php">QUERIES</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="abus.php">ABOUT US</a></li>
                <li><a href="ctus.php">CONTACT US</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
        </div>
    </div>
</section>

<!--Container -->
    <div class="container">
        <div class="content-container">
            <div class="list-img">
                <a href="../top10bridges/top10Bridges.php"><img class="hvr" src="../img/famousBr/img1.jpg" alt="">
                    <h3>FAMOUS BRIDGES</h3></a>
                <a href="../top10bridges/goldengate.php">GOLDEN GATE BRIDGE</a><br>
                <a href="../top10bridges/akashi.php">AKASHI KAIKYO BRIDGE</a><br>
                <a href="../top10bridges/sushine.php">SUNSHINE SKYWAY BRIDGE</a>    
            </div>
            <div class="list-img">
                <a href="../list-bridges/longest.php"><img class="hvr" src="../img/longestBr/img-main.jpg" alt="">
                    <h3>LONGREST BRIDGES</h3></a>
                <a href="../longest/danyang.php">DANYANG–KUNSHAN BRIDGE</a><br>
                <a href="../longest/tianjin.php">TIANJIN GRAND BRIDGE</a><br>
                <a href="../longest/manchac.php">MANCHAC SWAMP BRIDGE</a>    
            </div>
            <div class="list-img">
                <a href="../list-bridges/highest.php"><img class="hvr" src="../img/highestbr/img1.jpg" alt="">
                    <h3>HIGHEST BRIDGES</h3></a>
                <a href="../highest/dugebr.php">DUGE BRIDGE</a><br>
                <a href="../highest/siduRiver.php">SIDU RIVER BRIDGE</a><br>
                <a href="../highest/puli.php">PULI BRIDGE</a>    
            </div>
            <div class="list-img">
                <a href="../list-bridges/oldest.php"><img class="hvr" src="../img/oldest/img1.jpg" alt="">
                    <h3>OLDEST BRIDGES</h3></a>
                <a href="../oldest/limyra.php">Bridge near Limyra</a><br>
                <a href="../oldest/kapellebrucke.php">Kapellbrücke</a><br>
                <a href="../oldest/frankford.php">Frankford Avenue Bridge</a>    
            </div>
        </div>
        <!-- Country Banner  -->
        <div class="countrybannerfixed">
            <div style="background-color: rgba(0,0,0,0.378) ;">
                <div class="country-row">
                    <div class="row-left">
                        Some <br>
                        Country <br>
                        Famous For <br>
                        Their <br>
                        Bridge
                    </div>
                    <div class="row-right">
                        <div class="country-name">
                            <div id="china" >
                                <div id="cardlabel">
                                    CHINA
                                </div>
                        
                            </div>
                        </div>
                        <div class="country-name">
                            <div id="china"   style="background-image: url('../img/SlideImg/UK.jpg')">
                                <div id="cardlabel">
                                    UK
                                </div>
                                
                            </div>
                        </div>

                        <div class="country-name">
                            <div id="china" style="background-image: url('../img/SlideImg/Pearl-Bridge-Japan.jpg')">
                                <div id="cardlabel">
                                    JAPAN
                                </div>
                               
                            </div>
                        </div>
                        
                        <div class="country-name">
                            <div id="china"  style="background-image: url('../img/SlideImg/leo.jpg');">
                                <div id="cardlabel">
                                    CHINA
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Most visited Bridges -->
        <div class="most-visited">
            <h2 style="text-align: center; font-weight: 600; font-size: 40px;">MOST VISITED BRIDGES</h2>
            <div class="block-bridges "> 
                <div class="content">
                    <h3 style="color: red;font-size: 25px;">The Golden Gate Bridge:</h3>
                    <p>The Golden Gate Bridge is a suspension bridge spanning the Golden Gate, the one-mile-wide (1.6 km) strait connecting San Francisco Bay and the Pacific Ocean. The structure links the U.S. city of San Francisco, California—the northern tip of the San Francisco Peninsula—to Marin County, carrying both U.S. Route 101 and California State Route 1 across the strait. It also carries pedestrian and bicycle traffic, and is designated as part of U.S. Bicycle Route 95.... <a   href="">read more</a></p>
                </div>
                <div class="img-content">
                    <div class="img-visit"><img src="../img/the most visited/img1.jpg" alt=""></div>
                    <div class="img-visit"><img src="../img/the most visited/img2.jpg" alt=""></div>
                </div>
            </div>

            <div class="block-bridges "> 
                <div class="img-content" style="margin-left:-15px;">
                    <div class="img-visit"><img src="../img/the most visited/img3.jpg" alt=""></div>
                    <div class="img-visit"><img src="../img/the most visited/img4.jpg" alt=""></div>
                </div>
                <div class=" content2 " >
                    <h3 style="color: red;font-size: 25px;">Akashi Kaikyo Bridge:</h3>
                    <p>TThe Akashi Kaikyo Bridge is a suspension bridge which links the city of Kobe on the Japanese island of Honshu to Iwaya on Awaji Island. It is part of the Kobe-Awaji-Naruto Expressway, and crosses the busy and turbulent Akashi Strait (Akashi Kaikyō in Japanese). It was completed in 1998, and has the longest central span of any suspension bridge in the world, at 1,991 metres (6,532 ft). It is one of the key links of the Honshū–Shikoku Bridge Project, which created three routes across the Inland Sea.The Akashi Kaikyo Bridge forms part of... <a   href="">read more</a></p>
                </div>
                
            </div>
        </div>
        <!-- About us -->
        <div class="about-us">
            <h3>ABOUT US</h3>
            <p  class="contact-header">We would love to respond to your queries and help you.
                Feel free to get in touch with us.</p>
            <p class="contact">THE INCREDIABLE BRIDGES is a Professional informative Platform. which provides you the information regarding the famous bridges around the world We're dedicated to providing you the best of information, with a focus on dependability. We're working to turn our passion for information into a booming online website. We hope you enjoy our information as much as we enjoy offering them to you. We will keep posting more important information on our Website for all of you. Thanks For Visiting Our Site</p>   
            <p>For more infomation <a href="">Contact us</a></p>
            <p>Do Visit</p>
            <span><ul class="list-icon-contact-us">
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
            </ul></span>
        </div>

        <!--   GALLERY   -->
        <div class="gallery ">
            <center class="content-gallery">GALLERY</center>
           
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-5 ">
        
                            <a class="img-click"> <img  class="gallery-list-img" src="../img/the most visited/img1.jpg" alt=""></a>
                            <a  href="../top10bridges/goldengate.php" class="text-content-bridges"><button class="btn" value ="Golden Gate Bridges">Golden Gate Bridges</button></a>
                            <a href="../top10bridges/goldengate.php">
                                <button class="btn2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col l-7">
                            <a class="img-click"><img  class="gallery-list-img" src="../img/gallery_IMG/img1.jpeg" alt=""></a>
                            <a href="../highest/puli.php" class="text-content-bridges"><button class="btn" value="Puli Bridges">Puli Bridges</button></a>
                            <a href="../highest/puli.php">
                                <button class="btn2">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col l-4 ">
        
                            <a class="img-click" ><img  class="gallery-list-img" src="../img/gallery_IMG/img2.jpg" alt=""></a>
                            <a href="../top10bridges/london.php" class="text-content-bridges"><button class="btn" value="London Bridges">London Bridges</button></a>
                            <a href="../top10bridges/london.php">
                                <button class="btn2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col l-4">
                            <a class="img-click" ><img  class="gallery-list-img" src="../img/gallery_IMG/img3.jpg" alt=""></a>
                            <a href="../top10bridges/leonard.php" class="text-content-bridges"><button class="btn" value="Leonard Bunker Hill Bridge">Leonard Bunker Hill Bridge</button></a>
                            <a href="../top10bridges/leonard.php">
                                <button class="btn2">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col l-4">
                            <a class="img-click" ><img  class="gallery-list-img" src="../img/gallery_IMG/img4.jpg" alt=""></a>
                            <a href="../top10bridges/sydnes.php" class="text-content-bridges"><button class="btn" value="Sedney Harbor Bridges">Sedney Harbor Bridges</button></a>
                            <a href="../top10bridges/sydnes.php">
                                <button class="btn2">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </button>
                            </a>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col l-7 ">
                            <a class="img-click"><img  class="gallery-list-img" src="../img/gallery_IMG/img5.jpg" alt=""></a>
                            <a  href="../top10bridges/brooklyn.php" class="text-content-bridges"><button class="btn" value="Brooklyn Bridge">Brooklyn Bridge</button></a>
                            <a href="../top10bridges/brooklyn.php">
                                <button class="btn2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </button>
                            </a>
                        </div>
                        <div class="col l-5">
                            <a class="img-click" ><img  class="gallery-list-img" src="../img/gallery_IMG/img6.jpg" alt=""></a>
                            <a href="../oldest/frankford.php" class="text-content-bridges"><button class="btn" value="Frankford Avenue Bridge">Frankford Avenue Bridge</button></a>
                            <a href="../oldest/frankford.php">
                                <button class="btn2">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </button>
                            </a>
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col l-5" style="padding-top: 15px;">
                    
                            <a class="img-click"><img style="height: 702px;" class="gallery-list-img" src="../img/gallery_IMG/img7.jpg" alt=""></a>
                            <a  href="../highest/dugebr.php" class="text-content-bridges"><button class="btn" value="Duge Bridge">Duge Bridge</button></a>
                            <a href="../highest/dugebr.php">
                                <button class="btn2">
                                    <i class="fa-sharp fa-solid fa-location-dot"></i>
                                </button>
                            </a>
                        </div>
                        <div class="colums l-7">
                            <div class="row" style="padding:15px 0;">
                                <div class=" col l-6" >
                                    <a class="img-click" ><img  class="gallery-list-img" src="../img/gallery_IMG/img8.jpg" alt=""></a>
                                    <a  href="../highest/siduRiver.php" class="text-content-bridges"><button class="btn" value="Sidu River Bridges">Sidu River Bridges</button></a>
                                    <a href="../highest/siduRiver.php">
                                        <button class="btn2">
                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="col l-6">
                                    <a class="img-click" ><img  class="gallery-list-img" src="../img/gallery_IMG/img9.jpg" alt=""></a>
                                    <a  href="../highest/dugebr.php" class="text-content-bridges"><button class="btn" value="Duge Bridges">Duge Bridges</button></a>
                                    <a href="../highest/dugebr.php">
                                        <button class="btn2">
                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="padding: 15px 0;">
                                <div class="col l-6">
                                    <a class="img-click"><img  class="gallery-list-img" src="../img/gallery_IMG/img10.jpg" alt=""></a>
                                    <a  href="../top10bridges/tower.php" class="text-content-bridges"><button class="btn" value="Tower Bridges">Tower Bridges</button></a>
                                    <a href="../top10bridges/tower.php">
                                        <button class="btn2">
                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="col l-6">
                                    <a class="img-click" ><img  class="gallery-list-img" src="../img/gallery_IMG/img11.jpg" alt=""></a>
                                    <a  href="../top10bridges/akashi.php" class="text-content-bridges"><button class="btn" value="Akashu Kaikyo Bridges">Akashu Kaikyo Bridges</button></a>
                                    <a href="../top10bridges/akashi.php">
                                        <button class="btn2">
                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="popup-image">
                <span>&times;</span>
                <img src="../img/gallery_IMG/img1.jpeg" alt="">
                <!-- <center class="name-bridges" >Golden Gate Bridges</center> -->
               </div> 
           
          <div style="text-align:end; padding-right: 14%">
              <button class="btn-readmore">
                <a id="readmore" href="gallery.php" >
                    SEE MORE >>
                </a>
            </button>
           </div>
        </div>
    </div>
    <!-- map -->
    <div class="map">
        <center class="content-gallery">OUR LOCATION</center>
        <div class="grid wide" style="text-align: center;">
           <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d25978151.914230585!2d-90.22054184248135!3d35.10463295880849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1672206576850!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
        </div>
    </div>
<!-- footer -->

<footer>
    <div class="ft-info">
        <div class="information">
            <div class="content-link link">
                <h3>Quick Link</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="../top10bridges/top10Bridges.php">Bridges</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="abus.php">About Us</a></li>
                </ul>
            </div>
            <div class="content-link social">
                <div class="navbar-left navbar-social">
                    <a href="index.php">
                        <span class="lg">INCREDIBLE</span>
                        <span class="go">Bridges</span>
                    </a>
                </div>
                <p>Our Purpose is to Sustainably Make the Pleasure and Benifits of Tourism Accessible to the Many.</p>

                <ul class="list-icon">
                    <li><a href="https://www.facebook.com/BuiXuanSinh7a/"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/mosty_bridges/"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/AllThingTravel"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="content-link follow">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="https://www.facebook.com/BuiXuanSinh7a/">Facebook</a></li>
                    <li><a href="https://www.instagram.com/mosty_bridges/">Twiter</a></li>
                    <li><a href="https://twitter.com/AllThingTravel">Instargram</a></li>
                    <li><a href="">Linkd in</a></li>
                </ul>
            </div>  
            <div class="content-link support">
                <h3>Support</h3>
                <ul>
                    <li><a href="querry.php">Help</a></li>
                    <li><a href="ctus.php">Get Support</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="footer-copyright">
            <i class="fa-solid fa-copyright"></i>
        <span>Copyright 2022 - INCREDIBLE Bridges</span>
        </div>
    </div>
</footer>

    <script>
      
        // automatic slideshow
        let slidesIndex = 0;
        showSlides();
       function showSlides(){
        let i;
        let slides = document.getElementsByClassName('mySlide');
        console.log(slides)
        for(i = 0 ;i<slides.length;i++)
        {
            slides[i].style.display='none'
        }

        slidesIndex++;
        if(slidesIndex > slides.length) {slidesIndex = 1}
        slides[slidesIndex-1].style.display="block"
        setTimeout(showSlides,5000);

       }
       
        // click img in gallery
      var img= document.querySelectorAll('.img-click img')
      img.forEach(image => {
        image.onclick = () => {
                document.querySelector('.popup-image').style.display= 'block';
                document.querySelector('.popup-image img').src = image.getAttribute('src');     
        }
      })
      document.querySelector('.popup-image span').onclick =() =>{
        document.querySelector('.popup-image').style.display= 'none';
      } 


     
    </script>
</body>
</html>