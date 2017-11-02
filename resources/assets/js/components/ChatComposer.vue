<template>
    <section>
        <textarea name="" id="" v-model="text" @keyup.enter="addMessage" class="form-control"></textarea>
        <button type="submit" @click="addMessage"  class="btn btn-primary">Post</button>
    </section>
</template>
<script >
    export default {
        data(){
            return{
                text:'',

            }
        },
        methods:{
            addMessage(){
                axios.post('/chat',{text:this.text})
                    .then(response=>{
                        this.$emit('sentMessage',{
                            text:response.config.data,
                        });
                    });

                this.text= '';
            }
        },


    }
</script>
<style>

</style>