<?php
if($_GET['city']){
     
  echo file_get_contents("https://api.openweathermap.org/data/2.5/weather?".$_GET['city']."id=524901&appid=56c7996d30c08df75c56a709ec680b92");

    //exploding the string using explode function to get the reuired content

}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Weather Scrapper</title>
    <style>
    html { 
  background: url(w1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-family: sans-serif;
}  
body{
    background: none;
    /*nothing at background*/
}
.container{
    width:450px;

}
#inputf{
    width: 230px;
    
}
#form{
    text-align: center;
}
/*perfect fullpage background image*/
    </style>

  </head>
  <body>
    <div class="container">
    <h1 style="text-align:center; margin-top: 200px;">What's The Weather</h1>
    <form id="form">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Enter name of your city here</label>
          <input type="content" class="form-control" id="inputf" aria-describedby="emailHelp" placeholder="e.g.Ranchi,Jharkhand" name="city" style="margin-left:100px; margin-right:100px">
          <div id="emailHelp" class="form-text" style="color: rgba(25, 19, 19, 0.594);"><strong>Let's find out weather at your place now!</strong></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>