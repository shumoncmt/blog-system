<!-- resources/js/Components/Navbar.vue -->
<template>
    <nav>
        <router-link to="/">Home</router-link>
        <router-link to="/login">Login</router-link>
        <router-link to="/register">Register</router-link>
        <router-link to="/profile">Profile</router-link>
    </nav>
</template>

<script>
export default {
    name: 'Navbar',
};
</script>

<style>
/* Navbar styles */
</style>