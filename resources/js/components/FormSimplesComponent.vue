<template>
    <form :class=classform :action=route method="POST" :enctype=enctype>
        <label :class=classlabel>{{label}}</label>
        <div class='input-group'>
            <input type="hidden" name="_token" :value="token_csrf">
            <slot></slot>
            <button type='submit' :class=classbtn>{{labelbtn}} <i :class=ibtn></i> </button>
        </div>
    </form>
</template>
<script>
    export default {
        props: ['token_csrf', 'label',  'labelbtn', 'ibtn', 'classlabel', 'classbtn', 'classform', 'route', 'enctype']
    }
</script>
