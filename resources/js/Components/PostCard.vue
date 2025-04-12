<!-- resources/js/Components/PostCard.vue -->
<template>
    <div class="post-card">
        <h3>{{ post.title }}</h3>
        <p>{{ post.content.substring(0, 100) }}...</p>
        <router-link :to="`/posts/${post.id}`">Read More</router-link>
    </div>
</template>

<script>
export default {
    props: {
        post: Object,
    },
};
</script>

<style>
.post-card {
    border: 1px solid #ccc;
    padding: 1rem;
    margin: 1rem 0;
}
</style>