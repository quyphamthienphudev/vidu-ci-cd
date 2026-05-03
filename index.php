
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Trang chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><?php echo "Logo"; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about"><?php echo "VỀ CHÚNG TÔI"; ?></a></li>
        <li><a href="#services"><?php echo "DỊCH VỤ"; ?></a></li>
        <li><a href="#portfolio"><?php echo "PORTFOLIO"; ?></a></li>
        <li><a href="#pricing"><?php echo "BẢNG GIÁ"; ?></a></li>
        <li><a href="#contact"><?php echo "LIÊN HỆ"; ?></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <?php
  echo "<h1>Company</h1>"; 
  echo "<p>Chào mừng bạn đến với website của chúng tôi</p>";
  ?> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger"><?php echo "Đăng ký"; ?></button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <?php
      echo "<h2>Về chúng tôi</h2><br>";
      echo "<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>";
      echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>";
      ?>
      <br><button class="btn btn-default btn-lg"><?php echo "Get in Touch"; ?></button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <?php
      echo "<h2>Our Values</h2><br>";
      echo "<h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>";
      echo "<p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
      echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>";
      ?>
      </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <?php
  echo "<h2>SERVICES</h2>";
  echo "<h4>What we offer</h4>";
  echo "<br>";
  ?>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <?php 
      echo "<h4>POWER</h4>";
      echo "<p>Lorem ipsum dolor sit amet..</p>";
      ?>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <?php
      echo "<h4>LOVE</h4>";
      echo "<p>Lorem ipsum dolor sit amet..</p>";
      ?>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <?php
      echo "<h4>JOB DONE</h4>";
      echo "<p>Lorem ipsum dolor sit amet..</p>";
      ?>
    </div>
  </div>
  <?php echo "<br><br>"; ?>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <?php
      echo "<h4>GREEN</h4>";
      echo "<p>Lorem ipsum dolor sit amet..</p>";
      ?>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <?php
      echo "<h4>CERTIFIED</h4>";
      echo "<p>Lorem ipsum dolor sit amet..</p>";
      ?>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;"><?php echo "HARD WORK" ?></h4>
      <?php echo "<p>Lorem ipsum dolor sit amet..</p>"; ?>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <?php
  echo "<h2>Portfolio</h2><br>";
  echo "<h4>What we have created</h4>";
  ?>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./img/paris.jpg" alt="Paris" width="400" height="300">
        <?php
        echo "<p><strong>Paris</strong></p>";
        echo "<p>Yes, we built Paris</p>";
        ?>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./img/newyork.jpg" alt="New York" width="400" height="300">
        <?php
        echo "<p><strong>New York</strong></p>";
        echo "<p>We built New York</p>";
        ?>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="./img/sanfran.jpg" alt="San Francisco" width="400" height="300">
        <?php
        echo "<p><strong>San Francisco</strong></p>";
        echo "<p>Yes, San Fran is ours</p>";
        ?>
      </div>
    </div>
  </div><br>
  
  <?php echo"<h2>What our customers say</h2>"; ?>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only"><?php echo "Previous"; ?></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only"><?php echo "Next"; ?></span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <?php
    echo "<h2>Pricing</h2>";
    echo "<h4>Choose a payment plan that works forr you</h4>";
    ?>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <?php echo "<h1>Basic</h1>"; ?>
        </div>
        <div class="panel-body">
          <?php
          echo "<p><strong>20</strong> Lorem</p>";
          echo "<p><strong>15</strong> Ipsum</p>";
          echo "<p><strong>5</strong> Dolor</p>";
          echo "<p><strong>2</strong> Sit</p>";
          echo "<p><strong>Endless</strong> Amet</p>";
          ?>
        </div>
        <div class="panel-footer">
          <?php
          echo "<h3>$19</h3>";
          echo "<h4>per month</h4>";
          ?>
          <button class="btn btn-lg"><?php echo "Sign Up"; ?></button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <?php echo "<h1>Pro</h1>"; ?>
        </div>
        <div class="panel-body">
          <?php
          echo "<p><strong>50</strong> Lorem</p>";
          echo "<p><strong>25</strong> Ipsum</p>";
          echo "<p><strong>10</strong> Dolor</p>";
          echo "<p><strong>5</strong> Sit</p>";
          echo "<p><strong>Endless</strong> Amet</p>";
          ?>
        </div>
        <div class="panel-footer">
          <?php
          echo "<h3>$29</h3>";
          echo "<h4>per month</h4>";
          ?>
          <button class="btn btn-lg"><?php echo "Sign Up"; ?></button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <?php echo "<h1>Premium</h1>"; ?>
        </div>
        <div class="panel-body">
          <?php
          echo "<p><strong>100</strong> Lorem</p>";
          echo "<p><strong>50</strong> Ipsum</p>";
          echo "<p><strong>25</strong> Dolor</p>";
          echo "<p><strong>10</strong> Sit</p>";
          echo "<p><strong>Endless</strong> Amet</p>";
          ?>
        </div>
        <div class="panel-footer">
          <?php
          echo "<h3>$49</h3>";
          echo "<h4>per month</h4>";
          ?>
          <button class="btn btn-lg"><?php echo "Sign Up"; ?></button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center"><?php echo "CONTACT"; ?></h2>
  <div class="row">
    <div class="col-sm-5">
      <?php echo"<p>Contact us and we'll get back to you within 24 hours.</p>"; ?>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="./img/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script src="./js/script.js"></script>

</body>
</html>
