<template>
     <b-row class="h-100">
        <b-col cols="8">
            <b-card
              footer="Card Footer"
              footer-tag="footer"
              footer-bg-variant="light"
              footer-border-variant="dark"
              title="Conversacion activa"
              class="h-100"
            >
            <message-conversation-component v-for="message in messages" :key="message.id" :written-by-me="message.written_by_me">
              {{message.content}}
            </message-conversation-component>
            
              <div slot="footer">
                  <b-form  class="mb-0" @submit.prevent="postMessage" autocomplete="off">
                        <!--@submit.prevent="postMessage" de este modo  hacemos un submit a  nuestra funcion postMessage y hacemos el prevent para  obviamente prevenir el envio del form -->
                       <b-input-group>

                        <b-form-input type="text" placeholder="Escribe un mensaje"
                        v-model="newMessage"></b-form-input>
                        <!--asignamos valor a la  variable newMessage y ese valor se va enviar por post -->
                        <b-input-group-append>
                          <b-button type="submit" variant="primary">Enviar</b-button>
                        </b-input-group-append>
                      </b-input-group>
                  </b-form>
              </div>
            </b-card>
        </b-col>
        <b-col  cols="4">
            <b-img  rounded="circle" alt="Circle image" width="48" height="48" blank-color="#777" class="m-1">
              
            </b-img>
            <p>Usuario seleccionado: {{ contactName }}</p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>

        </b-col>
    </b-row>
</template>

<script>
    export default {
       props:{ //propirdades  aqui definimos los tipos de propiedades que vienen a nuestro componente
        /*en este caso tenemos  una propiedad de  tipo numero y otra string podemos definir propiedades de manera booleana tambien osea true y false para hacer validaciones en nuestro componentes */
        /*estas propiedades vienen emitias del contactListComponent*/
        contactId: Number,
        contactName: String
       },
        data() { // la data que podemos retornar en este caso son variables a las que le podemos agregar valores
          return {
            messages: [],
            newMessage:'',
          }
        },
        mounted(){ // este metodo se  ejecuta una ves el componente es cargado en la vista
          this.getMessages(); // obtenemos el metodo de  getmessages o la funcion que obtendra los mensajes
        },
        methods:{ // metodos o funciones que ejecutamos casi igual que POO 
          getMessages(){
            axios.get(`/api/messages?contact_id=${this.contactId}`)
              .then((response)=> {
                this.messages = response.data;
              });
          },
          postMessage(){
            const params = {
              to_id:this.contactId,
              content:this.newMessage

            };
            axios.post('/api/messages',params)
              .then((response)=> {
                if (response.data.success) {
                  this.newMessage='';
                  this.getMessages();
                }else{

                }
            });
          }
        },
        watch:{
          // contiene metodos este objeto y se carga luego de todo
          //estos metodos se activan cuando existen un nuevo valor es decir cuando obtiene el mismo valor este metodo no se va a  activar hasta que ese valor sea diferente del actual 
          contactId(value){
            //console.log(`contactID => ${this.contactId}`);
            this.getMessages();
          }

        }
    }
</script>
