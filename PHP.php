<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header class="row">
      <div class="columns large-4 small-4 logo">
        <img src="image/logo.png">
      </div>
      <div class="columns large-6 small-6 menu">
        <ul>
          <li class="columns large-3 small-3"><a href="#">Solution</a></li>
          <li class="columns large-3 small-3"><a href="#">Product</a></li>
          <li class="columns large-3 small-3"><a href="#">Portfolio</a></li>
          <li class="columns large-3 small-3"><a href="#">Contact</a></li>
        </ul>
      </div>
    </header>
    <div class="content-1 row">
      <div class="columns large-5 small-5 coffee">
        <img src="image/icon_coffee.png">
      </div>
      <div class="columns large-5 small-5 demo">
        <div class="text">
          <p><b>Introducing</b></br>Something hot...</p>
        </div>
        <div class="button">
          <button>
            Try Demo
          </button>
        </div>
      </div>
      <div class="content-2 row tab-wrapper">
        <ul class="columns large-12 small-12 tab-menu">
        <!-- <?php
          $tabs = array(
            '0' => array(
              'name1' => 'Responsive',
              ),
            '1' => array(
              'name1' => 'Commerce',
              ),
            '2' => array(
              'name1' => 'Daily blog',
              ),
            '3' => array(
              'name1' => 'Search based',
              ),
          );
          $i = 0;
          foreach($tabs as $key => $tab){
            if ( $i == 0 ) {
              $active = 'active';
            }else{
              $active = '';
            }
            $image_i = $i + 1;
            ?>
            <li class="columns large-3 small-12 <?php echo $active; ?> tab<?php echo $i; ?>" data-tab="tab<?php echo $i; ?>">
              <center><img src="image/block_<?php echo $image_i; ?>.png"><br>
              <?php echo $tab['name1']; ?><br>
              Websites
              </center>
            </li>
            <?php
            $i++;
          }
        ?> -->
          <li class="columns large-3 small-12 active"><center><img src="image/block_1.png"></br>Responsive</br>Websites
          </li>
          <li class="columns large-3 small-12"><center><img src="image/block_2.png"></br>Commerce</br>Websites</center></li>
          <li class="columns large-3 small-12"><center><img src="image/block_3.png"></br>Daily blog</br>Websites</center></li>
          <li class="columns large-3 small-12"><center><img src="image/block_4.png"></br>Search based</br>Websites</center></li>
        </ul>
        <div class="columns large-12 small-12 tab-content">
          <div>
            <center><img src="image/ipad.png"></center>
            <h2>
              Lorem Ipsum is simply dummy text
            </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></br>
            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
          <div>
            test_2
          </div>
          <div>
            test_3
          </div>
          <div>
            test_4
          </div>
        </div>
      </div>
      <div class="columns large-12 small-12 statistic">
        <div class="columns large-6 small-12 screenshot">
          <img src="image/screenshot.png">
        </div>
        <div class="columns large-6 small-12 choose">
          <p>Why choose us ?</p>
          <ul>
            <li>
              <img src="image/Shape.png">
              Lorem Ipsum is simply dummy text of the printing and typesetting
            </li>
            <li>
              <img src="image/Shape.png">
              Lorem Ipsum has been the industry's standard dummy text ever
            </li>
            <li>
              <img src="image/Shape.png">
              When an unknown printer took a galley of type and scrambled
            </li>
            <li>
              <img src="image/Shape.png">
              It has survived not only five centuries, but also the leap into electronic
            </li>
            <li>
              <img src="image/Shape.png">
              It was popularised in the 1960s with the release of Letraset sheets
            </li>
            <li>
              <img src="image/Shape.png">
              More recently with desktop publishing software like Aldus PageMaker
            </li>
          </ul>
        </div>
      </div>
      <div class="columns large-12 small-12 subscription">
        <div class="columns large-6 small-12 login">
          <div class="login-in columns">
            <p>Member login</p>
            <div class="columns large-4 small-4 input">
              <input type="text" name="name" value="User name">
            </div>
            <div class="columns large-4 small-4 input">
              <input type="password" name="password" value="Password">
            </div>
            <button class="columns large-4 small-4">Log me in</button>
          </div>
        </div>
        <div class="columns large-6 small-12 news">
          <div class="news-in columns">
            <p>Subscribe to our weekly newsletter</p>
            <div class="columns large-8 small-8 input">
              <input type="email" name="email" value="Email address">
            </div>
            <button class="columns large-4 small-4">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
    <footer class="row">
      <div class="columns small-12 footer">
        <div class="columns small-2">
          <h6>About Us</h6>
          <p><a href="#">About Us</a></p>
          <p><a href="#">Why Us</a></p>
          <p><a href="#">Customer Stories</a></p>
          <p><a href="#">Press Resources</a></p>
          <p><a href="#">Press Releases</a></p>
          <p><a href="#">Contact us</a></p>
        </div>
        <div class="columns small-2">
          <h6>About Us</h6>
          <p><a href="#">About Us</a></p>
          <p><a href="#">Why Us</a></p>
          <p><a href="#">Customer Stories</a></p>
          <p><a href="#">Press Resources</a></p>
          <p><a href="#">Press Releases</a></p>
          <p><a href="#">Contact us</a></p>
        </div>
        <div class="columns small-4">
          <h6>Testimoanials</h6>
          <p>Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industr
            standard dummy text ever since the 1500s,
            when an unknown printer took </p>
          <p><b>Lorem Ipsum is simply
            Owner, Lorem Ipsum</b></p>
          </div>
          <div class="columns small-4">
            <img src="image/footer_logo.png">
            <p>© cssauthor.com</p>
          </div>
        </div>
      </footer>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="js/js.js"></script>
  </body>
</html>
