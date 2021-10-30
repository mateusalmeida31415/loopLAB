<template>
    <div class="container text-center py-4">
        <h3>{{title}}</h3>
        <p class="d-block py-1">{{text}}</p>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: ['title', 'text']
    }
</script>