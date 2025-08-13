<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="cache-control" content="max-age=0" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <!-- <link rel="stylesheet" href="style.css" media="screen" /> -->
  <link rel="stylesheet" href="<?php echo CSS_URL ?>/cover.css" media="screen" />
  <link rel="stylesheet" href="<?php echo CSS_URL ?>/print.css" media="print" />  
  <style type="text/css" media="print">
  .form-title {
    display: none;
  }
  </style>
  <title>Steve Mather Resume</title>
</head>

<body>
  <div class="outer-container" id="page-one">
    <header class="display-flex">
      <div class="spacer"></div>
      <div class="contact">
        <ul>
          <li class="my-name">
            Steve Mather
          </li>
          <li>
            <span class="icon-spacing">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </span>
            0467 972 595
          </li>
          <li>
            <span class="icon-spacing">
              <i class="fa fa-envelope footer-form-icon-container" aria-hidden="true"></i>
            </span>
            steve@asmather.com
          </li>
          <li>
            <span class="icon-spacing">
              <i class="fa fa-globe" aria-hidden="true"></i>
            </span>
            www.asmather.com
          </li>
          <!-- <li>
                      <span class="icon-spacing">
                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                      </span>
                      Linked In
                    </li> -->
        </ul>
      </div>
    </header>
    <?php           
    if(isset($_REQUEST["job_category"])) {
      $_REQUEST["job_category"];
    ?>
    <div class="form-title">
      <div class="display-flex--space-between">
        <div>
          <?php echo $_SESSION["job_categories"][$_REQUEST['job_category']] ?>
        </div>
        <div>
          <a href=<?php echo ROOT_URL . "/" ?>>Home</a>
        </div>
      </div>
    </div>
    <?php 
    }
    ?>