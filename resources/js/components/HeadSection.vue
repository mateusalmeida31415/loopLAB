<template>
    <!-- title: titulo do campo -->
    <!-- id: ID de referencia -->
    <!-- text: texto do campo -->
    <!-- btnText: texto do botão -->
    <section :id="id">
        <div class="container text-center py-5 ">
            <h2 class="display-4">{{title}}</h2>
            <p class="lead">{{text}}</p>
            <button class="btn btn-outline-light btn-lg">{{btnText}}</button>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['id', 'title', 'text', 'btnText']
    }
</script>