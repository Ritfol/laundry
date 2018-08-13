<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('/vendor2/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Quarters Laundry</title>
</head>
<body>
<nav class="navbar navbar-dark justify-content-center bg-dark">
    <a href=""><span class="navbar-brand mb-0 h1" >Quarters Laundry</span></a>
</nav>
<div class="container">
    <br>

    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Login as a <br>normal user</h1>
                <p class="lead">
                    Please login here if you are a normal user or a student
                </p>
                <hr class="my-4">

                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{ route('customer_toLogin') }}" role="button">Login</a>
                </p>
            </div>
        </div>
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Login for a tender</h1>
                <p class="lead">
                    Please login here if you want to get a tender service
                </p>
                <hr class="my-4">

                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{ route('tender_toLogin') }}" role="button">Login</a>
                </p>
            </div>
        </div>
    </div>


</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>