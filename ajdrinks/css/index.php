<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">AJ drinks</a>
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
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/c1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/c4.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/c5.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>

        <section class="my-5">
            <div class="py-5">
                <h3 class="text-center">About Us</h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src=" image/c8.jpg " alt="wine " class="img-fluid  aboutimg">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2 class="display-4">We are AJ drinks</h2>
                        <p py-5>A drink or beverage is a liquid intended for human consumption. In addition to their basic function of satisfying thirst, drinks play important roles in human culture. Common types of drinks include plain drinking water, milk,
                            juice, smoothies and soft drinks.</p>
                        <a href="about.php" class="btn btn-success">check more</a>
                    </div>
                </div>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h3 class="text-center">Our Services</h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="image/c7.jpg" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">Bar</h4>
                                <p class="card-text">Enjoy the Drinks</p>
                                <a href="about.php" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h3 class="text-center">Our Gallery</h3>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="image/c9.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="image/c9.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="image/c9.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="image/c9.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="image/c9.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="image/c9.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="image/c10.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="image/c9.jpg" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="image/c10.jpg" class="img-fluid pb-4">
                    </div>
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h3 class="text-center"> Contact Us</h3>
            </div>
            <div class="w-50  m-auto">
                <form action="contact.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email Id</label>
                        <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="Mobile" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea class="form-control" name="comment">
                            </textarea>
                    </div>
                    <button type="submit" class="btn btn-info" value="Submit Button"> Submit</button>
                </form>
            </div>
        </section>
        <footer>
            <p class="p-3 bg-dark text-white">@AJdrinks</p>
        </footer>

        <a class=" carousel-control-prev " href="#demo " data-slide="prev ">
            <span class="carousel-control-prev-icon "></span>
        </a>
        <a class="carousel-control-next " href="#demo " data-slide="next ">
            <span class="carousel-control-next-icon "></span>
        </a>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js "></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js "></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js "></script>
</body>

</html>