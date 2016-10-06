<!DOCTYPE HTML>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<link href="tuto.css" rel="stylesheet">
</head>
<body>
   <div class="container">
      <header class="row">
        <div class="col-lg-12">
          Entete
        </div>
      </header>
      <div class="row">
        <nav class="col-sm-2">
          Menu
        </nav>
        <section class="col-sm-10">
          Section
          <div class="row">
            <article class="col-sm-10">
              <?php include('afficher/affiche.php');?>
            </article>
            <div class="col-sm-2">
              <div class="row">
                <aside>
                  Aside 1
                </aside>
                <aside>
                  Aside 2
                </aside>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="row">
        <div class="col-lg-12">
          Pied de page
        </div>
      </footer>
    </div>
</body>
</html>