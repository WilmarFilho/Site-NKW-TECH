<template>
        <label :class=classlabel> {{label}}</label>
        <input class='form-control disable' :type=type :value=value :placeholder=placeholder :name=name>
</template>

<script>
    export default {
        props: [
            'label', 'value', 'placeholder', 'classlabel', 'name', 'type'
        ]
    }
</script>
