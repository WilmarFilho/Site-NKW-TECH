<template>
   <div class="modal fade" :id=modalid tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               
                <div class="modal-header">
                    <h5 class="modal-title" id="label-modal">{{titulo}}</h5>  
                </div>

                <div class="modal-body text-center">
                   <slot></slot>
                </div>

                <div class="modal-footer">
                    <button type="button"   class="btn"  :class=botao  data-dismiss="modal">Fechar</button>
                </div>
                {{erro}}
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        mounted() {
            $(document).ready(() => {
                if(this.erro ==! '[]') {
                    $('#chamado_erro').modal('show')
                    console.log(this.erro)
                }
            })
            console.log(this.erro)
        },

        props: [
            'titulo', 'id','botao', 'erro'
        ],

        computed: {

            modalid() {
                return 'chamado_' + this.id
            },

        }
             
    }
</script>
