<template>
    <section class="container">
        <section class="hero-slider">
            <div class="hero-image-wrap">
                <figure class="">
                    <a :href="featuredPost.url"><img  :src="featuredPost.featured_image" :style="imageWidth" alt=""></a>
                </figure>
            </div>
            <div class="titles-column">
                <section v-for="post in sliderPosts" class="hero-card">
                    <a :href="post.url">
                        <h3 class="title is-3 tk-gineso" @keyup.tab="switchFeatured(post)" @mouseover="switchFeatured(post)">{{ post.title }}</h3>
                    </a>
                    <p class="tk-gineso hero-card-text">{{ post.featured_text }}</p>
                </section>
            </div>
        </section>
    </section>
</template>
<script>

    export default {
        name: 'app',
        data () {
            return {
                posts: [],
                featuredPost: [],
                imageWidth: {
                    width: '100%',
                    height: 'inherit'
                }
            }
        },
        computed: {
            sliderPosts () {
                return _.slice(this.posts, 0, 3);
            },
        },
        methods: {
            getPosts() {
                axios.get('/!/PHPtoVue/PostsRetrieve')
                .then(
                    res => {
                        for (let post of _.values(res.data) ) {
                            this.posts.push(post);
                        }
                        this.featuredPost = this.posts[0];
                    }
                );
            },
            displayPosts() {
                console.log(this.posts);
            },
            switchFeatured(post) {
                this.featuredPost = post;
            },

        },
        created() {
            this.getPosts();
        }
    }
</script>
<style>

</style>