<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Sign up Form</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="/signaction">{{ csrf_field() }}                
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text" id="pass">@</span>
                    <input type="text" class="form-control" placeholder="Password" aria-label="pass" aria-describedby="pass">
                </div>
                <input type="submit" class="btn btn-primary m-2" name="submit" value="Sign Up">
            </form> 
        </div>
        <div class="col-md-6">other</div>
    </div>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

<x-signup name="Laxman" email='lk@gmail.com' contact='00000000000' />