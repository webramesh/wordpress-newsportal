jQuery('.video_slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2
         
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1
        
        }
      }
     
    ]
  });


  jQuery('.photo_slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4
         
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        
        }
      }
     
    ]
  });


  jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
      var scroll = jQuery(window).scrollTop();
      if (scroll >= 200) {
        jQuery("header").addClass("sticky");
      } else {
        jQuery("header").removeClass("sticky");
      }
      if (scroll > 50) {
        jQuery(".scroll-to-top").fadeIn();
      } else {
        jQuery(".scroll-to-top").fadeOut();
      }
    });
    
  });





  var main = function() {
    jQuery('.ham_menu').click(function() {
        // jQuery("body").addClass("overlay");

        jQuery('.main_nav').animate({ left: '0px' }, 300);
        // jQuery('body').animate({ left: '250px' }, 300);
    });
    jQuery('.close_btn').click(function() {
        // jQuery("body").removeClass("overlay");

        jQuery('.main_nav').animate({ left: '-290px' }, 300);
        // jQuery('body').animate({ left: '0px' }, 300);

    });
};

jQuery(document).ready(main);




// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("header").style.top = "0";
//   } else {
//     document.getElementById("header").style.top = "-288px";
//   }
//   prevScrollpos = currentScrollPos;
// }




jQuery (function() { //run when the DOM is ready
    jQuery (".fresh").click(function() { //use a class, since your ID gets mangled
        jQuery (this).toggleClass("active"); //add the class to the clicked element
        jQuery ('.fresh_news').toggleClass("open");
    });
});







jQuery(document).ready(function() {
  jQuery(".main_nav ul li a").click(function() {
          var link = jQuery(this);
          var closest_ul = link.closest("ul");
          var parallel_active_links = closest_ul.find(".active")
          var closest_li = link.closest("li");
          var link_status = closest_li.hasClass("active");
          var count = 0;

          closest_ul.find("ul").slideUp(function() {
                  if (++count == closest_ul.find("ul").length)
                          parallel_active_links.removeClass("active");
          });

          if (!link_status) {
                  closest_li.children("ul").slideDown();
                  closest_li.addClass("active");
          }
  })
})




jQuery('.search-toggle').addClass('closed');

jQuery('.search-toggle .search-icon').click(function(e) {
    if (jQuery('.search-toggle').hasClass('closed')) {
        jQuery('.search-toggle').removeClass('closed').addClass('opened');
        jQuery('.search-toggle, .search-container').addClass('opened');
        jQuery('#search-terms').focus();
    } else {
        jQuery('.search-toggle').removeClass('opened').addClass('closed');
        jQuery('.search-toggle, .search-container').removeClass('opened');
    }
});



  /*
   * Light YouTube Embeds by @labnol
   * Credit: https://www.labnol.org/
   */

  function labnolIframe(div) {
    var iframe = document.createElement('iframe');
    iframe.setAttribute(
      'src',
      'https://www.youtube.com/embed/' + div.dataset.id + '?autoplay=1&rel=0'
    );
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allowfullscreen', '1');
    iframe.setAttribute(
      'allow',
      'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'
    );
    div.parentNode.replaceChild(iframe, div);
  }

  function initYouTubeVideos() {
    var playerElements = document.getElementsByClassName('youtube-player');
    for (var n = 0; n < playerElements.length; n++) {
      var videoId = playerElements[n].dataset.id;
      var div = document.createElement('div');
      div.setAttribute('data-id', videoId);
      var thumbNode = document.createElement('img');
      thumbNode.src = '//i.ytimg.com/vi/ID/hqdefault.jpg'.replace(
        'ID',
        videoId
      );
      div.appendChild(thumbNode);
      var playButton = document.createElement('div');
      playButton.setAttribute('class', 'play');
      div.appendChild(playButton);
      div.onclick = function () {
        labnolIframe(this);
      };
      playerElements[n].appendChild(div);
    }
  }

  document.addEventListener('DOMContentLoaded', initYouTubeVideos);