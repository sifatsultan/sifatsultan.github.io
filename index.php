<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rugby Analytics</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


    <!-- <script src="scripts/functions.js"></script> -->
    <!-- <script src="scripts/variables.js"></script> -->
    <!-- <script src="scripts/bootstrap-cols.js"></script> -->
    <!-- <script src="scripts/array.js"></script> -->

    <?php

    define('FM_HOST', '127.0.0.1');
    define('FM_FILE', 'sportsdev');
    define('FM_USER', 'sifatsultan');
    define('FM_PASS', 'pizzahut20');

    # this is the include for the API for PHP
    require_once 'FileMaker.php';
    # instantiate a new FileMaker object
    $sportslogin = new FileMaker(FM_FILE, FM_HOST, FM_USER, FM_PASS);

    /***********************************
    QUERY PLAYER STATS AVGMETRESPERCARRY
    ************************************/

    //find 'Tplayers2'
    $personnel_find = $sportslogin->newFindCommand('Tplayers2');
    //build query array
    $personnel_findCriterions = array(
        'fteam_name' => 'Waratahs',
    );
    foreach ($personnel_findCriterions as $key => $value) {
        $personnel_find->AddFindCriterion($key, $value);
    }
    //[doubt]
    // fmsSetPage($personnel_result,'Tplayers2',3);
    //sort data by 'avg metres per carry'
    $personnel_find->addSortRule('R_avgmetrespercarry', 1, FILEMAKER_SORT_DESCEND);
    //execute query
    $personnel_result = $personnel_find->execute();
    // if(FileMaker::isError($personnel_result)){
    //     // fmsTrapError($personnel_result,"error.php");
    //     echo "Error";
    // }
    //[doubt]
    // fmsSetLastPage($personnel_result,'Tplayers2',3);
    //pull the rows out of the query into {personnel_row}
    // $personnel_row = current($personnel_result->getRecords());

    ?>




</head>

<body>
  <nav class="navbar">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right nav-main-nav">
          <li><a href="#">About</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- nav -->



  <!-- BANNER -->
  <div class="row row-banner ">
  	<div class="container container-banner vertical-center">
  		<div class="col-md-6">
  			<img src="images/prince2.png" alt="" />
  		</div><!-- col-md-4 -->
  		<div class="col-md-6">
  			<h1 class="bold name">Sifat <span class="lowercase">Sultan</span></h1>
  			<h3 class="letter-spacing-narrow name-desc">Busy crafting the best app</h3>
  		</div><!-- col-md-8 -->
  	</div>
  	<!-- container-banner -->
  </div><!-- row-banner -->


  <!-- CONTENT -->
  <div class="row row-content">
  	<div class="container container-content">
  		<div class="col-md-8 col-md-8-content">

        <table class="table">
          <thead>
            <tr>
              <th>Tries</th>
              <th>Name</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($personnel_result->getRecords() as $personnel2_row) {?>
              <tr>
                <th scope="row"><?= $personnel2_row->getField('R_tries'); ?></th>
                <td width="45" align="left" ><span class="style4"><?php echo $personnel2_row->getField('fplayer_name'); ?></span></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

        <p class="lead"><?php echo 'Hello'?></p>
        <div class="post">
          <div class="row vertical-center">
            <div class="col-md-4">
              <h5 class="bold date">Sep-13-2015</h5><!-- date -->
            </div><!-- col date -->
            <div class="col-md-8">
              <h3 class="subtitle bold">
                <a target="_blank" href="https://github.com/sifatsultan/batch-matrix">matrix batch script</a><!-- a subtitle -->
              </h3><!-- h3 subtitle -->
            </div><!-- col subtitle -->
          </div><!-- row-upper -->
          <div class="row row-lower">
            <div class="col-md-12">
              <p>my first batch script that generates matrix feel..</p><!-- desc -->
            </div><!-- col desc -->
          </div><!-- row-lower -->
        </div><!-- post -->

        <div class="post">
          <div class="row vertical-center">
            <div class="col-md-4">
              <h5 class="bold date">Jul-9-2015</h5><!-- date -->
            </div><!-- col date -->
            <div class="col-md-8">
              <h3 class="subtitle bold">
                <a target="_blank" href="https://github.com/sifatsultan/node-learn-node">the nodejs test</a><!-- a subtitle -->
              </h3><!-- h3 subtitle -->
            </div><!-- col subtitle -->
          </div><!-- row-upper -->
          <div class="row row-lower">
            <div class="col-md-12">
              <p>Loopback and other nodejs fundamentals tested..</p><!-- desc -->
            </div><!-- col desc -->
          </div><!-- row-lower -->
        </div><!-- post -->

        <div class="post">
          <div class="row row-upper vertical-center">
            <div class="col-md-4">
              <h5 class="bold date">28-Sep-2014</h5><!-- date -->
            </div><!-- col date -->
            <div class="col-md-8">
              <h3 class="subtitle bold"><a target="_blank" href="https://github.com/sifatsultan/js-socketio-loadmanagement">socket.io webserver to display data trend</a>
              </h3><!-- subtitle -->
            </div><!-- col subtitle -->
          </div><!-- row-upper -->

          <div class="row row-lower">
            <div class="col-md-12">
              <p>Server that handles Http request to store sensor values of smart energy system and display trends in consumption</p><!-- desc -->
            </div><!-- column desc -->
          </div><!-- row-lower -->
        </div><!-- post -->



  		</div><!-- col-md-8-content -->
  	</div>
  </div>
</body>

</html>
