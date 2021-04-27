<html>
<title>Loading</title>
<link rel="stylesheet" href="../styles/loadingPage_style.css" type="text/css">
<body>
   <div class="center">
       <img height="200" width="200" src="../img/loading_anim.gif">
       <h3> Registration Successful. Redirecting to login page withing a few seconds</h3>
   </div>
<script>setTimeout(function (){
    window.location.href = "../view/login.php"
    }, 3000)</script>
</body>
</html>