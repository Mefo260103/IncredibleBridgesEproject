<?php
require_once ('../Admin_eproject/admin/db/dbhelper.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../home/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Golden Gate Brideges</title>
</head>
<body>
    <section>
        <div class="navbar-menu-fix">
            <div class="navbar-left">
                <a href="index.html">
                    <span class="lg">INCREDIABLE</span>
                    <span class="go">Bridges</span>
                </a>
            </div>
            <div class="navbar-right">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li>
                        <div class="dropdown">
                            <a href="#">BRIDGES</a>
                            <div class="dropdown-content">
                              <span class="list-bridges">
                                <a href="/home/top10Bridges.html">TOP 10 BRIDGES ></a>
        
                                    <div class="top-content">
                                        <a href="">THE GOLDEN GATE BRIDGES</a><br>
                                        <a href="">AKASHI KAIKYO BRIDGE</a><br>
                                        <a href="">SUNSHINE SKYWAY BRIDGE</a><br>
                                        <a href="">TOWER BRIDGE</a><br>
                                        <a href="">FORTH BRIDGE</a><br>
                                        <a href="">BROOKLYN BRIDGE</a><br>
                                        <a href="">CHESAPEAKE BAY BRIDGE–TUNNEL</a><br>
                                        <a href="">SYDNEY HARBOUR BRIDGE</a><br>
                                        <a href="">LEONARD P. ZAKIM BUNKER HILL BRIDGE</a><br>
                                        <a href="">LONDON BRIDGE (LAKE HAVASU CITY)</a><br>
                                    </div>
                                  
                              </span>
                              <span class="list-bridges "><a href="/home/list-bridges/longest.html">LONGEST ></a>
                                <div class="top-content list-longest">
                                    <a href="">DANYANG–KUNSHAN GRAND BRIDGE</a><br>
                                    <a href="">TIANJIN GRAND BRIDGE</a><br>
                                    <a href="">MANCHAC SWAMP BRIDGE</a><br>
                                </div>
                                </span><br>
                              <span class="list-bridges list-highest"><a href="/home/list-bridges/highest.html">HIGHEST ></a>
                                <div class="top-content list-highest">
                                    <a href="">DUGE BRIDGE</a><br>
                                    <a href="">SIDU RIVER BRIDGE</a><br>
                                    <a href="">PULI BRIDGE</a><br>
                                </div>  
                              </span><br>
                              <span class="list-bridges "><a href="/home/list-bridges/oldest.html">OLDEST ></a>
                                <div class="top-content list-oldest">
                                    <a href="">BRIDGE NEAR LIMYRA</a><br>
                                    <a href="">FRANKFORD AVENUE BRIDGE</a><br>
                                    
                                </div>  
                              </span><br>
                            </div>
                          </div>
                    </li>
                    <li><a href="/sitemap.html">SITE MAP</a></li>
                    <li><a href="/querry.html">QUERIES</a></li>
                    <li><a href="/home/gallery.html">GALLERY</a></li>
                    <li><a href="/abus.html">ABOUT US</a></li>
                    <li><a href="/ctus.html">CONTACT US</a></li>
                    <li><a href="/feedback.html">FEEDBACK</a></li>
                </ul>
            </div>
        </div>
    </section>

    <?php 
                        //Lấy danh sách danh mục từ database
                        $sql = "select * from information where id = 2 ";
                        $informationList = queryResult($sql);
                        $index = 1;
                        $item = queryResult($sql, true);
                        foreach ($informationList as $item){
                          echo ''.$item['content'].'';
                        }
                        ?>

    <footer>
        <div class="ft-info">
            <div class="information">
                <div class="content-link link">
                    <h3>Quick Link</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="/home/top10Bridges.html">Bridges</a></li>
                        <li><a href="/home/gallery.html">Gallery</a></li>
                        <li><a href="/abus.html">About Us</a></li>
                    </ul>
                </div>
                <div class="content-link social">
                    <div class="navbar-left navbar-social">
                        <a href="/home/index.html">
                            <span class="lg">INCREDIABLE</span>
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
                        <li><a href="/querry.html">Help</a></li>
                        <li><a href="/ctus.html">Get Support</a></li>
                        <li><a href="/feedback.html">Feedback</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="footer-copyright">
                <i class="fa-solid fa-copyright"></i>
            <span>Copyright 2022 - INCREDIABLE Bridges</span>
            </div>
        </div>
    </footer>
</body>
</html>