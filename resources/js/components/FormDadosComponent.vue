<template>
    <form :action=route method='POST' class='text-center'>
        <input type="hidden" name="_token" :value="token_csrf">       
        <slot name="campo1"></slot>

        <slot name="campo2"></slot>

        <slot name="campo3"></slot>

        <slot name="campo4"></slot>
        
        <button type='submit' class='btn btn-danger mt-3'>{{labelbtn}}</button>
    </form>
</template>

<script>
    export default {
        props: ['labelbtn', 'route', 'token_csrf']
    }
</script>
