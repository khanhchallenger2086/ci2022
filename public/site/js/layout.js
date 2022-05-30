







// $('.owl-newmpd').owlCarousel({
//   loop:true,
//   margin:20,
//   nav:false,
//   dots: false,
//   responsive:{
//     0:{
//       items:2
//     },
//     600:{
//       items:3
//     },
//     1000:{
//       items:4
//     }
//   },
//   autoplay: true,
//   autoplayTimeout: 2000,
//   autoplayHoverPause: true,

// })



function action_shop(url, text, title, confirm,close) {
  Swal({

    title: title,

    text: text,

    type: 'success',

    showCancelButton: true,

    confirmButtonColor: '#3085d6',

    cancelButtonColor: '#d33',

    confirmButtonText: confirm,

    cancelButtonText: close

  }).then((result) => {

    if (result.value) {

      window.location.href = url;

    }

  })

}





function ShopItem(url, text, title, confirm,close) {

  Swal({

    title: title,

    text: text,

    type: 'warning',

    showCancelButton: true,

    confirmButtonColor: '#3085d6',

    cancelButtonColor: '#d33',

    confirmButtonText: confirm,

    cancelButtonText: close

  }).then((result) => {

    if (result.value) {

      window.location.href = url;

    }

  })

}




// $('.owl-slide').owlCarousel({
//   loop:true,
//   margin:10,
//   nav:true,
//   items:1,
//   dots:false,
//   autoplay: true,
//   autoplayTimeout: 2000,
//   autoplayHoverPause: true,
//   navText : ['<i class="fa fa-arrow-circle-left nutslide" aria-hidden="true"></i>','<i class="fa fa-arrow-circle-right nutslide" aria-hidden="true"></i>']
// })

// $('.owl-doitac').owlCarousel({
//   loop:true,
//   margin:10,
//   nav:false,
//   dots: false,
//   responsive:{
//     0:{
//       items:2
//     },
//     600:{
//       items:3
//     },
//     1000:{
//       items:5
//     }
//   },
//   autoplay: true,
//   autoplayTimeout: 2000,
//   autoplayHoverPause: true,
// })

// $('.slider-carousel').owlCarousel({
//   loop: true,
//   autoplay: true,
//   autoplayTimeout: 5000,
//   autoplayHoverPause: true,
//   dots: true,
//   nav: false,
//   items: 1,
//   autoHeight: true,
//   autoplaySpeed: 1000,
// });

// var swiper = new Swiper('.swiper-product-1', {
//   slidesPerView: 4,
//   slidesPerColumn: 2,
//   spaceBetween: 30,
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
//   autoplay: {
//     delay: 4000,
//   },
//   grabCursor: true,
//   disableOnInteraction: true,
//   speed: 1000,
//   breakpoints: {
//     992: {
//       slidesPerView: 3,
//       spaceBetween: 30,
//     },
//     767: {
//       slidesPerView: 2,
//       spaceBetween: 30,
//     },
//     400: {
//       slidesPerView: 2,
//       spaceBetween: 15
//     },
//   }
// });

// var swiper = new Swiper('.swiper-product-2', {
//   slidesPerView: 1,
//   slidesPerColumn: 4,
//   spaceBetween: 0,
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
//   autoplay: {
//     delay: 4000,
//   },
//   grabCursor: true,
//   disableOnInteraction: true,
//   speed: 1000,
//   breakpoints: {
//     992: {
//       slidesPerView: 1,
//     },
//     767: {
//       slidesPerView: 2,
//     },
//     575: {
//       slidesPerView: 1,
//     },
//   }
// });

// $('.partner-carousel').owlCarousel({
//   loop: true,
//   autoplay: true,
//   autoplayTimeout: 5000,
//   autoplayHoverPause: true,
//   dots: false,
//   nav: false,
//   autoplaySpeed: 1000,
//   margin: 40,
//   responsive: {
//     0: {
//       items:2,
//       margin: 20,
//     },
//     450: {
//       items:3
//     },
//     1000: {
//       items:4
//     },
//     1200: {
//       items:5
//     }
//   }
// });

