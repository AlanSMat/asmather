<?php 
include("../../../globals.php");
$current_page = "My Work";
include(SITE_HEADER);
?>
<main id="work">
  <h1 class="lg-heading">My <span class="text-secondary">Work</span></h1>
  <h2 class="sm-heading">
    Checkout some of my projects...
  </h2>
  <div class="projects" id="app">
    <div class="item" v-for="item in formattedWork">
      <a :href="item[0].href" target="_blank">

        <img :src="item[0].img" width="1280" alt="Project" class="src" />
      </a>
      <a class="btn-light" :href="item[0].href">
        <i class="fas fa-eye"></i> {{ item[0].title }}
      </a>
    </div>
  </div>
  <script src="<?php echo SCRIPTS_URL ?>/vue.js"></script>
  <script src="<?php echo SCRIPTS_URL ?>/app.js"></script>
</main>
<?php 
include(SITE_FOOTER);
?>