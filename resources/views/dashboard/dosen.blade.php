@extends('voyager::master')

@section('content')

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
<style>
@import "https://fonts.googleapis.com/css?family=Poppins:600";
body {
  background-color: lightblue;
}
img {
  border-radius: 6%;
  cursor: pointer;
}

img:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
  padding: 2px 16px;
}
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
  padding: 5px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h2{
  position: absolute;
  left : 420px;
  top  : 150px;
}
h3{
  position : absolute;
  left : 690px;
  top : 150px;
}
h1 {
  text-align: center;
  top : 500px;
  font-family: "Poppins", sans-serif;
  color: #F3DA32;
  text-shadow: 2px 2px #111111;
}
</style>
</head>
<body>
<h1>Dashboard Dosen</h1>
<div class="row">
 
  <div class="column"><h2>
  <img src="gambar/group 3.png" alt="Akun" style="width:70%"></h2>
</div>

  <div class="column"><h3>
  <img src="gambar/group 2.png" alt="Kelas" style="width:70%"></h3>
</div>

</div>

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