// // XZOOM
// $('.xzoom-carousel').owlCarousel({
//   loop:false,
//   autoplay: false,
//   dots: false,
//   margin:10,
//   nav: true,
//   items: 4,
//   autoWidth: true,
//   navText: [
//   "<i class='mdi mdi-chevron-left'></i>",
//   "<i class='mdi mdi-chevron-right'></i>" 
//   ],
// });

// $(".xzoom, .xzoom-gallery").xzoom({tint: '#333', Xoffset: 15});
// $('.main-image').bind('click', function () {
//   var xzoom = $(this).data('xzoom');
//   xzoom.closezoom();
//   var gallery = xzoom.gallery().cgallery;
//   var i, images = new Array();
//   for (i in gallery) {
//     images[i] = {
//       src: gallery[i]
//     };
//   }
//   $.magnificPopup.open({
//     items: images,
//     type: 'image',
//     gallery: {
//       enabled: true
//     }
//   });
//   event.preventDefault();
// });


$(document).ready(() => {
  const pageUrl = window.location.href;
  const windowWidth = document.body.clientWidth;

  // GO TOP
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('.go-top').fadeIn().css('transform','scale(1)');
      $('.menu').addClass('down animated slideInDown');
    } else {
      $('.go-top').fadeOut().css('transform','scale(0)');
      $('.menu').removeClass('down animated slideInDown');

    }
  });

  $('.go-top').click(() => {
    $("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
  });

  $(".menu a").each( function () {
    if (pageUrl == (this.href)) {
      $(this).closest("a").addClass("active");
    }
  });
  
  $('.toggleMenu').click(() => {
    console.log(2);
    $('.nav').addClass('out');
    $('.overlay-menu').addClass('overlay-in');
  });

  $('.overlay-menu, .nav-close').click(function() {
    $('.overlay-menu').removeClass('overlay-in');
    $('.nav').removeClass('out');
  });

  for (let item = 0; item < 10; item++) {
    $('.slider .owl-dot span').eq(item).text('0' + `${item+1}`);
    $('.category-home .box-category').eq(item).addClass(`box-${item + 1}`)
  }

  $('.footer h4').click(function() {
    $(this).parent().find('ul').toggleClass('active');
  });

  $('.search-btn i').click(function() {
    $('.search').toggleClass('active');
    $(this).toggleClass('mdi-magnify mdi-close');
    $('.search input').focus();
  });

  if (windowWidth < 1200) {
    $('.menu .nav-link').parent().find('ul').filter(function() {
      $(this).parent().find('.nav-link').removeAttr('href');
    });
  }

  // setInterval(() => {
  //   const sliderHeight = $('.slider .owl-item.active img').height();
  //   const productWidth = $('.box-product-img').width();
  //   const categoryHeightAuto = $('.category-body ul.active').height();
  //   const serviceHomeHeight = $('.home-header-left-bottom').height();

  //   $('.category-body ul').css('height', `${sliderHeight - 15}px`);
  //   $('.category-body ul.active').css('height', 'auto');
  //   $('.category-body .less').css('top', `${categoryHeightAuto}px`);

  //   $('.seller-zone').css('height', `${(sliderHeight + serviceHomeHeight) - 50}px`);
  //   $('.box-product-img').css('height', `${productWidth}px`);
  // }, 1);

  // $('.more').click(function() {
  //   $(this).addClass('d-none');
  //   $('.less').removeClass('d-none');
  //   $('.category-body ul, .category-body .less').addClass('active');
  // });

  // $('.less').click(function() {
  //   $(this).addClass('d-none');
  //   $('.more').removeClass('d-none');
  //   $('.category-body ul, .category-body .less').removeClass('active');
  // });

  // const hostHref = `${window.location.protocol}/${window.location.hostname}`
  
  // if (pageUrl == hostHref) {
  //   $('.header-zone').addClass('active-home');
  // }
});