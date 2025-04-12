<!-- resources/js/Components/NotificationList.vue -->
<template>
    <div>
        <h2>Notifications</h2>
        <ul>
            <li v-for="notification in notifications" :key="notification.id">
                {{ notification.message }} - {{ notification.created_at }}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            notifications: [],
        };
    },
    mounted() {
        this.fetchNotifications();
    },
    methods: {
        async fetchNotifications() {
            const response = await fetch('/api/notifications');
            this.notifications = await response.json();
        },
    },
};
</script>

<style>
/* NotificationList styles */
</style>