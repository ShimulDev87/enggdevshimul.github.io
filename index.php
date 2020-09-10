<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type = text/css href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Engineer & Developer ShafiUddin Shimul</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/1RpmVj.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="Images/vrun.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="Images/sdev.jpg" alt="New York" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="Images/images.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">About me</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
         <div class="col-lg-2 col-md-8 col-12">
            <img src="Images/Shimul.jpg" class="img-fluid aboutimg">
         </div>
         <div class="col-lg-2 col-md-8 col-12">
            <img src="Images/2191.jpg" class="img-fluid aboutimg">
         </div>
         <div class="col-lg-2 col-md-8 col-12">
            <img src="Images/1372.jpg" class="img-fluid aboutimg">
         </div>

         <div class="col-lg-6 col-md-8 col-12">
            <h2 class="display-4.5">I am Engineer and Developer.</h2>
            <p class="py-2">
                I'm Md. ShafiUddin Shimul. Graduated in B.sc in EEE from Southeast University,Dhaka.  I'm very much passionate about Video Game development, AR & VR  games/apps, PC games, Play-Station based games and Computer programming Languages( C++ , C#) . Although, as an Electrical Engineer i also like Industry and Power Plant related Electrical 2D and 3D design( e.g. BBT , LPS , Sub-station and Plumbing).
            </p>
            <a href="about.php" class="btn btn-info"> Check more or Read more</a>
         </div>

        </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">My Services</h3>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="card"  >
                    <img class="card-img-top" src="Images/Car Games.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Video Games</h4>
                            <p class="card-text">Work on Progress.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="card"  >
                    <img class="card-img-top" src="Images/electrical.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Electrical and Power Plant Related 2D & 3D Design</h4>
                            <p class="card-text">Completed this project more than One(1) year ago.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="card"  >
                    <img class="card-img-top" src="Images/HMSD.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Software Develpment</h4>
                            <p class="card-text">Works on Progress.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="card" >
                    <img class="card-img-top" src="Images/android.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Android Apps Develpment</h4>
                            <p class="card-text">Works on Progress.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                </div>

            </div>

        </div>
    </div>

</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Gallery Of My Services/Works</h3>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/Sus1.png" class="img-fluid pb-4">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/Sus2.png" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/Math Puzzle n.png" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/car1.png" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/car2.png" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/Treasure in Industry.png" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/.png" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/brn.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/brn.jpg" class="img-fluid pb-4">
        </div>


    </div>
    </div>
</section>

<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">My Services</h3>
    </div>
    <div class="w-50 m-auto">
        <form action="userInfo.php" method="post">
            <div class="form-group">
                <label for="">UserName</label>
                <input type="text" name ="user" autocomplete="off" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Email ID</label>
                <input type="text" name ="email" autocomplete="off" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Mobile Phone No.</label>
                <input type="text" name ="mobile" autocomplete="off" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Comments</label>
                <textarea name="comments" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

        </form>

    </div>



</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">  @AnS TechSoft Engg. </p>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>