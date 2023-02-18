<template>

        <div class='mb-2'>
           
           <h2 class='h2-montagem text-center'>{{titulo}}</h2>
           <h4 class='h4-montagem text-center'>{{subtitulo}}</h4>
           
        </div>

        <form class='text-center row' method='GET' :action=rota>
                
            <div class='col-md-6 col-12 mt-3'>

                <label class='label-montagem mb-3'>Selecione um modelo abaixo :</label>
                
                <slot></slot>

                <div id='descricao' class='mt-4' style='display: none;'>

                    
                    <table class="table text-white ">
                        <tbody>
                            <tr id='rowMarca'>
                                <th scope="row">Marca:</th>
                                <td id='marca'></td>
                            </tr>
                            <tr id='rowModelo' >
                                <th scope="row">Modelo:</th>
                                <td id='modelo'></td>
                            </tr>
                            <tr id='rowGeracao'>
                                <th scope="row">Geração:</th>
                                <td id='geracao'></td>
                            </tr>
                            <tr id='rowFrequenciaR'>
                                <th scope="row">Frequência:</th>
                                <td id='frequencia'></td>
                            </tr>
                            <tr id='rowRamvideo'>
                                <th scope="row">Memória:</th>
                                <td id='memoria'></td>
                            </tr>
                            <tr id='rowCapacidade'>
                                <th scope="row">Capacidade:</th>
                                <td id='capacidade'></td>
                            </tr>
                            <tr id='rowPotencia'>
                                <th scope="row">Potência:</th>
                                <td id='potencia'></td>
                            </tr>
                        </tbody>
                    </table>

                    <p id='resumo' class="p-montagem mt-4"></p>

                </div>

            </div>

            <div class='col-md-6 col-12 mt-3'>

                <img class='img-fluid' id='foto' src=''>

            </div>
              
            <button type='submit' class='btn btn-danger mt-4'>Avançar</button>

        </form>

</template>

<script>
    export default {
        
        props: [
            'titulo', 'subtitulo','rota'
        ],
    }
</script>
