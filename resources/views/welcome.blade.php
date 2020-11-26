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
       .navlogo {
        max-width: 100%;
        max-height:400px;
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
    /* .page-footer{
        background-image: url('images/pp.jpg');
        background-size: cover;
    } */
    .footer-copyright{
        background-image: url('images/wine.jpg');
        background-size: cover;
    }

    .text-block {
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 10px;
        margin-bottom:20px;
      }

      .button {
        padding: 15px 25px;
        font-size: 24px;
        text-align: center;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color:#ccf5ff ;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
      }

.button:hover {background-color: silver}

.button:active {
  background-color:  #6699ff;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
    @media only screen and (max-width: 600px) {
      .navlogo {
        max-width: 100%;
        height:auto;
  }
  .parallax-container {
      height: 300px;
    }

    .enquire{
      margin-top: 250px;
    }

  .assess, .test{
    margin-top:  150px;
  }
.results{
  margin-top: 100px;
}

.tt {
            list-style-image: url('/images/tt.jpg');
        }

}

  </style>
</head>
<body>
<header>
@include('content.nav')
</header>
<main>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
          <div class="container">
            <br><br>
            <div class="row center">
              <img class="navlogo"src="images/logofinal3.png" alt="">
            </div>
            <br><br>

          </div>
        </div>
        <div class="parallax"><img src="images/urinetest.jpg"></div>
      </div>
<br>
 <marquee behavior="scroll" direction="left" style="font-size:xx-large;">
    <img src="images/iphoneTT.jpeg" height="110px" width="80px" style="margin-bottom:-40px; margin-right:-30px;">
      <b  style="color:red; ">Find out if you have Covid-19 NOW</b> - Results in <b> 15 minutes </b> - with an ANTIGEN swab test  <small>please see <a href="#covid">details</a> </small>
      <img src="images/iphoneTT.jpeg" height="110px" width="80px" style="margin-bottom:-40px; "> 
 </marquee>

<section class="container section scrollspy" id="about">
  <table class="table table-borderless">
    <tr>
  <td><img src="images/sketley.jpg" style="height:150px; width:90px; border:2px solid blue;"></td>
    <td><h4><em>"Working together for a safer, healthier future for your company and employees"</em></h4>
    <br>
    - Mrs Ketley, Managing Director
    </td>
    </tr>
  </table>

    {{-- <div class="row center-align">
        <img src="images/bcard.jpg"  class="" style="height:250px; width:350px; ">

    </div>
    <hr> --}}
    <section id="covid">
      <img src="images/covid.jpg"  class="responsive-img" >
  </section>
</section>
    @include('content.whatwedo')

<br>
    <div class="parallax-container">
        <div class="parallax">
            <img src="images/pp.jpg" >
        </div>
    </div>
                <br>
    @include('content.aboutus')


    <div class="parallax-container">
        <div class="parallax">
            <img src="images/wine.jpg" >
        </div>
    </div>


    @include('content.contact')
    <div class="parallax-container">
        <div class="parallax">
            <img src="images/6.jpeg" >
        </div>
    </div>


    @include('content.policies')

    @include('content.footer')
</main>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script type="text/javascript">function add_chatinline(){var hccid=34450465;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
    add_chatinline(); </script>
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
