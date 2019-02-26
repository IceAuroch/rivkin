import Masonry from 'masonry-layout';


var elem_masonry1 = document.querySelector('.masonry_wrap');

var msnry = new Masonry( elem_masonry1, {
  // options
  itemSelector: '.masonty_wrap_item'
});


var elem_masonry2 = document.querySelector('.masonry_articles');

var msnry = new Masonry( elem_masonry2, {
  // options
  itemSelector: '.masonry_articles_item'
});