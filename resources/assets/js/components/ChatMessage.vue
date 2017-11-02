<template>
    <section>
        <div class="card ">
            <div class="card-header">
                {{message.user.name}}
            </div>
            <div class="card-block">
                <p class="card-text">{{message.text}}</p>

            </div>
            <div class="card-footer text-muted">
                {{message.created_at}}
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        props:{
            message:{
                type:Object,
            },

        },



    }
</script>
<style>
    
</style>