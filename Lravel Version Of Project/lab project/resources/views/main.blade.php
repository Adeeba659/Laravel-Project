<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('main.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
</head>
<body>
    <div class="container-fluid logo">
        <img src="logo.png" alt="">
    </div>
    <h1>MERIT LIST GENERATOR</h1>
    <h1>Are You :</h1>
    <div class="float-container">

        <div class="float-child">
           <a href="adminlogin"> <img  src="admin2.png" alt="" id="im01"></a>
          <div class="Red">ADMIN</div>
        </div>
        
        <div class=" float-child">
           <a href="studentlogin"><img  src="student.png" alt="" id="im02"></a>       
        <div class="blue">STUDENT</div>
        </div>
        
    </div>
    <script>
        $("#im01").mouseover(function(){
        $("#im01").animate({
        
        height: '200px',
      
        });
        });
        $("#im01").mouseout(function(){
        $("#im01").animate({
        height: '150px',

        });
        });
        $("#im02").mouseover(function(){
        $("#im02").animate({
        
        height: '200px',
      
        });
        });
        $("#im02").mouseout(function(){
        $("#im02").animate({
        height: '150px',

        });
        });
    </script>
    
    
</body>
</html>