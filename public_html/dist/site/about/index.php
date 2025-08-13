<?php 
include("../../../globals.php");
$current_page = "About";
include(SITE_HEADER);
?>
<main id="about">
  <h1 class="lg-heading">
    Steve <span class="text-secondary">Mather</span>
  </h1>
  <h2 class="sm-heading">
    Let me tell you a few things...
  </h2>
  <div class="about-info">
    <img src="<?php echo IMAGES_URL ?>/smbw.jpg" alt="Steven Mather" class="bio-image" />
    <div class="bio">
      <h3 class="text-secondary">BIO</h3>
      <p>
        Passionate about web design / development and building fast clean and interactive websites, my key skills
        include html 5, CSS, SASS, JavaScript, VB Script, Coldfusion, PHP, Vue JS, SQL, as well as broader IT skills in
        software, hardware support and systems analysis.
      </p>
    </div>

    <div class="job job-1">
      <h3>News Corporation</h3>
      <h6>Senior Application Specialist</h6>
      <p>
        Systems Analysis and Level 3 support of critical production systems.
      </p>
    </div>
    <div class="job job-2">
      <h3>Cyber Commerce</h3>
      <h6>PHP / MySql Developer</h6>
      <p>

      </p>
    </div>
    <div class="job job-3">
      <h3>ASM Digital</h3>
      <h6>Freelance Developer and IT Support Technician</h6>
    </div>
  </div>
</main>
<?php 
include(SITE_FOOTER);
?>