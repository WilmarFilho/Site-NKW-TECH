<template>
            <div id='topo' class="d-flex justify-content-center ">
				<div id='conteudo-topo' class="align-self-center text-center">
					<div >
                        <h2  class=' h2-topo '>{{titulo}}</h2>
                    </div>
                        
                    <div class='mt-1 text-center' id='textos'>
                        <i class="fa-solid fa-laptop-code icon text-danger" style="font-size: 6em;"></i>
                        <h3 class="h3-intro">NKW</h3>
                        <h4 class="h4-intro">Tech</h4>
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
