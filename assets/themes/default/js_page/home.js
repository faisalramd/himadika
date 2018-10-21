$(document).ready(function() {
	var location = "http://localhost/himadika/assets/themes/default/img/"
  var imagecollection = [
    {
      src: location+'bg-banner02.jpg'
    },
    {
      src: location+'banner.jpg'
    },
    {
      src: location+'blog01.jpg'
    }
    /* Slideshow not working? Check your image links. */
  ];

  $(".header").vegas({
    slides: imagecollection,
    transition: 'fade',
    preloadImage: true,
    timer: true,
    shuffle: true,
    delay: 10000,
    animation: 'kenburns',
    cover: true,
    overlay: location+'02.png'
  });
});