<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119132849-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-119132849-1');
  </script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Les Classes - La Nativité</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/scrolling-nav.css" rel="stylesheet">
<style type="text/css">
@media (min-width: 992px) {
  .option_width{
    width: 370px;
  }
}
.p-class a {
  padding: 1em;
}
</style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html">classroom | peewix</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active js-scroll-trigger" href="#">Les classes</a>
          </li>
          <!--li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../about/">Qui suis je ?</a>
        </li-->
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.html#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section id="about" style="margin-bottom: -9em;">
  <div class="container">
    <div class="row" style="margin-top: -3em;">
      <div class="col-md-6 col-xs-12">
        <h1 style="text-align: center;margin-bottom: 1em;">Lycée de la Nativité</h1>
        <h2>Enregistrez-vous : </h2>
        <p class="lead">
          <form action="post_action.php" method="POST">
            <div class="form-group row">
              <div class="col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="inputfirstname" placeholder="Prénom" required="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="inputlastname" placeholder="Nom de Famille" required="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12 col-xs-12">
                <input autocapitalize="off" type="text" class="form-control" name="inputinstagram" placeholder="Pseudo Instagram" required="">
                <label class="label_insta">Nous utilisons seulement votre pseudo pour afficher votre photo de profil sur les listes.</label>
              </div>
            </div>
            <div class="form-group">
              <label>Sélectionner votre classe :</label>
              <select class="form-control option_width" name="exampleFormControlSelect1">
                <option value="" disabled required="">-- Sélectionner votre classe  de 1ère: --</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
              </select>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <input type="submit" value="VALIDER" name="valider" class="btn btn-secondary" style="width: 100%!important;">
              </div>
            </div>
          </form>
        </p>
        <hr>
        <p class="p-class" style="font-weight: 500;">Voir les classes sans m'inscrire : <br>
          <center>
            <div class="btn-group mr-2" role="group" aria-label="First group">
              <a href="classes.php?w=1"><button type="button" class="btn btn-secondary btn-class">1</button></a>
              <a href="classes.php?w=2"><button type="button" class="btn btn-secondary btn-class">2</button></a>
              <a href="classes.php?w=3"><button type="button" class="btn btn-secondary btn-class">3</button></a>
              <a href="classes.php?w=4"><button type="button" class="btn btn-secondary btn-class">4</button></a>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
              <a href="classes.php?w=5"><button type="button" class="btn btn-secondary btn-class">5</button></a>
              <a href="classes.php?w=6"><button type="button" class="btn btn-secondary btn-class">6</button></a>
              <a href="classes.php?w=7"><button type="button" class="btn btn-secondary btn-class">7</button></a>
              <a href="classes.php?w=8"><button type="button" class="btn btn-secondary btn-class">8</button></a>
            </div>
          </center>
        </p>
      </div>
    </div>
  </div>
</section>



<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; peewix.com 2019</p>
    <p style="color: white; text-decoration: none; text-align: center;">Site web développé par <a href="https://www.instagram.com/armand.blin/">Armand BLIN</a></p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom JavaScript for this theme -->
<script src="js/scrolling-nav.js"></script>

</body>

</html>
