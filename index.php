<?php
require_once "bootstrap.php";
$curl = new anlutro\cURL\cURL;
$response = $curl->get('http://api.randomuser.me/?results=5');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.0/united/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
  </head>
  <body>

    <div class="container">
      <div class="page-header">
        <h1>Example page header <small>Subtext for header</small></h1>
      </div>
      <div class="row">
        <div class="col-sm-8">

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="https://res.cloudinary.com/roadtrippers/image/upload/c_fill,h_400,w_800/v1390489185/live-out-your-movie-fantasies-in-these-extreme-rental-cars.jpg" alt="Delorean" class="img-responsive">
                <div class="carousel-caption">
                  <h3>Delorean</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>
              </div>
              <div class="item">
                <img src="http://www.doghouseanimations.com/a10/a10%20warthog%20wip%204.jpg" alt="Warthog" class="img-responsive">
                <div class="carousel-caption">
                  <h3>Warthog</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>
              </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>

        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Panel heading</div>
            <!-- List group -->
            <ul class="list-group">
              <li class="list-group-item">Cras justo odio</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="full-container">
      <div class="row">
        <div class="col-sm-12">
          <div class="banner">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, facere, veniam id natus distinctio possimus cum quibusdam obcaecati repellendus dolore pariatur reiciendis quae minima et aspernatur mollitia cupiditate ipsum suscipit.
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <pre>
            <?php
              print_r($response->body);
            ?>
          </pre>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="assets/js/dist/scripts.min.js"></script>
  </body>
</html>