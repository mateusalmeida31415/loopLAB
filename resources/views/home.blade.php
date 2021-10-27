@extends('layouts.app')

@section('content')
    <navbar-component 
    title="LoopLAB"
    :itens="[
        {'item': 'home', 'id': '#home-section'}, 
        {'item': 'explore', 'id': '#explore-head-section'}, 
        {'item': 'create', 'id': '#create-head-section'}, 
        {'item': 'share', 'id': '#share-head-section'}]">
    </navbar-component>
    
    <home-section-component 
        id="home-section" 
        title="Build social profiles and gain revenue profits">

        <template v-slot:first>
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
        </template>

        <template v-slot:second>
            <!-- Inicio card formulario -->
            <form-home-section-component
                    title="Sign Up Today"
                    subtitle="Please fill out this form to register"
                    :inputs="[{'type': 'text', 'placeholder': 'Nome do usuário'},
                              {'type': 'email', 'placeholder': 'E-mail'},
                              {'type': 'password', 'placeholder': 'Senha'},
                              {'type': 'password', 'placeholder': 'Confirmar senha'}]">

            </form-home-section-component>
            <!-- Fim card formulario -->
        </template>

    </home-section-component>

    <explore-head-section-component 
        title="Explore"
        id="explore-head-section"
        text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium deserunt reprehenderit sunt minus."
        btn-text="Find Out More">

    </explore-head-section-component>

    <explore-body-section-component
        id="explore-section" 
        title="Explore & Connect"
        text="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid tempore perspiciatis repudiandae hic?"
        image="/img/explore-section1.jpg">

        <template v-slot:second>
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
        <template>

    </explore-body-section-component>
@endsection
