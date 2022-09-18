<template>
    <div class="card text-white my-5" :id=id>
        <h5 class="card-header text-center titulo-chamado">{{tipo}}</h5>
        <slot name="data"></slot>
        <div class="card-body">
            <slot name='descricao'></slot>
               
            <div class='row'>
                <div class='col-6'>
                    <slot name='button'></slot>
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
            }
        }
        
    }
</script>
