@extends('voyager::master')

@section('content')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    @import "https://fonts.googleapis.com/css?family=Poppins:700";
  body{
    background-color: #111111;
  }
* {
  box-sizing: border-box;
}
h2{
  font-family: "Poppins", sans-serif;
  font-size: 50px;
  color: #F3DA32;
  text-shadow: 2px 2px white;
  text-align: center;
}
/* Create three equal columns that floats next to each other */
.column {
  width: 225px;
  height: 296.25px;
  margin: 5px;
  margin-left: 250px;/* Should be removed. Only for demonstration */
}
.column2 {
  width: 375px;
  height: 195px;
  margin: 5px;
  margin-left: 30px;/* Should be removed. Only for demonstration */
}
.column3 {
  width: 225px;
  height: 296.25px;
  margin: 5px;
  margin-left: 30px;/* Should be removed. Only for demonstration */
/* Clear floats after the columns */}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.w3-card-4{
  cursor: pointer;
  background-color: #F3DA32;
  border-radius: 5%;
  text-align: center;
}
.w3-card-4:hover{
  box-shadow: 0 8px 16px 0 	rgba(255,255,255);
}
p{
  font-family: "Poppins", sans-serif;
  color: black;
}
  </style>
</head>
<body>

<h2>Galeri Stupa Arsitektur Itera</h2>

<div class="row">
  <div class="row" style="float: left;">
    <div class="column">
      <div class="w3-card-4" style="width:225px; height: 296.25px;">
       
        <div class="w3-container w3-center">
          <p>The Italian / Austrian Alps</p>
        </div>
      </div>
    </div>
    <div class="column">
        <div class="w3-card-4" style="width:225px; height: 296.25px;">
        
            <div class="w3-container w3-center">
              <p>The Italian / Austrian Alps</p>
            </div>
          </div>
    </div>
    </div>
  <div class="row" style="float: left;">
   <div class="column2">
      <div class="w3-card-4" style="width:375px; height: 195px;">
      
          <div class="w3-container w3-center">
            <p>The Italian / Austrian Alps</p>
          </div>
        </div>
  </div>
  <div class="column2">
      <div class="w3-card-4" style="width:375px; height: 195px;">
     
          <div class="w3-container w3-center">
            <p>The Italian / Austrian Alps</p>
          </div>
        </div>
  </div>
  <div class="column2">
      <div class="w3-card-4" style="width:375px; height: 195px;">
     
          <div class="w3-container w3-center">
            <p>The Italian / Austrian Alps</p>
          </div>
        </div>
  </div>
  </div>
  <div class="row" style="float: left;">
  <div class="column3">
      <div class="w3-card-4" style="width:225px; height: 296.25px;">
        
          <div class="w3-container w3-center">
            <p>The Italian / Austrian Alps</p>
          </div>
        </div>
  </div>
  <div class="column3">
      <div class="w3-card-4" style="width:225px; height: 296.25px;">
         
          <div class="w3-container w3-center">
            <p>The Italian / Austrian Alps</p>
          </div>
        </div>
  </div>
  </div>
  <div class="row" style="float: left;">
    <div class="column2">
        <div class="w3-card-4" style="width:375px; height: 195px;">
         
            <div class="w3-container w3-center">
              <p>The Italian / Austrian Alps</p>
            </div>
          </div>
    </div>
    <div class="column2">
        <div class="w3-card-4" style="width:375px; height: 195px;">
           
            <div class="w3-container w3-center">
              <p>The Italian / Austrian Alps</p>
            </div>
          </div>
    </div>
    <div class="column2">
        <div class="w3-card-4" style="width:375px; height: 195px;">
       
            <div class="w3-container w3-center">
              <p>The Italian / Austrian Alps</p>
            </div>
          </div>
    </div>
    </div>
</div>
</div>

</body>

@endsection
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>STUPA ITERA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <img
      src="img/gg.png"
      width="32%"
      style="margin-left: 17.5%; margin-top: 30px"
    />
    <img
      src="img/jj.png"
      width="32%"
      style="margin-left: 10px; margin-top: 30px"
    />
  </body>
</html>