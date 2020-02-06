<template>
    <b-container fluid style=" height: calc(100vh - 56px)">   
        <b-row class="h-100" no-gutters>
            <b-col cols="4 ">
                <contact-list-component v-on:conversationSelected="changeActiveConversation($event)">
                    
                </contact-list-component>
                <!--Obtenemos el evento emitido con v-on  de contactListComponent y obviamente le pasamos una funcion
                    llamada change ACtive Conversations y le pasamos el evento o los datos que vienen emitidos de la conversacion -->
            </b-col>
            <b-col cols="8">
               <active-conversation-component 
               v-if="selectedConversation"
               :contact-id="selectedConversation.contact_id"
               :contact-name="selectedConversation.contact_name">

               </active-conversation-component>
               <!--Pasamos los datos al componente activeConversationComponent.vue le pasamos el contact_id contact_name -->
               <!--con v-if validamos que  selectedConversation no sea igual a null-->
            </b-col>
        </b-row>
    </b-container>
</template>

<script>
    export default {
        
        data() {
            return{
                selectedConversation: null
            };
        },
        mounted(){
        },
        methods:{
            changeActiveConversation(conversation){
                //console.log('Nueva conversacion seleccionada',conversation);
                this.selectedConversation = conversation; // llenamos la variable que esta tipo null con los datos que vienen de contactListComponent en este caso el arreglo que trae la conversacion 
            }
        }
    }
</script>
