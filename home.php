
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="home.css">
    <title>Document</title>
    <style>
        .fa-spotify{ color: white;
            position: relative;
            left: 20px;
            top: 15px;

        }
        .fa-house{
            color: white;
            position: relative;
            left: 30px;
            top: 3px;
        }
        .fa-magnifying-glass{
            color: white;
            position: relative;
            top: 50px;
            left: 30px;
        }
        .fa-plus{
            color: white;
            position: relative;
            left: 200px;
            top: 30px;
        }
        .fa-barcode{
            color: white;
            position: relative;
            right: 100px;
            top: 25px;
        }
        .fa-backward{
            color: white;
            cursor: pointer;
        }
        .fa-forward{
            color: white;
            position: relative;
            left: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <i class="fa-brands fa-spotify"><i>spotify</i></i>

        <h4 id="h">Home</h4>
        <i class="fa-solid fa-house"></i>
        <i class="fa-solid fa-magnifying-glass"></i>


        <input type="search" placeholder="search" id="se">

    </div>
    <div class="Library">
        <a href="#" id="li"><b>Your Library</b></a>
        <i class="fa-solid fa-plus"></i>
        <i class="fa-solid fa-barcode"></i>


        <div class="play">
            <h3 id="h3"> Create your first playlist
            </h3>
            <p id="par">it's easy ,we'll help you</p>
            <button id="pl">Create playlist</button>
        </div>
        <br>
        <div class="bro">
            <p id="p">Let's find some podcaste to follow</p>
            <p id="pa">we'll keep you updated on new episodes</p>
            <button id="br">browse podcasts</button>
        </div>
    </div>

      
    <div class="nav1">
        <button for="check" id="check">         
            <i class="fa-solid fa-backward" onclick="back()"></i>
            <i class="fa-solid fa-forward" onclick="forward()"></i>

        </button>
        <button id="btt">
           <a href="sing.php" id="a"> Sign Up
        </button></a>
        <div id="btt1">
        <a href="loginn.php" id="login">Log in</a> </div>
    </div>
    <div class="home">
        <div class="first11">
            <a href="seeall.html">Popular artists </a>
            <a href="seeall.html" id="show" >Show all</a>
        
        </div>

        <div class="arts1">

        <div id="art11">
            <a href="anirudh.html"> <img src="img/anirudh.jpg" id="img">
                <div class="soild">
                    <i class="fa-solid fa-play"></i>   </div> 
            </a>
            <div class="rote"></div>
            <div class="name">
            <p>Anirudh Ravichander</p>
            <p>Artist</p>
            </div>
            <div id="art1">
                <a href="vishal.html"><img src="img/vishal mis.jpg" id="img"></a>
                <div class="soild">
                <i class="fa-solid fa-play"></i></div>    
                <div class="rote"></div>
                <div class="name">
                <p>Vishal Mishra</p>
                <p>Artist</p>
                </div>
            </div>
            <div id="art2">
                <a href="aslam.html"><img src="img/atif.jpg" id="img"></a>
                <div class="soild">
                <i class="fa-solid fa-play"></i></div>    
                <div class="rote"></div>
                <div class="name">
                <p>Atif Aslam</p>
                <p>Artist</p>
                </div>
            </div>
            <div id="art3">
                <a href="darshan.html"><img src="img/darshan.jpg" id="img"></a>
                <div class="soild">
                <i class="fa-solid fa-play"></i></div>    
                <div class="rote"></div>
                <div class="name">
                <p>Darshan Raval</p>
                <p>Artist</p>
                </div>
            </div>
            </div>
        </div>
        

        
        <div class="second">
            <a href="albums.html">Popular albumes </a>
            <a href="albums.html" id="show1">Show all</a>
        
</div>
        <div class="arts">
            <div id="art">
                <a href="arijthi.html"><img src="img/download (20).jpg" id="pr"></a>
                <div class="soild">
                <i class="fa-solid fa-play"></i></div>    
                <div class="rote"></div>
                <div class="name">
                <h3>Aashiqui 2</h3>
                <p>Mithon,Ankit Tiwari<br> Jee Gannguli</p>
                </div>
            </div>
            <div id="art">
               
                <a href="aslam.html"><img src="img/download (21).jpg" id="pr"></a>
                <div class="soild">
                <i class="fa-solid fa-play"></i></div>    
                 <div class="rote"></div>
                <div class="name">
                <h3> EK Tha Raja</h3>
                <p> badshah</p>
                </div>
            </div>
            <div id="art">
                <a href="vishal.html"> <img src="img/download (22).jpg" id="pr"></a>
                <div class="soild">
                <i class="fa-solid fa-play"></i></div>    
                <div class="rote"></div>
                <div class="name1">
                <h3>ANIMAL</h3>
                <p>Manan Bhardwi, Vishal Mishra,<br>Jaani</p>
                </div>
            </div>
            <div id="art">
                <a href="arijthi.html"><img src="img/13.jpg" id="pr"></a>
                <div class="soild">
                <i class="fa-solid fa-play"></i></div>    
                <div class="rote"></div>
                <div class="name1">
                   <h3>Sajni </h3>
                <p>Ram sampath,arijit<br> singh,Prashant Pandey</p>
                </div>
            </div>
            </div>
           
    <div class="footer">
        <h4 id="fo">company</h4>
        <ol id="ol">
            <li>About</li>
            <li>Jobs</li>
            <li> For the Record</li>
        </ol>

        <h4 id="oo">Communities</h4>
        <ol id="ol1">
            <li>For Artists</li>
            <li> Developers</li>
            <li> Advertising</li>
            <li>Investors</li>
            <li>Vendors</li>
        </ol>
        <h4 id="lli">Useful Linkes</h4>
        <ol id="lo2">
            <li>Support</li>
            <li> Free Mobile App</li>
        </ol>
        <h4 id="ti">Spotify Plans</h4>
        <ol id="ol3">
            <li>Premium Individual</li>
            <li> Premium Dou</li>
            <li>Premium Family</li>
            <li>Premium student</li>
            <li> Spotify Free</li>
        </ol>
        <div id="i">
             <i class="fa-brands fa-facebook"></i>
        
             <i class="fa-brands fa-facebook"></i>
            
          <i class="fa-brands fa-twitter"></i>
        </div>
        <br>
        
</div>

<div id="brr"></div>
<div id="brr1"></div>

<h5 id="p9">@2024 Spotify AB</h5>
</div>
    <script src="home.js"></script>
</body>
</html>