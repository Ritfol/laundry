<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Quarters Laundry</title>
  </head>
  <body>
              <nav class="navbar navbar-dark justify-content-center bg-dark">
                <a href="{{ route('homepage') }}"><span class="navbar-brand mb-0 h1" >Quarters Laundry</span></a>
              </nav>
      <div class="container">
          <br>
             
            
                <div class="row">
                    <div class="col"></div>
                    <div class="col-9">
                      <br>
                      <div class="row">
                          <div class="col"></div>
                          <div class="col">
                            <!-- Green tick image -->
                            <img src="{{ asset('public/images/confirmation.png') }}">

                          </div>
                          <div class="col"></div>
                      </div>
                     
                      <br>
                      <h3 style="text-align: center;">Thank you! Your request will be reviewed and you will be contacted as soon as possible!</h3>
                      <br><br>

                      <!-- Should go back to home page -->
                      <!-- For one time user, return to home page -->
                      <!-- For customer, return to Customer Dashboard -->
                      <!-- For tender, return to Tender Dashboard -->

                      <a href="{{ route('customer_dashboard') }}">
                        <button type="button" class="btn btn-primary btn-block">Return to dashboard</button>
                      </a>
                      
                    </div>
                    <div class="col"></div>
                </div>
                
      </div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>