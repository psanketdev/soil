



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
    $(".search").keyup(function(event){
      event.preventDefault;
      i=0;
      var searchValue = this.value.toUpperCase();
      console.log(searchValue);
      var productCategories = $(".product_card");
      console.log(searchValue.length);
     
      if( searchValue.length >= 3 ) {
        $.each(productCategories,function(index,value) {
          var $this = $(this).find('h4');
         console.log($this.text());
         if($this.text().toUpperCase().indexOf(searchValue) > -1) {
          $(this).css("display","block")
         }else {
           $(this).css("display","none");
         }
        })
        console.log(productCategories);
      }else {
        console.log("not ready");
        productCategories.css("display","block"); 
      }
     
     

    });


  //   $( document ).ready(function() {
  //     var i=0;
     
  //   $.ajax({
  //     type:'GET',
  //     url: "demo.json",
  //   }).done(function(data){
    
  //     var myData = data;
  //     console.log(myData);
  //     var $list = $('#category li');
  //     $.each(myData[i],function(index,value){
  //       var Category =myData[i].Category;
  //       var $anchor = $list.append('<a href="#">'+ Category+'</a>')
  //       i++;
        
  //     })
      
     
  //   });
  // });

    $(document).ready(function(){
      var slider=$("#formControlRange");
      var rangeText=$(".rangeValueText");
      slider.on('input',function(){
        console.log($(this).val());
        rangeText.text() = $(this).val($(this).val().substr(0, limit));
        console.log(rangeText)
      })
    })

    $(document).ready(function(){
     var product_card = $(".product_card")

      $.each(product_card,function(index,value){

        var cost = $(this).find("input.hidden_price_cost").val();
        var oldCost =  $(this).find("input.hidden_price_old").val();
        console.log(cost);
        console.log(oldCost);
      })

});

});

  

