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
        <picture class="cover-logo-frame img-frame thumb-loading">
          <img alt="Logo Sagiwa" class="lazyload" data-original="template/img/logo.png"/>
        </picture>
      </div>
      <div class="cover-action">
        <button title="Read More" class="btn" aria-target="about">Read More</button>
      </div>
    </div>
  
  </div>
</section>
  
  
  
  
  
<section class="section-default section-tipeA section-tipeA2 section-about content-center" aria-anchor="about">
  <div class="section-container">
    <div class="tipeA-img">
      <picture class="tipeA-img-frame img-frame thumb-loading">
        <img alt="About Sagiwa" class="lazyload" data-original="template/img/about.jpg"/>
      </picture>
    </div>
    <div class="tipeA-content">
      <div class="tipeA-header">
        <h2 class="text-title tipeA-title">A space to pause, fell, and reconnect.</h2>
      </div>
      <div class="tipeA-info">
        <p>Dalam deru kehidupan sehari-hari yang serba cepat, sering kali kita terjebak pada ilusi bahwa kita harus selalu bergerak dan produktif. Namun, ada kalanya jiwa dan raga kita tidak lagi membutuhkan tambahan rutinitas. Yang sejatinya kita butuhkan adalah sebuah jeda yang bermakna, sebuah ruang aman untuk benar-benar berhenti sejenak, menarik napas panjang, mendengarkan bahasa tubuh yang mungkin kelelahan, dan memeluk kembali segala emosi yang tengah berproses di dalam diri.</p>
        <p>Berangkat dari kerinduan akan ketenangan tersebut, <b>Ruang Sadar Sagiwa by SANUSTRA</b> hadir sebagai oase praktik mindfulness dan wellbeing di kawasan BSD. Tempat ini dirancang secara khusus untuk menjadi rumah singgah bagi batin Anda; sebuah wadah yang merangkul Anda untuk kembali terhubung secara utuh dengan diri sendiri melalui harmoni olah tubuh (movement), kesadaran napas (breath), terapi suara (sound), hingga ruang untuk perenungan mendalam (reflection).</p>
      </div>
    </div>
  </div>
</section>
  
  
  
  
  
<section class="section-separator section-practitioner-separator">
  <?php require ($_SERVER['SGW'].'template/img/icon/separator.svg')?>
</section>
  
  
  
  
  
<section class="section-default section-practitioner content-center">
  <picture class="section-bg img-frame">
    <source media="(min-width: 640px)" data-srcset="template/img/practitioner-bg-desktop.png">
    <source media="(min-width: 414px)" data-srcset="template/img/practitioner-bg-mobile.png">
    <img data-original="template/img/practitioner-bg-mobile-small.png" class="lazyload" alt="Cover Practitioner"/>
  </picture>
  <div class="section-container">
    <h2 class="text-title section-title">Meet our practitioner</h2>
    <div class="practitioner-list">
      <?php 
        $practitioner_array = array();
        $practitioner_array[]=array(
          'practitioner_id'=>'hinro',
          'practitioner_image'=>'hinro',
          'practitioner_name'=>'Hinro',
          'practitioner_title'=>'Access Bars Practitioner',
          'practitioner_link'=>'https://www.instagram.com/p/DdXuwnXR7R-/',
        );
        $practitioner_array[]=array(
          'practitioner_id'=>'pitta',
          'practitioner_image'=>'pitta',
          'practitioner_name'=>'Pitta Sekar Wangi',
          'practitioner_title'=>'Professional Life and Career Coach | Zen Counselor | Access Bars Practitioner',
          'practitioner_link'=>'https://www.instagram.com/p/DdXiSjjRElA/',
        );
        $practitioner_array[]=array(
          'practitioner_id'=>'iyus',
          'practitioner_image'=>'iyus',
          'practitioner_name'=>'Iyus Dharmawan',
          'practitioner_title'=>'Sound Healing & Sound Experience Facilitator',
          'practitioner_link'=>'https://www.instagram.com/p/DdXo0z9RSSW/',
        );
        $practitioner_array[]=array(
          'practitioner_id'=>'astrid',
          'practitioner_image'=>'astrid',
          'practitioner_name'=>'Astrid Hendrawati',
          'practitioner_title'=>'Life Coach & Breathwork Facilitator',
          'practitioner_link'=>'https://www.instagram.com/p/DdVElRsxNuz/',
        );
        $practitioner_array[]=array(
          'practitioner_id'=>'anggia',
          'practitioner_image'=>'anggia',
          'practitioner_name'=>'Anggia Hapsari',
          'practitioner_title'=>'Yin Yoga Teacher & Sound Bath Facilitator',
          'practitioner_link'=>'https://www.instagram.com/p/DdVJsCjxSn3/',
        );
        foreach($practitioner_array as $practitioner_list){
      ?>
        <a title="<?php echo($practitioner_list['practitioner_name'])?>" class="practitioner-box" 
        href="<?php echo($practitioner_list['practitioner_link'])?>" target="_blank">
          <div class="practitioner-photo">
            <div class="practitioner-photo-frame img-frame thumb-loading">
              <img alt="Foto" class="lazyload" data-original="template/img/practitioner-<?php echo($practitioner_list['practitioner_image'])?>.jpg"/>
            </div>
          </div>
          <div class="practitioner-info">
            <h2 class="practitioner-name"><?php echo($practitioner_list['practitioner_name'])?></h2>
            <h3 class="practitioner-title"><?php echo($practitioner_list['practitioner_title'])?></h3>
          </div>
        </a>
      <?php } ?>
    </div>
  </div>
</section>
  
  
  
  
  
<section class="section-separator section-separator-invert section-practitioner-separator">
  <?php require ($_SERVER['SGW'].'template/img/icon/separator.svg')?>
</section>
  
  
  
  
  
<section class="section-default section-tipeA section-tipeA1 section-address content-center">
  <div class="section-container">
    <div class="tipeA-img">
      <div class="tipeA-img-frame img-frame thumb-loading">
        <iframe class="lazyload" data-original="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.9185004060696!2d106.6648043366294!3d-6.285146137903389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb0018bb0c0f%3A0x9efbf23c8c2bb4ad!2sBorussia%20M%C3%B6nchengladbach%20Academy%20Indonesia%20Office%20%26%20Cafe!5e0!3m2!1sen!2sid!4v1789714273324!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
      </div>
    </div>
    <div class="tipeA-content">
      <div class="tipeA-header">
        <h2 class="text-title tipeA-title">Contact us</h2>
      </div>
      <div class="tipeA-info">
        <ul class="address-list">
          <li class="address-icon">
            <?php require ($_SERVER['SGW'].'template/img/icon/maps.svg')?>
          </li>
          <li class="address-info">
            <p>Ruko BSD Junction Blok B.31,</p> 
            <p>JL. Pahlawan Seribu, Tangerang Selatan,</p> 
            <p>Banten 15322</p>
          </li>
        </ul>
        <ul class="address-list">
          <li class="address-icon">
            <?php require ($_SERVER['SGW'].'template/img/icon/footer-instagram.svg')?>
          </li>
          <li class="address-info">
            <a title="Instagram" class="address-link" href="https://www.instagram.com/ruangsadarsagiwa/">#ruangsadarsagiwa</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>





<?php require ($_SERVER['SGW'].'template/inc/footer.php')?>
<?php require ($_SERVER['SGW'].'template/inc/base-bottom.php')?>