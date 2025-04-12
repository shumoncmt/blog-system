<!-- resources/js/Pages/Post.vue -->
<template>
    <div>
        <h1>{{ post.title }}</h1>
        <p>{{ post.content }}</p>
        <CommentSection :postId="post.id" />
    </div>
</template>

<script>
import CommentSection from '../Components/CommentSection.vue';

export default {
    components: {
        CommentSection,
    },
    data() {
        return {
            post: {}, // Fetch post from the server
        };
    },
    mounted() {
        // Fetch post details from the API
    },
};
</script>