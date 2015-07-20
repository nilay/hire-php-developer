<?php
require_once("config.php");
$cmsContent = file_get_contents(CMS_API_URL . '/?json=get_post&post_slug=tips-for-hiring-remote-web-developer');
$cmsContentDecoded = json_decode($cmsContent);
$TITLE = "Hire Web Developer";
include_once("include/header.php");
?>
    <div class="container">
    <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-8 margin-bottom30">
        <?php print $cmsContentDecoded->post->content; ?>
        </div>
     
        <div class="col-md-4">
        
        </div>
     
     
     
      </div>
    </div>
<?php
include_once("include/footer.php");
?>

