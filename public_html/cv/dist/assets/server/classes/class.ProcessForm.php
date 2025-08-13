<?php 
class ProcessForm {

    protected $jsonFilePath;
    protected $jsonFileName;

    //businesses_contacted

    public function __construct() {
        
    }

    public function setJsonFilePath($jsonFilePath) {
       $this->jsonFilePath = $jsonFilePath;
    }   

    public function getJsonFilePath() {
        return $this->jsonFilePath;
    }
    
 

    public function writeToFile() {
        $file = "cover/json/" . $_REQUEST["job_category"] . "/" . $json_file_name . ".txt";
        $content = $json;
        $fp = fopen($file,"wb");
        fwrite($fp,$content);
        fclose($fp);        
    }

}
class WriteCoverLetterToJsonFile extends ProcessForm {
    
    public function __construct() {
    
    }

}
class WriteBusinessContactedToJsonFile extends ProcessForm {
    
    public function __construct() {
    
    }

}
?>