<template>
    <!-- Dois slot parte direita slot first e slot second -->
    <!-- Duas variavels title: titulo principal; id: id do container -->

    <header :id="id">
        <div class="dark-overlay">
            <div class="home-inner container d-flex align-items-center h-100">
                <!-- Inicio Primeira coluna -->
                <div class="col-lg-8 d-lg-block d-none">
                    <!-- Titulo principal -->
                    <h1 class="display-4">{{title}}</h1>
                    <slot name="first"></slot>
                </div>
                <!-- Fim Primeira coluna -->

                <!-- Inicio Segunda coluna -->
                <div class="col-lg-4">
                    <slot name="second"></slot>
                </div>
                <!-- Fim Segunda coluna -->
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        props: ['id', 'title']
    }
</script>