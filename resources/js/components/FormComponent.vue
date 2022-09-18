<template>
                    <form method="POST" action='/chamado'>
                        <input type="hidden" name="_token" :value="token_csrf">

                        <label class="label-form"> Selecione o tipo do chamado</label>
                        <select class="form-control" name='tipo_serviço'>
                            <option>Assistencia tecnica</option>
                            <option>Formatação</option>
                            <option>Outros</option>
                        </select>

                        <label class="label-form">Descreva o serviço desejado</label>
                        <textarea class="form-control" name='descricao' placeholder="Coloque a descrição do seu chamado">

                        </textarea>

                        <label class="label-form">Se necessario encaminhe uma foto aqui </label>
                        <small>Campo não obrigatorio</small>
                        
                        <input class="form-control" type="file" id="img_descricao" name="img_descricao">
                       

                        <button  type="submit" class="btn btn-outline-success mt-4">Enviar</button>





                    </form>
</template>

<script>
    export default {
        props: ['token_csrf']
    }
</script>
