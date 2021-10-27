<template>
    <section :id="id" class="bg-light text-secondary py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5" :class="ordem()">
                    <img :src="image" alt="" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-6">
                    <h3 class="display-5">{{title}}</h3>
                    <p class="lead">{{text}}</p>
                    <slot name="second"></slot>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['id', 'title', 'text', 'image', 'order'],
        methods:{
            ordem(){
                if(this.order == 'reverse'){
                    return 'order-2'
                }

                return ''
            }
        }
    }

</script>