$(function () {
  
  // function for fixed header
  $(window).on('scroll', function () {
    $('header').toggleClass('stickey', window.scrollY > 0);
  });


$('.card-group').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: true,
   responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 2,
          autoplay: false,
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          slidesToShow: 1,
        }
      }
    ]
});
  
  $('.error-text').hide();
  $('input.form-control').blur(function () {
    $(this).parent().find('.error-text').show();
  });
  
});

  // fliters
  $(document).ready(function () {
    $('ul.checkbox_list').find('input[type="checkbox"]').click(function () {
      if (('ul.checkbox_list li input[type="chechbox"]:checked').length > 0) {
        $('.products-card li').hide();
      }
    });
  })




  
