<!DOCTYPE html>
<html>
  <head>
    <title>Salsabila</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="data/logo.ico"> 
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="data/style.css" />

    <script type="text/javascript">
    window.onload = function(){
      LandingJs.start({
        slide: true,
        slideCount: 5,
        countdown: true,
        countdownTime: '2017,03,11',
        brand: 'Reuni',
        description: 'Jika Rindu mari bertemu, Jika tidak kenapa harus saling lupa!',
        brief: ''
      });
    }

    </script>
  </head>
  <body>
    <div id="blur"></div>
      <div id="container">
        <h1></h1>
        <h4></h4>
        <form action="save.php" method="post">
          <input type="text" name="subscribe" id="subscribe" placeholder="Enter your email here ..." />
          <input type="submit" name="notify" id="notify" value="Notify Me" />
        </form>
        <p id="brief"></p>
        <div id="countdown">
         
        </div>
        <p id="copyright"></p>
      </div>
    
  <script src="data/countdown.min.js"></script>  
  <script src="landing.min.js"></script>
  </body>
</html>
