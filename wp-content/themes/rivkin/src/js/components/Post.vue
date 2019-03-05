<template>
    <div class="masonry_articles_item">
        <div class="articles_item">
            <div class="articles_item_img" v-if="post.image">
                <a :href="post.permalink">
                    <img :src="post.image" :alt="post.title">
                </a>
            </div>

            <div class="articles_item_content">
                <h4>{{ post.post_title }}</h4>
                <span>Posted on {{ post.posted_at }}</span>
                <p v-if="post.description !== ''">{{ post.description }}</p>
                <div class="articles_item_link text-right">
                    <a :href="post.permalink">More info</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      post: Object
    }
  }
</script>