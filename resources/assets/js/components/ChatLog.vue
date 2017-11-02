<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chat </div>

                    <div class="panel-body">
                        <chat-message  :message="message" v-for="message in messages" ></chat-message>
                        <div v-show="messages.length === 0">
                            No message
                        </div>
                        <chat-composer  @sentMessage="getMessage"></chat-composer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{


            }
        },
        props:[
            'current_user',
            'messages'
        ],
        methods:{
            getMessage(message){
                console.log(message);


                this.messages.push({
                    text:message.text,
                    user:this.current_user,
                });
            }
        },


        /*created(){
            axios.get('/chat').then(response=>{
                console.log(response);
            });
        }*/


    }
</script>
