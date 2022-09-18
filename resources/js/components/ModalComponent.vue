<template>
   <div class="modal fade" :id=id tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               
                <div class="modal-header">
                    <h5 class="modal-title" id="label-modal">{{titulo}}</h5>  
                </div>

                <div class="modal-body text-center">
                   <slot></slot>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fechar</button>
                </div>
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        mounted() {
            $(document).ready(() => {
                $('#modal-feedback').modal('show');
            })   
        },

        props: [
            'titulo', 'id'
        ]
             
    }
</script>
