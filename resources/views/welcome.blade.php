<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <title>WDAT</title>
    <style>
        header{
      background: url(images/nav.png); 
      background-size: cover;
      background-position: center;
      min-height: 500px;
    }
    }
    .section{
      padding-top: 4vw;
      padding-bottom: 4vw;
    }
    .tabs .indicator{
      background-color: #1a237e;
    }
    .tabs .tab a:focus, .tabs .tab a:focus.active{
      background: transparent;
    }
    .page-footer{
        background-color: black;
    }
    .footer-copyright{
        background-image: url('images/wine.jpg');
        background-size: cover;
    }
    @media only screen and (max-width: 600px) {
  header {
      background: url(images/nav.png); 
      background-size: cover;
      background-position: center;
      min-height: 300px;
  }
}
    </style>
</head>
<body>
<header>
@include('content.nav')
</header>
<main>
<br>
<section class="container section scrollspy" id="about">
    <div class="row center-align">
        <blockquote><h4><em>"Working together for a safer, healthier future for your employees and company"</em></h4></blockquote><br>
        <p>- Mrs Ketley, Managing Director</p>
    </div>
    <hr>
    <br>
 @include('content.aboutus')

<div class="parallax-container">
    <div class="parallax">
        <img src="images/wine.jpg" alt="" class="responsive-img">
    </div>
</div>
            
@include('content.whatwedo')              


<div class="parallax-container">
    <div class="parallax">
        <img src="images/IMG_3983.PNG" alt="" class="responsive-img">
    </div>
</div>
            
@include('content.contact')    

</main>   
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.parallax').parallax();
      $('.tabs').tabs();
      $('.tooltipped').tooltip();
      $('.scrollspy').scrollSpy();
    });
  </script>
</body>
</html>