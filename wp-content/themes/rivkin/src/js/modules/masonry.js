import Masonry from 'masonry-layout';

if (document.querySelector('.masonry_wrap')) {
  var elem_masonry1 = document.querySelector('.masonry_wrap');

  new Masonry(elem_masonry1, {
    itemSelector: '.masonry_wrap_item'
  });
}
