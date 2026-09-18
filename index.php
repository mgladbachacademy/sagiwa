<?php 
  $menu='Home';
  $site_title='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['SGW'].'template/inc/meta.php')?>
<div class="rancak-foundation">
  
  
  
  
  
<section class="section-default section-cover content-center">
  <div class="section-bg img-frame"></div>
  <div class="section-overlay"></div>
  <div class="section-gradient"></div>
  <div class="section-container">

    <div class="cover-content">
      <h1 class="section-title cover-title hide"><?php echo $sitename; ?></h1>
      <h2 class="cover-subtitle hide">by Sanustra</h2>
      <div class="cover-logo content-center">
        <?php require ($_SERVER['SGW'].'template/img/logo.svg')?>
      </div>
      <div class="cover-action">
        <button class="btn">Read More</button>
      </div>
    </div>
  
  </div>
</section>





<?php require ($_SERVER['SGW'].'template/inc/footer.php')?>
<?php require ($_SERVER['SGW'].'template/inc/base-bottom.php')?>