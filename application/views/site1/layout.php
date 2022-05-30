

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link rel="canonical" href="<?= base_url() ?>"/>

    <meta name='revisit-after' content='1 days' />

    <meta name="robots" content="index,follow" />

    <title><?= @$title_site ? $title_site : $title_page ?></title>

    <meta name="keywords" content="<?= @$keyword_site ? $keyword_site : $keyword_page ?>" />

    <meta name="description" content="<?= @$description_site ? $description_site : $description_page ?>" />



    <!--Meta share facebook-->

    <meta property="og:url"           content="<?= $url ?>" />

    <meta property="og:type"          content="website" />

    <meta property="og:title"         content="<?= @$title_site ? $title_site : $title_page ?>" />

    <meta property="og:description"   content="<?= @$description_site ? $description_site : $description_page ?>" />

    <meta property="og:image"         content="<?= @$img_site ? $img_site : $img_page ?>" />

    <meta property="og:site_name" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/xzoom.css"/>
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/mdb.min.css"/>
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/owl.theme.default.min.css"/>
    
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/magnific-popup.css"/>
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/swiper.min.css"/>
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/materialdesignicons.min.css"/>
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/layout.css"/>
    <link rel="shortcut icon" href="<?=base_url()?>uploads/images/ads/<?=$favi->image_link?>"/>

    <script type="text/javascript">

      window.base_url = <?php echo json_encode(base_url()); ?>;

  </script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155243242-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-155243242-1');
  </script>



</head>

<body>
  <div class="theh">
    <?php if($object){?>
      <h1><?=$object->h1?></h1>
      <h2><?=$object->h2?></h2>
      <h3><?=$object->h3?></h3>
      <h4><?=$object->h4?></h4>
      <h5><?=$object->h5?></h5>

    <?php }elseif($category){?>
      <h1><?=$category->h1?></h1>
      <h2><?=$category->h2?></h2>
      <h3><?=$category->h3?></h3>
      <h4><?=$category->h4?></h4>
      <h5><?=$category->h5?></h5>
    <?php }else{?>
       <h1><?=@$config->h1?></h1>
      <h2><?=@$config->h2?></h2>
      <h3><?=@$config->h3?></h3>
      <h4><?=@$config->h4?></h4>
      <h5><?=@$config->h5?></h5>
    <?php }?>
  </div>
    <div id="myOverlay" class="overlay">
      <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
      <div class="overlay-content">
        <form action="<?= base_url('tim-kiem.html')?>"  method="GET">
          <input type="text" placeholder="Search.." name="key_search" value="<?= $key_search ?>" >
          <button type="submit"><i class="fa fa-search"></i></button>
      </form>
  </div>
</div>

<!-- header -->

<?php $this->load->view('site/include_elements/header')?>

<!-- content -->

<?php $this->load->view('site/' . $temp)?>

<!-- footer -->

<?php $this->load->view('site/include_elements/footer')?>  
<!--     <div class="box-giohang">
    <ul>    
        <li>
            <a href="<?=base_url()?>shopping.html">
                <img src="<?=base_url()?>public/site/img/ic-card.png" alt="">
            </a>
        
                        <span class="badge"><?= count($_SESSION['cart'])?></span>
                    </li>
    </ul>
</div> -->
<script src="<?=base_url('public/site/')?>js/jquery-3.3.1.min.js"></script>
<script src="<?=base_url('public/site/')?>js/xzoom.min.js"></script>
<script src="<?=base_url('public/site/')?>js/bootstrap.min.js"></script>
<script src="<?=base_url('public/site/')?>js/mdb.min.js"></script>
<script src="<?=base_url('public/site/')?>js/owl.carousel.min.js"></script>

<script src="<?=base_url('public/site/')?>js/magnific-popup.js"></script>
<script src="<?=base_url('public/site/')?>js/swiper.min.js"></script>
<script src="<?=base_url('public/site/')?>js/layout.js"></script>
<script type="text/javascript" src="<?=base_url()?>public/site/my-js/main.js"></script>
<script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
  }

  function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
  }


  $('.owl-1').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
  $('.owl-2').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
  $('.owl-3').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>


<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
            <a href="tel:<?=@$config->hotline?>" class="pps-btn-img">
                <img src="<?=base_url()?>public/site/img/icon-call-nh.png" alt="Gọi điện thoại" width="50">
            </a>
        </div>
    </div>

</div>
</body>

</html>