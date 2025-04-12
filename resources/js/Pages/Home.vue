<!-- resources/js/Pages/Home.vue -->
<template>
    <div>
        <h1>Welcome to the Blog</h1>
        <PostList :posts="posts" />
    </div>
</template>

<script>
import PostList from '../Components/PostList.vue';

export default {
    components: {
        PostList,
    },
    data() {
        return {
            posts: [], // Fetch posts from the server
        };
    },
    mounted() {
        // Fetch posts from the API
        this.fetchPosts();
    },
    methods: {
        async fetchPosts() {
            const response = await fetch('/api/posts'); // Adjust the API endpoint as needed
            this.posts = await response.json();
        },
    },
};
</script>

<style>
/* Home styles */
</style>