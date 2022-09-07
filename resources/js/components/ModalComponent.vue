<template>
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo chamado</h5>
                 
                </div>

                <div class="modal-body">
                    <form method="post" action="{{route('chamado.store')}}">

                        <label> Selecione o tipo do chamado</label>
                        <select class="form-control">
                            <option>A</option>
                            <option>A</option>
                            <option>A</option>
                        </select>

                        <label>Descreva o serviço desejado</label>
                        <textarea class="form-control" placeholder="Coloque a descrição do seu chamado">

                        </textarea>

                        <label>Se necessario anexe até uma foto aqui </label>
                        
                        <input type="file" id="myfile" name="img">





                    </form>
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
         
        }
    }
</script>
