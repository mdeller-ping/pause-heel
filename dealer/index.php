<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="image/x-icon" href="/assets/images/ping-favicon.png" rel="shortcut icon">
    <title>Member Portal</title>
</head>

<body>

    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff;">
        <a class="navbar-brand mb-1" href="https://ricoh-www.ping-devops.com">
            <img src="/assets/images/ping-logo.svg" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mt-4">
                <li class="nav-item">
                    <a class="nav-link" href="#">Alpha</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Beta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Charlie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Delta</a>
                </li>
            </ul>
            <ul class="navbar-nav text-right mt-4">
                <li class="nav-item">
                    <a href="/registration/" class="btn btn-secondary ml-2">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /navigation -->

    <!-- hero banner -->
    <div class="jumbotron jumbotron-fluid mb-n1">
        <div class="container">
            <h1 class="display-4">Two great things about your Brand &reg;</h1>
            <p class="lead">Absolutely. Amazing. Incredible. That's Three.</p>
        </div>
    </div>
    <!-- /hero banner -->

    <div class="container mt-5">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem dolor sed viverra ipsum. Amet nisl suscipit adipiscing bibendum est ultricies integer. Molestie a iaculis at erat
            pellentesque. Ornare arcu odio ut sem nulla. Tristique senectus et netus et malesuada fames. In nibh mauris cursus mattis molestie a iaculis at. Massa tempor nec feugiat nisl pretium fusce id. In metus vulputate eu scelerisque felis imperdiet.
            Porta lorem mollis aliquam ut porttitor leo a. Viverra accumsan in nisl nisi. Turpis in eu mi bibendum neque egestas congue quisque egestas. Sagittis id consectetur purus ut faucibus pulvinar elementum integer enim. Neque viverra justo nec
            ultrices dui sapien eget mi proin. Maecenas pharetra convallis posuere morbi.</p>
        <p class="lead">Viverra vitae congue eu consequat ac. Nam libero justo laoreet sit. Malesuada proin libero nunc consequat interdum varius sit. Facilisi morbi tempus iaculis urna id. Sed arcu non odio euismod lacinia at quis risus. Molestie at elementum eu facilisis.
            Justo donec enim diam vulputate ut. Duis ut diam quam nulla porttitor massa. Elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Et odio pellentesque diam volutpat. Non quam lacus suspendisse faucibus interdum. Nunc lobortis
            mattis aliquam faucibus purus in massa. Sagittis id consectetur purus ut faucibus pulvinar.</p>
    </div>

    <!-- footer -->
    <nav class="navbar navbar-light bg-light mt-5">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/registration/">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="#" href="#">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terms of Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Privacy</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        // sometimes it is helpful to introduce a random nonce to prevent caching
        let nonce = Math.floor(Math.random() * 100000);
        $("a[href='https://ricoh-member.ping-devops.com']").attr('href', 'https://ricoh-member.ping-devops.com?nonce=' + nonce);
        $("a[href='https://ricoh-dealer.ping-devops.com']").attr('href', 'https://ricoh-dealer.ping-devops.com?nonce=' + nonce);
    </script>
</body>

</html>
