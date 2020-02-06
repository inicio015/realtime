<template>
    <div>
        <b-form  class="my-3 mx-2">
            <b-form-input 
            type="text"
            placeholder="Buscar  Contacto ..."
            class="text-center"

            >
            </b-form-input>
        </b-form>
        <b-list-group>
          
          <!--enviamos variante al componente-->
         
              <contact-component  v-for="conversation in conversations" 
                :key="conversation.id"
                :conversation="conversation"
                @click.native="selectConversation(conversation)">
                  
              </contact-component>
  
              <!--contact-component variante="dark">
                  
              </contact-component> 
              <contact-component>
                  
              </contact-component>
              <contact-component variante="secondary">
                  
              </contact-component-->
              
        </b-list-group>
    </div>
</template>

<script>
    export default {
       
        data() {
          return {
            conversations :[]
          };
        },
        mounted(){
          this.getConversations();
        },
        methods:{
          getConversations(){
            axios.get('/api/conversations')
            .then((response)=>{
               this.conversations = response.data;
            });
          },
          selectConversation(conversation){
            //console.log(conversation);
            this.$emit('conversationSelected',conversation); //emitimos un evento a otra vista es decir pasamos los datos de un evento hacia otro componente que obtendra  estos  datos mediante el metodo click
          }
        }
    }
</script>
