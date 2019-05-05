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
  left : 300px;
  top  : 150px;
}
h3{
  position : absolute;
  left : 570px;
  top : 150px;
}
h4{
  position : absolute;
  left : 840px;
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
<h1>Dashboard Admin</h1>
<div class="row">
 
  <div class="column"><h2>
  <img src="gambar/group 3.png" alt="Akun" style="width:70%"></h2>
</div>

  <div class="column"><h3>
  <img src="gambar/group 2.png" alt="Kelas" style="width:70%"></h3>
</div>

  <div class="column"><h4>
  <img src="gambar/group 1.png" alt="Stupa" style="width:70%"></h4>
</div>

</div>
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5bf54cfd79ed6453ccaa6b9c/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
  </body>
@stop


