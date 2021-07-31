<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UENR TTB</title>

    <!-- Bootstrap -->
    <link href="vendors/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="custom_styles.css"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="landing_page_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<nav>
<div class="navbar navbar-default">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="navbar-brand" style="color: #000000; font-weight: bold;"><span class="u">U</span>ENR &nbsp; <span class="t">T</span>TB</div>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
    <li><a href="index.php" class="text-capitalize">home</a></li>
    <li class="login_admin"><a href="notice_board.php" class="text-capitalize">Notice</a></li>
    <li><a href="ttb.php" class="text-capitalize">timetable</a></li>
<li><a href="#" class="text-capitalize" data-target="#aboutUs_modal" data-toggle="modal">about</a></li>
<li><a href="#" class="text-capitalize" data-target="#howTo_modal" data-toggle="modal">how to</a></li>
</ul>
</div>
</div>
</div>
</nav>

<!-- creating modal -->
<div class="modal fade" id="aboutUs_modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h3>AlphaCorp</h3>
      </div>
      <div class="modal-body">
        <p>AlphacorpGH is a tech startup made up of four young, passionate, determined gentlemen from the coners of Ghana.
          We proud ourselves in software development, IOT solutions and final year projects. From Technical report writing
          to project write ups, you can surely bet on us for good products.<br><br>
          we believe in togetherness therefore, we all see ourselves as the same and work
          towards a specific goal, which is to deliver quality software and hardware solutions to our clients and also with 
          a vision of spreading technologies across the country<br><br>
          Awakening the youth to embrace the new wave, technology and how they can leverage on it to better their lives and live 
          smater.
        </p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-dismiss="modal">close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="howTo_modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h3>How To Use <span class="brand_name">UENR TTB</span></h3>
      </div>
      <div class="modal-body">
          <h5 class="header_text_bold">SELECT SCHOOL:</h5>
<p>In this field, you select the school in which you belong to.</p>
<h5 class="header_text_bold">LEVEL:</h5>
<p>Select your level from the options. Thus from level 100 to 400</p>
<h5 class="header_text_bold">SELECT PROGRAM:</h5>
<p>In this field, you select the program you pursue. The programs will be shown here automatically after selecting a particular school</p>
<h5 class="header_text_bold">GENERATE TIME TABLE:</h5>
<P>After making all the above selections, click on this button to generate the exact time table based on your selection.<br><code>THANK YOU FOR USING UENR TTB</code></P>
      </div>
      <div class="modal-footer">
        <botton class="btn btn-primary" data-dismiss="modal">close</botton>
      </div>
    </div>
  </div>
</div>
