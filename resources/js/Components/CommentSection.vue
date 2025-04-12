<!-- resources/js/Components/CommentSection.vue -->
<template>
    <div>
        <h3>Comments</h3>
        <div v-for="comment in comments" :key="comment.id">
            <p>{{ comment.content }}</p>
        </div>
        <textarea v-model="newComment" placeholder="Add a comment..."></textarea>
        <button @click="addComment">Submit</button>
    </div>
</template>

<script>
export default {
    props: {
        postId: Number,
    },
    data() {
        return {
            comments: [], // Fetch comments from the server
            newComment: '',
        };
    },
    methods: {
        addComment() {
            // Logic to add a new comment
        },
    },
    mounted() {
        // Fetch comments from the API
    },
};
</script>