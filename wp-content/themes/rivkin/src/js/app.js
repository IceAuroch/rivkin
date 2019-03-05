require('./bootstrap');

import Vue from 'vue';
import Posts from './components/Posts'

new Vue({
  el: '#app',
  components: {
    Posts
  },
  mounted() {
    require('./modules/main');
    require('./modules/slider');
    require('./modules/animate');
    require('./modules/masonry');
  }
});