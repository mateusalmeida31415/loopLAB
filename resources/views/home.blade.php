@extends('layouts.app')

@section('content')
    {{-- Barra de navegação --}}
    <navbar-component 
    title="LoopLAB"
    :itens="[
        {'item': 'home', 'id': '#home-section'}, 
        {'item': 'explore', 'id': '#explore-head-section'}, 
        {'item': 'create', 'id': '#create-head-section'}, 
        {'item': 'share', 'id': '#share-head-section'}]">
    </navbar-component>
    
    {{-- Home section --}}
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

    {{-- Explore head section --}}
    <head-section-component 
        title="Explore"
        id="explore-head-section"
        text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium deserunt reprehenderit sunt minus."
        btn-text="Find Out More">
    </head-section-component>

    {{-- Explore body section --}}
    <body-section-component
        id="explore-section" 
        title="Explore & Connect"
        text="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid tempore perspiciatis repudiandae hic?"
        image="/img/explore-section1.jpg"
        order="normal">

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

    </body-section-component>

    {{-- Create head section --}}
    <head-section-component 
        title="Create"
        id="create-head-section"
        text="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente doloribus ut iure itaque quibusdam rem accusantium deserunt reprehenderit sunt minus."
        btn-text="Find Out More">
    </head-section-component>

    {{-- Create body section --}}
    <body-section-component
    id="create-section" 
    title="Create Your Passion"
    text="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore reiciendis, voluptate at alias laborum odit aliquid tempore perspiciatis repudiandae hic?"
    image="/img/create-section1.jpg"
    order="reverse">

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

    </body-section-component>
@endsection
