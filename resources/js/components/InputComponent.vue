<template>
        <label :class=classlabel> {{label}}</label>
        <input class='form-control disable' type='text' :value=value :placeholder=placeholder :name=name>
</template>

<script>
    export default {
        props: [
            'label', 'value', 'placeholder', 'classlabel', 'name'
        ]
    }
</script>
