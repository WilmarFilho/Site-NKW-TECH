<template>
                    <form method="POST" :action=rota enctype="multipart/form-data">
                        <input type="hidden" name="_token" :value="token_csrf">

                        <label class="label-formulario"> Selecione o tipo do chamado</label>
                        <select class="form-control" name='tipo_serviço'>
                            <option value="">Escolha um tipo </option>
                            <option>Assistencia tecnica</option>
                            <option>Formatação</option>
                            <option>Outros</option>
                        </select>

                        <label class="label-formulario">Descreva o serviço desejado</label>
                        <textarea class="form-control" name='descricao' placeholder="Coloque a descrição do seu chamado">

                        </textarea>

                        <label class="label-formulario">Se necessario encaminhe uma foto aqui </label><br>
                        <small class='text-white'>Campo não obrigatorio</small>
                        
                        <input class="form-control" type="file" id="img_descricao" name="img_descricao">
                       

                        <slot></slot>

                        <button  type="submit" class="btn btn-success mt-3">Enviar chamado</button>>




                    </form>
</template>

<script>
    export default {
        props: ['token_csrf', 'rota']
    }
</script>
