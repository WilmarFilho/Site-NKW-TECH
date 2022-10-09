<template>
            <div id='topo' class="d-flex justify-content-center ">
				<div id='conteudo-topo' class="align-self-center text-center">
					<div >
                        <h2  class=' h2-topo '>{{titulo}}</h2>
                    </div>
                        
                    <div class='mt-5' id='textos'>
                        <i class="fa-solid fa-laptop-code icon text-danger" style='font-size: 6em;'></i>
                        <h3>NKW</h3>
                        <h4>Tech</h4>
                    </div>   	
				</div>
			</div>
</template>

<script>
    export default {
        mounted() {
            $(document).ready(() => {
                $('#conteudo-topo').fadeIn(2500)
            })
        },

        props: [
            'titulo'
        ]

    }
</script>
