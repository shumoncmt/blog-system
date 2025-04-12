<!-- resources/js/Pages/CreatePost.vue -->
<template>
    <div>
        <h1>Create Post</h1>
        <form @submit.prevent="createPost">
            <input type="text" v-model="title" placeholder="Post Title" required />
            <textarea v-model="content" placeholder="Post Content" required></textarea>
            <button type="submit">Create Post</button>
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
    methods: {
        async createPost() {
            const response = await fetch('/api/posts', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    title: this.title,
                    content: this.content,
                }),
            });
            if (response.ok) {
                this.$router.push('/');
            } else {
                alert('Failed to create post');
            }
        },
    },
};
</script>

<style>
/* CreatePost styles */
</style>