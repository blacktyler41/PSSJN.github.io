<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="image/logoooo.jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAINT JOHN MINOR SEMINARY</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="eBook.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        div.gallery {
          border: 1px solid #ccc;

        }
        
        div.gallery:hover {
          border: 1px solid #777;
        }
        
        div.gallery img {
          width: 100%;
          height: 200px;
        }
        
        div.desc {
          padding: 15px;
          text-align: center;
        }
        
        * {
          box-sizing: border-box;
        }
        .responsive {
          padding-top: 240px;
          float: left;
          width: 24.999999%;
          
        }
        .responsive1 {
          padding-top: 0;
          float: left;
          width: 24.999999%;
          
          
        }
        
        
        
        @media only screen and (max-width: 700px) {
          .responsive {
            width: 49.99999%;
            margin: 6px 0;
          }
          .responsive1 {
            width: 49.99999%;
            margin: 6px 0;
          }
        }
        
        @media only screen and (max-width: 500px) {
            .responsive {
            width: 100%;
          }
          .responsive1 {
            width: 100%;
          }
        }
        
        .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
        </style>
</head>
<body>
    <!--navigation-->
    <nav>
        <img src="image/logoooo.jpg" alt="gf">
        <div class="navigation">
            <ul>
                <i class="fa fa-times"></i>
                <li><a href="index.html">Home</a></li>
                <li><a href="achievement.html">Achievements</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="religius life.html">Religious life</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="eBook.php">eBoook</a></li>
            </ul>
            <img id="menu-btn" src="image/toggle.png" alt="hfg">
        </div>
    </nav>
    <!--ebook-->
    
    <section id="book">
        <div class="books-heading" margin-top="100px">
            <h4> THE HEAD</h4>
        </div>

       <div class="responsive">
         <div class="gallery">
             <a target="_blank" href="https://elearning.reb.rw/pluginfile.php/10666/mod_resource/content/1/Biology%20S4%20%20SB.pdf">
               <img src="image/cell.png" alt="Cinque Terre" width="600" height="400">
             </a>
            <div class="desc">BIOLOGY S4 BOOK</div>
         </div>
       </div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://elearning.reb.rw/pluginfile.php/10824/mod_resource/content/1/Computer%20Science%20S4%20SB.pdf">
      <img src="image/coding.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">COMPUTER SCIENCE S4 BOOK</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://elearning.reb.rw/pluginfile.php/5916/mod_resource/content/1/chemistry%20S4%20SB.pdf">
      <img src="image/atom.png" alt="Northern Lights" width="400px" height="500px">
    </a>
    <div class="desc">CHEMISTRY S4 BOOK</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="https://elearning.reb.rw/pluginfile.php/5798/mod_resource/content/1/Physics%20S4%20SB%20%281%29.pdf">
      <img src="image/projectile.png" alt="Mountains" >
    </a>
    <div class="desc">PHYSICS S4 BOOK</div>
  </div>
</div>
<div class="responsive1">
    <div class="gallery">
      <a target="_blank" href="gallery.html">
        <img src="image/photo.jpg" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">BIOLOGY S5 BOOK</div>
    </div>
  </div>
  <div class="responsive1">
    <div class="gallery">
      <a target="_blank" href="https://drive.google.com/file/d/1GbStACUwSRg4_cqUM1BzNnJfgrHbE6wD/view">
        <img src="image/EINS.png" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">PHYSICS S6 BOOK</div>
    </div>
  </div>
  <div class="responsive1">
    <div class="gallery">
      <a target="_blank" href="gallery.html">
        <img src="image/organic.jpg" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">CHEMISTRY S5 BOOK</div>
    </div>
  </div>
  <div class="responsive1">
    <div class="gallery">
      <a target="_blank" href="https://elearning.reb.rw/pluginfile.php/11053/mod_resource/content/1/PHYSICS%20S5%20SB.pdf">
        <img src="image/frequency.png" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">PHYSICS S5 BOOK</div>
    </div>
  </div>
  <div class="responsive1">
    <div class="gallery">
      <a target="_blank" href="https://drive.google.com/file/d/1Gd9FLztEKUR6OdjOTV7Mm1mCWjaTuw4z/view">
        <img src="image/haert.jpg" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">BIOLOGY S6 BOOK</div>
    </div>
  </div>
  <div class="responsive1">
    <div class="gallery">
      <a target="_blank" href="https://drive.google.com/file/d/138tNhVQOEZ7lspUthv_L-atdr7NrMzt-/view">
        <img src="image/kernel.png" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">MATHEMATICS S6 BOOK</div>
    </div>
  </div>
  <div class="responsive1">
    <div class="gallery">
      <a target="_blank" href="https://drive.google.com/file/d/1qOjV33je35q3E9cVXi3DYVhxIGAkcfGK/view">
        <img src="image/carbon.png" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">CHEMISTRY S6 BOOK</div>
    </div>
  </div>
  <div class="responsive1">
    <div class="gallery">
      <a target="_blank" href="https://elearning.reb.rw/pluginfile.php/44795/mod_resource/content/1/Core%20Math%20S4%20SB.pdf">
        <img src="image/logic.png" alt="Mountains" width="600" height="400">
      </a>
      <div class="desc">MATHEMATICS S4 BOOK</div>
    </div>
  </div>
  <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
  <div id="google_translate_element"></div>
        <script>
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
            }
            </script>
            <script  src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<div class="clearfix"></div>

    </section>
    <footer>
        <div class="foooter-col">
            <h3>Combinations</h3>
            <ul>
                <li>O level</li>
                <li>MCB</li>
                <li>PCB</li>
            </ul>
        </div>
        <div class="foooter-col">
            <h3>location</h3>
            <ul>
                <li>Northern Province</li>
                <li>Ruhengeri Diocese</li>
                <li>Kinoni Parish</li>
                <li>Burera district</li>
            </ul>
        </div>
        <div class="foooter-col">
            <h3>Extra culiccullar </h3>
            <ul>
                <li>Sports</li>
                <li>Music</li>
                <li>Clubs</li>
                <li>Debate</li>
            </ul>
        </div>

        <div class="copyright">
            <p>Copyright ©2024 All rights reserved  | This template  is made by Ngabitsinze Arsene, Muhoza Cedric and Ganza Blaise</p>
            <div class="pro-links">
                <a href="https://web.facebook.com/p/Petit-S%C3%A9minaire-Saint-Jean-Nkumba-100069414527342/?paipv=0&eav=AfZtgZu4wT-kO71_H5UgZK4dByRmltJnyfsXwSiXM6sDKMiUUPTO0GzGTzeNne6eNzw&_rdc=1&_rdr"><i class="fa fa-facebook" ></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
                <a href="#"><i class="fa fa-contact"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>

            </div>

        </div>
    </footer>
    <script>
         $('#menu-btn').click(function(){
            $('nav .navigation ul').addClass('active')
        });
        $('.navigation i').click(function(){
            $('nav .navigation ul').removeClass('active')
        });
    </script>

</body>
</html>