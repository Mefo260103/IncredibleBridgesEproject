<?php
if(!empty($_POST)) {
	require_once ('../IncredibleBridgesEproject/Admin_eproject/admin/db/dbhelper.php');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$cmt = $_POST['cmt'];
    $phone = $_POST['phone_number'];
    $subject = $_POST['subject_name'];

	$sql = "insert into feedback (id,name, email, cmt, phone_number, subject_name) values ('','$name', '$email', '$cmt', '$phone', '$subject')";
	query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- <link rel="stylesheet" href="ctus.css"> -->
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="../style/grid.css">
    <link rel="stylesheet" href="../style/top10br.css">
    
    <link rel="icon" href="http://www.domain.com/favicon.ico" type="image/x-icon" />
    <title>Contact Us-Incredible Bridges</title>
</head>
<body>
    <!-- Header -->
    <section>
    <div class="navbar-menu-fix">
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
                            <a href="../home/top10Bridges.php">TOP 10 BRIDGES ></a>
    
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
<!-- body -->

    <div class="main">
        <div class="header-ct">
            <div class="ct-header">
                <h1>CONTACT US</h1>
            </div>
            <div class="ct-text"><p>  We would love to respond to your queries and help you!
                <br> Feel free to get in touch with us.</p>
            </div>
        </div>
        <div class="container-ct">
            <div class="ctl">
               <div class="ctl-body">
               <form  method="post">
                <div class="ctl-header">
                    <h3>Sent your request</h3>
                </div>  
                <div class="ctl-gr">
                    <div class="ctl-c">
                        <label class="ctl-ct">Name</label>
                        <input class="input-ct" type="text" placeholder="Enter your name" name="name">
                    </div>
                    <div class="ctl-c">
                        <label >Phone</label>
                        <input class="input-ct" type="text" placeholder="Enter your phone" name="phone_number">
                    </div>
                </div>
                <div class="ctl-gr">
                    <div class="ctl-c">
                        <label >Email</label>
                        <input class="input-ct" type="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="ctl-c">
                        <label >Subject</label>
                        <input class="input-ct" type="text" placeholder="Enter your subject" name="subject_name">
                    </div>
                </div>
                    <div class="ctl-c">
                        <label >Message</label>
                        <textarea  class="inputt-ct" type="text"  placeholder="Your message" rows="5" name="cmt"></textarea>
                    </div>
                    <div>
                        <button class="ctl-b">Send</button>
                    </div>
               </div>
               </form> 
            </div>
            <div class="ctr">
            <div class="ctr-text">
                <div class="ctr-text-header">
                    <h3>Reach us</h3>
                </div>
                <div class="ctr-text-information">
                    <ul>
                        <li>
                            <div class="ctr-text-gr">
                                <label class="ctr-lb1">Email</label>
                                <label for="email" class="ctr-lb2">hieuvu926@gmail.com</label>
                            </div>
                        </li>
                        <li>
                            <div class="ctr-text-gr">
                                <label class="ctr-lb1">Phone</label>
                                <label for="phone" class="ctr-lb2">+84 332220536</label>
                            </div>
                        </li>
                        <li>
                            <div class="ctr-text-gr">
                                <label class="ctr-lb1">Address</label>
                                <label for="address" class="ctr-lb2">64 Lê Thanh Nghị Trung tâm Aptech</label>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
            </div>                       
        </div>
    </div>

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
    
</body>
</html>
