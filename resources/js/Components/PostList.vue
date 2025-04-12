<!-- resources/js/Components/PostList.vue -->
<template>
    <div>
        <div v-for="post in posts" :key="post.id">
            <h2>{{ post.title }}</h2>
            <p>{{ post.content }}</p>
            <router-link :to="`/posts/${post.id}`">Read More</router-link>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        posts: Array,
    },
};
</script>