



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


  $( document ).ready(function() {
  //   $.get("http://oursoil.esy.es/productsjson.php").done(function (data) {
  //     console.log(data);
  // });
  
    console.log( "ready!" );
    $(".search").keyup(function(){
      debugger
      var searchValue = this.value;
      console.log(searchValue);
    });


    $( document ).ready(function() {
      debugger;
    $.ajax({
      type:'GET',
      url: "http://oursoil.esy.es/productsjson.php",
      headers: {  'Access-Control-Allow-Origin': '*' },
      type: 'json',
    }).done(function(data){
      var myObj = data;
      var tmpData = JSON.parse(myObj);
      console.log(tmpData);
    });
  });


});



  

