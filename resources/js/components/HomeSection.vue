<template>
    <header :id="id">
        <div class="dark-overlay">
            <div class="home-inner container d-flex align-items-center h-100">
                <!-- Inicio Primeira coluna -->
                <div class="col-lg-8 d-lg-block d-none">
                    <h1 class="display-4">Build social profiles and gain revenue profits</h1>
                    <div class="d-flex">
                        <div class="align-self-start p-4">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="align-self-end p-4 lead">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime accusantium veritatis 
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="align-self-start p-4">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="align-self-end p-4 lead">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime accusantium veritatis 
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="align-self-start p-4">
                            <i class="fas fa-check fa-2x"></i>
                        </div>
                        <div class="align-self-end p-4 lead">
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime accusantium veritatis 
                        </div>
                    </div>
                </div>
                <!-- Fim Primeira coluna -->

                <!-- Inicio Segunda coluna -->
                <div class="col-lg-4">
                    <!-- Inicio card formulario -->
                    <div class="card bg-primary text-white w-50 text-center card-form w-100">
                        <div class="card-body">
                            <h3 class="card-title">Sign Up Today</h3>
                            <p class="card-text">Please fill out this form to register</p>
                            <div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Nome do usuário">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="E-mail">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Senha">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Confirmar senha">
                                </div>
                            
                                <button type="submit" class="btn btn-outline-light btn-block btn-lg">Cadastrar</button>
                            </div>
                            <!-- Fim card formulario -->
                        </div>
                    </div>
                    <!-- Fim card formulario -->
                </div>
                <!-- Fim Segunda coluna -->
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        props: ['id']
    }
</script>