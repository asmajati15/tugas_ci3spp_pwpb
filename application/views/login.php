<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login or Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <div class="content">
    <div class="row">
        <div class="col-sm-7 col-md-7">
            <img src="asset/img/twiter.png" class="banner" alt="">
            <i class="bi-twitter centered text-white"></i>
        </div>
        <div class="col text-banner">
            <i class="bi-twitter"></i>
            <h1 class="heading-text">Happening now</h1>
            <h3 class="subheading-text">Join twitter today.</h3>
            <div class="button-wrap">
                <button class="btn-google"data-bs-toggle="modal" data-bs-target="#modal1"><b>Log in into existing account</b></button>
                <p class="d-flex justify-content-center">or</p>
                <button class="btn-phone"data-bs-toggle="modal" data-bs-target="#modal2"><b>Sign up with username</b></button>
                <p style="font-size: 10px; padding-top: 5px;">By signing up, you agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>, including <a href="">Cookie Use</a>.</p>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 600px;">
        <div class="modal-content">
            <div class="closebtn">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding-left: 90px; padding-right: 90px; padding-bottom: 50px;">
            <h2 class="modal-title pb-4" id="exampleModalLabel">Login Use Your Account</h2>
                <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">		
                    <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button style="width: 100%; height: 50px; border-radius: 50px;" type="submit" class="btn btn-primary" value="Login"><b>Submit</b></button>
                </form>
            </div>
        </div>
        </div>
    </div>
    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width: 600px;">
        <div class="modal-content">
            <div class="closebtn">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding-left: 90px; padding-right: 90px;">
            <h2 class="modal-title pb-4" id="exampleModalLabel">Create Your Account</h2>
                <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button style="width: 100%; height: 50px; border-radius: 50px;" type="submit" class="btn btn-primary" value="Login"><b>Submit</b></button>
                </form>
            </div>
        </div>
        </div>
    </div>

    <footer style="padding-left: 15px; padding-right: 15px; padding-top: 20px;">
        <div class="row">
            <div class="col">
                <a href="">About</a>
                <a href="">Help Center</a>
                <a href="">Terms Of Service</a>
                <a href="">Privacy Policy</a>
                <a href="">Cookie Policy</a>
                <a href="">Accessibility</a>
                <a href="">Ads Info</a>
                <a href="">Blog</a>
                <a href="">Status</a>
                <a href="">Careers</a>
                <a href="">Brand Resources</a>
                <a href="">Advertising</a>
                <a href="">Marketing</a>
                <a href="">Twitter For Business</a>
                <a href="">Developers</a>
            </div>
            <div class="row">
                <div class="col d-flex" style="justify-content: center;">
                <a href="">Directory</a>
                <a href="">Settings</a>
                <a href="">&copy; 2022 Twitter, inc.</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>