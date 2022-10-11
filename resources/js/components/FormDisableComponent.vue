<template>
    <form>
        <fieldset disabled>
            <div class='row'>
                <div class='col-md-5 col-10'>
                    <slot name="campo1"></slot>
                </div>
                <div class='col-md-5 col-10'>
                    <slot name="campo2"></slot>
                </div>
                <div class='col-md-5 col-10'>
                    <slot name="campo3"></slot>
                </div>
            </div>
        </fieldset>
    </form>
</template>

<script>
    export default {
        props: [
            
        ]
    }
  
</script>
