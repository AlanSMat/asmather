<?php
session_start(); 
include("../../globals.php");
include(CLASSES_PATH . "/class.ProcessForm.php");

//WriteCoverLetterToJsonFile

//$jfp = new ProcessForm();


if(isset($_REQUEST["make_default"])) {  
  $json_file = JSON_FILE_PATH . "/" . $_REQUEST["job_category"] . "/" . $_REQUEST["json_file_name"] . ".txt";    
  copy($json_file, JSON_FILE_PATH . "/" . $_REQUEST["job_category"] . "/default.txt");   

  $_SESSION["json_file_name"] = "default";

  header("location: cover/");
}

if(isset($_REQUEST["delete"])) {  
  $json_file = JSON_FILE_PATH . "/" . $_REQUEST["job_category"] . "/" . $_REQUEST["json_file_name"] . ".txt";    
  unlink($json_file);
  header("location: cover/links.php?job_category=" . $_REQUEST["job_category"] . "");  
}

// check if a form was submitted
if( !empty( $_POST ) ){

  $_POST['intro-paragraph'] = "In response to the " . $_POST['job-title'] . " advertised on the " . $_POST["website"] . " website, on the " . $_POST['date'];

  $json_file_name = date('Ymd',strtotime($_POST['date'])) . "_" . $_REQUEST["job_category"] . "_" . strtolower(str_replace(" ", "_", $_POST['employer-company-name'])) . "_" . strtolower(str_replace(" ", "_", $_POST['job-title']));

  $_SESSION["json_file_name"] = $json_file_name;
  $_SESSION["job_category"]   = $_REQUEST["job_category"];

  // convert form data to json format
  $json_content = json_encode( $_POST );

  $file = JSON_FILE_PATH . "/" . $_REQUEST["job_category"] . "/" . $json_file_name . ".txt";

  $fp = fopen($file,"wb");
  if(!fwrite($fp, $json_content)) {
    // echo 'error';
    // exit;
  };
  fclose($fp);
  
  header("location: cover/create_html_file.php");

} else {
  trigger_error("form fields empty!");
}
?>