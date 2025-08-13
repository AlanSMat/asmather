<?php 
session_start();

include "globals.php";

// $job_categories array is in the globals.php directory
$_SESSION["job_categories"] = $job_categories;

include SERVER_ASSETS_PATH . "/header.php";
?>

<main class="container">  
  <div class="app-content">
    <div class="d-flex mb-4">      
      <?php 

      $i = 0;
      foreach($job_categories as $job_category => $job_category_title) {
        if (!is_dir(JSON_FILE_PATH . "/" . $job_category)) {                    
          mkdir(JSON_FILE_PATH . "/" . $job_category, 0777, true);
          copy(JSON_FILE_PATH . "/category_default.txt", JSON_FILE_PATH . "/" . $job_category . "/default.txt");                
        }  
        if($i % 2) {
          
        }          
      ?>
        <div class="col-md-6">
          <div class="card">    
            <div class="card-header shadow-md">
              <?php echo $job_category_title ?>
            </div>
            <div class="card-body">
              <!-- <h5 class="card-title">Special title treatment</h5> -->
              <p class="card-text">
                <div class="menu-link">
                  <a href="<?php echo COVER_URL ?>/form.php?job_category=<?php echo $job_category ?>">Cover
                    Letter</a>
                </div>
                <div class="menu-link">
                  <a href="<?php echo CV_URL ?>/<?php echo $job_category ?>/">CV</a>
                </div>
                <div class="menu-link">
                  <a href="<?php echo COVER_URL ?>/links.php?job_category=<?php echo $job_category ?>">List</a>
                </div>
              </p>        
            </div>
          </div>
        </div>
      <?php 
      }
      ?>
    </div>
    <div class="d-flex mb-4">
      <div class="col-md-6">
        <div class="card shadow-sm">    
          <div class="card-header">
            Lyme Disease Australia
          </div>
          <div class="card-body">            
            <p class="card-text">
              <div class="menu-link">
                <a target="_blank" href="https://docs.google.com/spreadsheets/d/1xt6hdvOIdGZs4RaSlW787FEnzZ3XMONQN01o1Lm7wag/edit#gid=0">IT Issues</a>
              </div>                 
              <div class="menu-link">
                <a target="_blank" href="https://www.lymedisease.org.au">Website</a>
              </div>                 
            </p>        
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card shadow-sm">    
          <div class="card-header">
            References
          </div>
          <div class="card-body">
            <p class="card-text">
            <?php 
              $dir = new DirectoryIterator(DOC_ROOT . "/refs");     
              foreach ($dir as $fileinfo) {
                  if (!$fileinfo->isDot()) {
                    ?>
                    <div class="menu-link">
                      <!-- <a target="_blank" href="refs/Steve Mather Performance Agreement FY15.pdf">Performance Agreement FY15</a> -->
                      <a target="_blank" href="refs/<?php echo $fileinfo->getFilename() ?>"><?php echo $fileinfo->getFilename()  ?></a>
                    </div>    
                    <?php
                  }
              }
            ?>
            </p>        
          </div>
        </div>
      </div>
    </div>  
    <div class="d-flex">
      <div class="col-md-6">
        <div class="card shadow-sm">    
          <div class="card-header">
            Businesses Contacted
          </div>
          <div class="card-body">            
            <p class="card-text">
              <div class="menu-link">
                <a href="businesses/form.php">Entry Form</a>
              </div>                 
              <div class="menu-link">
                <a href="businesses/list.php">List</a>
              </div>                 
            </p>        
          </div>
        </div>
      </div>  
    
    <!-- <ul>
    <li>
      <div class="menu-title">LDAA</div>
      <div class="menu-link">
        <a target="_blank" href="https://docs.google.com/spreadsheets/d/1xt6hdvOIdGZs4RaSlW787FEnzZ3XMONQN01o1Lm7wag/edit#gid=0">IT Issues</a>
      </div>      
    </li>
    <li>
      <div class="menu-title">References</div>
      <div class="menu-link">
        <a target="_blank" href="refs/Steve Mather Performance Agreement FY15.pdf">Performance Agreement FY15</a>
      </div>      
    </li>
  </ul> -->
  </div>
</main>

<?php 
include SERVER_ASSETS_PATH . "/footer.php";
?>