<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
  @if(session('status'))
  <div class="alert alert-success" role="alert" style="padding-left:40%;">
     {{session('status')}}
  </div>
  @endif
 <div class="conatiner" style="padding-left: 20%; padding-right:20%">
 <form action="formsubmits", method="post">
 {{@csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="name"aria-describedby="emailHelp">
    @error('name')
    
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>
    @enderror
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" >
    @error('email')
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>

    @enderror
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Pincode</label>
    <input type="text" class="form-control" name="pin" >
    @error('pin')
    <div class="alert alert-danger" role="alert">
    {{$message}}
</div>

    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
  </body>
</html>