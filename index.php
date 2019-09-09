<?php
include ("Triangle.php");



function Triangle(){
   $side1 = $_POST['side1'];
   $side2 = $_POST['side2'];
   $side3 = $_POST['side3'];
   $color = $_POST['color'];
   if ($_SERVER['REQUEST_METHOD'] == "POST"){
      $triangle = new Triangle();
      $triangle->setSide($side1,$side2,$side3);
      $triangle->color = $color;
      echo "S = ".$triangle->getArea()."<br>"."P = ".$triangle->getPerimeter()."<br>Color :".$triangle->color;
      //echo $side3;
   }else{
      echo " Vui long nhap du lieu";
   }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Starter Template for Bootstrap</title>

   <!-- Bootstrap core CSS -->
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <style>
      body {
         padding-top: 50px;
      }

      .starter-template {
         padding: 40px 15px;
         text-align: center;
      }
   </style>

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Project name</a>
      </div>
      <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
         </ul>
      </div><!--/.nav-collapse -->
   </div>
</div>

<div class="container">

   <div class="row">
      <div class="col-md-4 col-md-offset-4">
         <form action="" method="post" role="form">
            <legend>Triangle</legend>

            <div class="form-group">
               <label for="">Canh 1:</label>
               <input type="number" class="form-control" name="side1" id="" placeholder="Input side 1...">
            </div>
            <div class="form-group">
               <label for="">Canh 2:</label>
               <input type="number" class="form-control" name="side2" id="" placeholder="Input side 2...">
            </div>
            <div class="form-group">
               <label for="">Canh 3:</label>
               <input type="number" class="form-control" name="side3" id="" placeholder="Input side 3...">
            </div>
            <div class="form-group">
               <select name="color" id="inputID" class="form-control">
                  <option value="yellow"> Yellow </option>
                  <option value="green"> Green </option>
                  <option value="blue"> Blue </option>
                  <option value="pink"> Pink </option>
               </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
         </form>
         <?php if ($_SERVER['REQUEST_METHOD'] == "POST"):?>
            <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <?= Triangle() ;?>
            </div>
         <?php endif;?>
      </div>
   </div>
</div><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

