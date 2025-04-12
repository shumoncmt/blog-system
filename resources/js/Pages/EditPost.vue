<!-- resources/js/Pages/EditPost.vue -->
<template>
    <div>
        <h1>Edit Post</h1>
        <form @submit.prevent="updatePost">
            <input type="text" v-model="title" placeholder="Post Title" required />
            <textarea v-model="content" placeholder="Post Content" required></textarea>
            <button type="submit">Update Post</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: '',
            content: '',
        };
    },
    mounted() {
        this.fetchPost();
    },
    methods: {
        async fetchPost() {
            const response = await fetch(`/api/posts/${this.$route.params.id}`);
            const post = await response.json();
            this.title = post.title;
            this.content = post.content;
        },
        async updatePost() {
            const response = await fetch(`/api/posts/${this.$route.params.id}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    title: this.title,
                    content: this.content,
                }),
            });
            if (response.ok) {
                this.$router.push(`/posts/${this.$route.params.id}`);
            } else {
                alert('Failed to update post');
            }
        },
    },
};
</script>

<style>
/* EditPost styles */
</style>