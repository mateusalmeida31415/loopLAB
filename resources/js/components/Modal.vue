<template>
    <div class="modal" :id="id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark lead display-5">{{title}}</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-dark">
                    <div class="form-group">
                        <label for="contantName">Nome</label>
                        <input type="text" class="form-control" id="contantName">   
                    </div>

                    <div class="form-group">
                        <label for="contantEmail">Email</label>
                        <input type="email" class="form-control" id="contantEmail">
                    </div>

                    <div class="form-group">
                         <label for="contantMensagem">Mensagem</label>
                        <input type="text" class="form-control" id="contantMensagem"> 
                    </div>
                       
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-block btn-lg">Sumit</button>
                </div>
            </div>
        </div>
    </div>  
</template>

<script>
    export default {
        props: ['id', 'title']
    }
</script>