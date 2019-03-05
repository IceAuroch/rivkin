<template>
    <section class="margin_section articles_page_section">
        <div class="container">
            <div class="masonry_articles" ref="articles">
                <post v-if="posts.length" v-for="post in posts" :post="post" :key="post.id"/>
            </div>

            <div class="text-center" v-if="paged">
                <a href="#" class="btn btn-primary btn-loadmore" @click.prevent="getPosts">
                    <svg width="19" height="19">
                        <use xlink:href="#pen_icon"></use>
                    </svg>
                    More articles
                </a>
            </div>
        </div>
    </section>
</template>

<script>
  import axios from 'axios';
  import Post from './Post';
  import Masonry from 'masonry-layout';

  export default {
    props: {
      category: String
    },
    components: {
      Post
    },
    data() {
      return {
        paged: 1,
        posts: []
      }
    },
    methods: {
      async getPosts() {
        const data = new FormData();
        data.set('category', this.category);
        data.set('action', 'get_ajax_posts');
        data.set('paged', this.paged);

        await axios.post('/wp-admin/admin-ajax.php', data)
          .then(({data}) => {
            this.posts.push(...data.posts);
            this.paged = this.paged < data.last_page ? this.paged += 1 : null;
          })
          .then(() => {
            this.arangePosts();
          })
      },

      arangePosts() {
        const msrn = new Masonry(this.$refs.articles, {
          itemSelector: '.masonry_articles_item'
        });

        setTimeout(() => {
          msrn.layout();
        }, 50)
      }
    },
    mounted() {
      this.getPosts();
    }
  }
</script>