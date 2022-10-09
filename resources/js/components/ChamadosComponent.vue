<template>
    <div class="card text-white my-4" :id=id>
        <slot name="tipo"></slot>
        <slot name="data"></slot>
        <div class="card-body">
            <slot name='usuario'></slot>
            <slot name='descricao'></slot>
               
            <div class='row'>
                <div class='col-6'>
                    <slot name='button'></slot>
                    <a type="button" data-toggle='modal' :data-target=modalId class='ms-3 btn btn-outline-danger btn-lg'><i class="fa-regular fa-trash-can"></i></a>
                </div>
                <div class='col-6'>
                    <a class='btn btn-sm ml-5' :class="statusClass"  style='margin-left: 80%;' >{{status}}</a>
                </div>
                
            </div>
        </div>
    </div>
    
</template>

<script>
    export default {

       

        props: [
            'tipo','status', 'id', 'data'
        ],

        computed: {
            statusClass() {
                if(this.status == 'Pendente') {
                   return 'btn-warning' 
                }
                if(this.status == 'Andamento') {
                    return 'btn-info'
                }
                if(this.status == 'Finalizado') {
                    return 'btn-success' 
                }
            },

            modalId() {
                return '#chamado_' + this.id;
            }

        }
        
    }
</script>
