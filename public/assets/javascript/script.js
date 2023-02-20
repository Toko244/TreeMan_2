$(window).scroll(function(){
  if ($(this).scrollTop() > 800) {
     $('#guideline').addClass('guid-on');
  } else {
     $('#guideline').removeClass('guid-on');
  }
});

setTimeout(function() {
  $('.contact-alert-message').addClass('none');
}, 3000);

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
$('.testimonial-slider').slick({
dots: false,
arrows:false,
slidesToShow: 4,
slidesToScroll: 1,
infinite: true,
speed: 500,
responsive: [
  {
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 1,
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
  },
  {
    breakpoint: 576,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
]
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

$('.post-row-slider').slick({
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

$(document).ready(function(){
  $(function() {                     
    $(".guidline-icon").click(function() {  
      $(".fixed-guidline").toggleClass("active");     
    });
  });
  $('#nav-icon3').click(function(){
      $(this).toggleClass('open');
  });

  $( "#nav-icon3" ).click(function() {
      $( ".burgermenu" ).toggleClass( "open" );
    });

    
$( ".icon-right-arrow" ).click(function() {
  $(this).parent().toggleClass( "sub-open" );
});
});

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}
