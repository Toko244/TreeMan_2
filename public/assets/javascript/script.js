$('.home-slider').slick({
  dots: false,
  arrows:false,
  infinite: true,
  autoplay:true,
});
$('.image-slider').slick({
  dots: false,
  arrows:false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});
$('.post-slider').slick({
dots: false,
arrows:false,
infinite: true,
slidesToShow: 4,
speed: 500,
prevArrow: $('.prev'),
nextArrow: $('.next'),
responsive: [
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      infinite: true,
    }
  },
  {
    breakpoint: 992,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1
    }
  }
]
});
$('.post_row').slick({
  dots: false,
  arrows:false,
  slidesToShow: 5,
  slidesToScroll: 1,
  infinite: true,
  autoplay:true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]
});
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}