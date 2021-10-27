<template>
    <!-- Title: Titulo do form -->
    <!-- Subtitle: Subtitulo do form -->
    <!-- Inputs: obj com dois atributos type (tipo do formulário) e placeholder (texto do placeholder) -->

    <div class="card bg-primary text-white w-50 text-center card-form w-100">
        <div class="card-body">
            <h3 class="card-title">{{title}}</h3>
            <p class="card-text">{{subtitle}}</p>
            <div v-for="input, key in inputs" :key="key">
                <div class="form-group">
                    <input :type="input.type" class="form-control form-control-lg" :placeholder="input.placeholder">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-light btn-block btn-lg" @click="registrar()">Cadastrar</button>
            <!-- Fim card formulario -->
        </div>
    </div>
</template>

<script>
    export default {
        props: ['title', 'subtitle', 'inputs'],
        methods:{   
            registrar(){
                alert('Usuário cadastrado!')
            }
        }
    }
</script>