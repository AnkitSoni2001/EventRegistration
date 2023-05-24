<!-- <?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: registerEvent.php");
}
?> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">

    <title>Event Page</title>
  </head>
  <body>
    <!-- NAVBARSTART -->
    <nav class="navbar navbar-expand-sm fixed-top">
        <a href="" class = "navbar-brand">Event-Page</a>
        <div>
            <ul class = "navbar-nav">
                <li class = "nav-item"><a href="index.html" class="nav-link">Home</a></li>
                <!-- <li class = "nav-item"><a href="" class="nav-link">Pages</a></li> -->
                <!-- <li class = "nav-item"><a href="" class="nav-link">Events</a></li> -->
                <!-- <li class = "nav-item"><a href="" class="nav-link">Docs</a></li> -->
                <li class = "nav-item"><a href="logout.php" class="btn btn-warning">Logout</a></li>
            </ul>
        </div>     
    </nav>

    <!-- HEADERSECTIONSTART -->
    <div class="header">
        <div class="img-parent">
            <div class="img">
                <img src="Photos/header_one.jpg" alt="" srcset="">
            </div>
            <div class="img-overlay"></div>
        </div>
        <div class="img-content">
            <h2>Schedule Event</h2>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. In alias qui cupiditate! Nostrum mollitia ullam dolorum ea laborum amet, odit cumque repellat commodi doloribus.</span>
        </div>
    </div>

    <!-- EVENT SECTION START -->
    <div class="container event">

        <div class="row justify-content-center text-center">

            <div class="offset-sm-1 col-sm-5">
                <img src="Photos/img1.jpeg" class="img-fluid" alt="">
                <div class="event-content">
                    <h4>Business Mastery Event</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime dignissimos </span><br>
                    <a href="registerEvent.php">Join</a>
                </div>
            </div>
            
            <div class="offset-sm-1 col-sm-5">
                <img src="Photos/img2.jpeg" class="img-fluid" alt="" srcset="">
                <div class="event-content">
                    <h4>Business Mastery Event</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime dignissimos </span><br>
                    <a href="registerEvent.php">Join</a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center text-center">
            <div class="offset-sm-1 col-sm-5">
                <img src="Photos/img3.jpeg" class="img-fluid" alt="" srcset="">
                <div class="event-content">
                    <h4>Business Mastery Event</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime dignissimos </span><br>
                    <a href="registerEvent.php">Join</a>
                </div>
            </div>

            <div class="offset-sm-1 col-sm-5">
                <img src="Photos/img4.png" class="img-fluid" alt="" srcset="">
                <div class="event-content">
                    <h4>Business Mastery Event</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime dignissimos </span><br>
                    <a href="registerEvent.php">Join</a>
                </div>
            </div>
        </div>
        <!-- <a href="logout.php" class="btn btn-warning">Logout</a> -->
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <h6>About</h6>
                    <span>Learn</span>
                    <span>Login</span>
                    <span>Reach</span>
                    <span>Docs</span>
                </div>
                <div class="col-sm-2">
                    <h6>Address</h6>
                    <span>Learn</span>
                    <span>Login</span>
                    <span>Reach</span>
                    <span>Docs</span>
                </div>
                <div class="col-sm-2">
                    <h6>Resources</h6>
                    <span>Learn</span>
                    <span>Login</span>
                    <span>Reach</span>
                    <span>Docs</span>
                </div>

                <div class="col-sm-3">
                    <h6>Book Now</h6>
                    <span>Daily Notification</span>
                    <input type="text" class="font-weight-bold form-control" placeholder="Enter Your Email">
                    <button type="submit" class="font-wight-bold btn btn-outline-danger btn-sm float-left">Book</button>
                    
                </div>
            </div>
        </div>
    </footer>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

    <!-- JAVASCRIPT -->
    <script>
        $(document).scroll(function(){
            $(".navbar").toggleClass("scroll", $(this).scrollTop() > $(".navbar").height());
        })
    </script>
   
  </body>
</html>
