<!doctype html>
<html lang="en">

<?php require("httpful.phar"); ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="image/x-icon" href="/assets/images/ping-favicon.png" rel="shortcut icon">
    <title>Dealer Portal</title>
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
                    <a class="nav-link" href="/">Member Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/detail/">Details</a>
                </li>
            </ul>
            <ul class="navbar-nav text-right mt-4">
                <li class="nav-item">
                    <a href="/pa/oidc/logout" class="btn btn-secondary ml-2">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /navigation -->

<?php


$url = "https://dir.tu.demoenvi.com:8443/consent/v1/consents/" . $consentId;

$response = \Httpful\Request::get($url)
->authenticateWith('cn=Directory Manager', '2FederateM0re')
->expectsJson()
->send();

// $status = "{$response->body->_embedded->consents[$x]->status}";
// $version = "{$response->body->_embedded->consents[$x]->definition->version}";
// $currentVersion = "{$response->body->_embedded->consents[$x]->definition->version}";

$responseData = json_decode($response);
$responsePretty = json_encode($responseData, JSON_PRETTY_PRINT);


?>


    <div style="display:none" id="rawDiv">
        <pre class='alert alert-warning'>GET <?php echo $url ?></pre>
        <pre class='alert alert-primary' style="height: 500px;"><?php echo $responsePretty ?></pre>
    </div>

    <!-- hero banner -->
    <div class="jumbotron jumbotron-fluid mb-n1">
        <div class="container">
            <h1 class="display-4">Dealer Portal</h1>
        </div>
    </div>
    <!-- /hero banner -->


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
