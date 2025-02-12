<?php
session_start();
if(isset($_SESSION['erreurLogin']))
    $erreurLogin=$_SESSION['erreurLogin'];
else{
    $erreurLogin="";
}
session_destroy();
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="hamza dbani">
    <meta name="generator" content="Hugo 0.84.0">
    <title>connexion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-static/">
    <link rel="stylesheet" href="fichier.css">
    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
          .container img{
              width: 120px;
              height: 120px;
              margin-top: -30px;
              margin-bottom: 30px;
              margin-right: 100px;
              margin-left: 550px;
          }
          h1{
              text-align: center;
              margin-left: 100px;
          }
          .insc{
           text-align: right;
           margin-top: -30px;
          }
          .loginform{
            background: white;
            width: 55%;
            height: 100%;
            padding: 25px 25px 25px 25px;
            border-radius: 20px;
            margin-left: 300px;
          }
           @media (max-width: 992px){
          .container img{
              width: 120px;
              height: 120px;
              margin-top: -30px;
              margin-bottom: 30px;
              margin-right: 120px;
              margin-left: 450px;
          }
      
    </style>
 <link href="navbar-top.css" rel="stylesheet">
    
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

  </head>
  <body>
    <?php include('menu.php');?>
    <br>
    <h1>Se connecter</h1>
    <br> 
      
    <div class="container">
    <img src="../images/undraw_profile_pic_ic5t.svg">
    
  <div class="loginform">
      
     <form class="" id="" name="" method="post" action="seconnecter.php">
      <?php if(!empty($erreurLogin)) {?>     
      <div class="alert alert-danger">
         <?php echo $erreurLogin; ?>
         </div> 
        <?php } ?> 
      <div class="row">
      <div class="form-group col-12">
             <label>Login</label>
            <input type="email" name="email" class="form-control" placeholder="Email">   
         </div>
      </div>
    <div class="row">
      <div class="form-group col-12">
             <label>Mot de passe</label>
            <input type="password" name="motdepasse" class="form-control" placeholder="mot de passe">   
         </div>
      </div>
    <br>     
    <div class="row">
    <div class="form-group col-6">
    <input type="submit" class="btn btn-success" value="Se connecter">
    </div>    
    </div>    
    <a href="motDepasseoublie.php">Mot de passe oublié?</a>
    <div class="insc">
    <a href="inscription.php">s'inscrire</a> 
    </div>
     </form> 
  </div>      
  
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



  </body>
</html>
