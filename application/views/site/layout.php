</html>
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

    <script type="text/javascript">
        window.base_url = <?php echo json_encode(base_url()); ?>;
    </script>
    <link rel="shortcut icon" href="<?= base_url('uploads/images/ads/' . @$favi->image_link) ?>">
    
    <!-- Link style css -->
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/slick.css">
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/slick-theme.css">
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/font-awesome.css">
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/modify.css">
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/style.css">
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/responsive.css">
    <link rel="stylesheet" href="<?=base_url('public/site/')?>css/own.css">
    <!-- Link cdn fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <!-- Link js -->
    <script src="<?=base_url('public/site/')?>js/jquery.min.js"></script>
    <script src="<?=base_url('public/site/')?>js/popper.min.js"></script>
    <script src="<?=base_url('public/site/')?>js/bootstrap.min.js"></script>
</head>

<body>
    <?php $this->load->view('site/include_elements/header')?>
    <?php $this->load->view('site/include_elements/menu_slider')?>
    <?php $this->load->view('site/' . $temp)?>
    <?php $this->load->view('site/include_elements/footer')?>  
    <script src="<?= base_url() ?>public/site/js/main.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?= base_url() ?>public/site/js/slick.js"></script>
    <script src="<?= base_url() ?>public/site/js/layout.js"></script>
    <script>
        $('.autoplay').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
</body>

</html>