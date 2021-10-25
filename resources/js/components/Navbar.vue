<template> 
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3 fixed-top" id="navegacao">
        <div class="container">
            <a class="navbar-brand" href="#">{{title}}</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" v-for="item, key in itens" :key="key">
                        <a class="nav-link text-capitalize" :href="item.id">{{item.item}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        //Title: Nome da marca
        //itens(obj) [item](Nome do item) e [id](ID de referencia da section)
        props: ['title', 'itens']
    }
</script>