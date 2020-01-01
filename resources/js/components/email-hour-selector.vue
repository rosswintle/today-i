<template>
    <form :action="action" method="POST">
        <select name="hour" v-model="hour">
            <option v-for="thisHour in 24" :value="thisHour - 1">{{ thisHour - 1 }}</option>
        </select>
    </form>
</template>

<script>
    export default {
        data: function() {
            return {
                action: this.initialAction,
                hour: this.initialHour,
            }
        },
        props: [
            'initialAction',
            'initialHour'
        ],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
