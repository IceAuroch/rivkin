import Masonry from 'masonry-layout';

if($('.masonry_wrap').length) {
  var elem_masonry1 = document.querySelector('.masonry_wrap');

  var msnry = new Masonry( elem_masonry1, {
    // options
    itemSelector: '.masonty_wrap_item'
  });
}

if($('.masonry_articles').length) {
  var elem_masonry2 = document.querySelector('.masonry_articles');

  var msnry = new Masonry( elem_masonry2, {
    // options
    itemSelector: '.masonry_articles_item'
  });
}


