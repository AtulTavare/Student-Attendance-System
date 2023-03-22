  <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
</style>




<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <!------ Include the above in your HEAD tag ---------->

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
</head>
<div class="topnav" >
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="contact.php">Contact Us</a>
     </div>
<div class="container animated fadeIn">

  <div class="row">
    <h1 class="header-title"> Contact </h1>
    <hr>
    <div class="col-sm-12" id="parent">
      <div class="col-sm-6">
      <iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJaY32Qm3KWTkRuOnKfoIVZws&key=AIzaSyAf64FepFyUGZd3WFWhZzisswVx2K37RFY" allowfullscreen></iframe>
      </div>

      <div class="col-sm-6">
        <form action="form.php" class="contact-form" method="post">
  
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
            </div>
        
        
            <div class="form-group form_left">
              <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
            </div>
        
          <div class="form-group">
               <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
          </div>
          <div class="form-group">
          <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
          <br>
            <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container second-portion">
  <div class="row">
        <!-- Boxes de Acoes -->
      <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class=" "><i class="fa fa-envelope" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">MAIL & WEBSITE</h3>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp  majorproject@gmail.com
              <br>
              <br>
              <i class="fa fa-globe" aria-hidden="true"></i> &nbsp https://sites.google.com/view/web-hub 
            </p>
          
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class="  "><i class="fa fa-mobile" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">CONTACT</h3>
              <p>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-8766778998
              <br>
              <br>
              <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+91)-9011510474
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-4">
      <div class="box">             
        <div class="icon">
          <div class=" "><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          <div class="info">
            <h3 class="title">ADDRESS</h3>
              <p>
               <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp J-Tower, Aurangabad
            </p>
          </div>
        </div>
        <div class="space"></div>
      </div> 
    </div>        
    <!-- /Boxes de Acoes -->
    
    <!--My Portfolio  dont Copy this -->
      
  </div>
</div>

</div>

<!--Footer-->
 <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.php">Home</a></li>
                <li class="list-inline-item"><a href="course">Courses</a></li>
                <li class="list-inline-item"><a href="about.php">About</a></li>
                <li class="list-inline-item"><a href="contact.php">Contact</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Pradnya Foundation © 2023</p>
        </footer>
    </div>




<style>
.footer-basic {
  padding:40px 0;
  background-color:#ffffff;
  color:#4b4c4d;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1.6;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}
</style>

<style>
  
  /* Conatct start */

        .header-title
        {
          text-align: center;
          color:#00bfff;
        }

        #tip 
        {
            display:none;  
        }

        .fadeIn
        {
          animation-duration: 3s;
        }

        .form-control
        {
          border-radius:0px;
          border:1px solid #EDEDED;
        }

        .form-control:focus
        {
          border:1px solid #00bfff;
        }

        .textarea-contact
        {
          resize:none; 
        }

        .btn-send
        {
          border-radius: 0px;
          border:1px solid #00bfff;
          background:#00bfff;
          color:#fff; 
        }

        .btn-send:hover
        {
          border:1px solid #00bfff;
          background:#fff;
          color:#00bfff;
          transition:background 0.5s;   
        }

        .second-portion
        {
          margin-top:50px; 
        }

            @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";
    @import "http://fonts.googleapis.com/css?family=Roboto:400,500";

    .box > .icon { text-align: center; position: relative; }
    .box > .icon > .image { position: relative; z-index: 2; margin: auto; width: 88px; height: 88px; border: 8px solid white; line-height: 88px; border-radius: 50%; background: #00bfff; vertical-align: middle; }
    .box > .icon:hover > .image { background: #333; }
    .box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
    .box > .icon:hover > .image > i { color: white !important; }
    .box > .icon > .info { margin-top: -24px; background: rgba(0, 0, 0, 0.04); border: 1px solid #e0e0e0; padding: 15px 0 10px 0; min-height:163px;}
    .box > .icon:hover > .info { background: rgba(0, 0, 0, 0.04); border-color: #e0e0e0; color: white; }
    .box > .icon > .info > h3.title { font-family: "Robot",sans-serif !important; font-size: 16px; color: #222; font-weight: 700; }
    .box > .icon > .info > p { font-family: "Robot",sans-serif !important; font-size: 13px; color: #666; line-height: 1.5em; margin: 20px;}
    .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: #222; }
    .box > .icon > .info > .more a { font-family: "Robot",sans-serif !important; font-size: 12px; color: #222; line-height: 12px; text-transform: uppercase; text-decoration: none; }
    .box > .icon:hover > .info > .more > a { color: #fff; padding: 6px 8px; background-color: #63B76C; }
    .box .space { height: 30px; }

    @media only screen and (max-width: 768px)
    {
      .contact-form
      {
        margin-top:25px; 
      }

      .btn-send
      {
        width: 100%;
        padding:10px; 
      }

      .second-portion
      {
        margin-top:25px; 
      }
    }
  /* Conatct end */
</style>