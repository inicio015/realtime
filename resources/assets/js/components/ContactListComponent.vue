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
              <contact-component variante="dark">
                  
              </contact-component> <!--enviamos variante al componente-->
              <contact-component>
                  
              </contact-component>
              <contact-component variante="secondary">
                  
              </contact-component>
              
        </b-list-group>
    </div>
</template>

<script>
    export default {
       
         data() {
          return {
            name: 'Antonia Branchina',
            lastMessage: 'Tu: que lo que becerro',
            lastTime: '1:37 pm',
            variant:'dark',
            mainProps: { blank: true, blankColor: '#777', width: 75, height: 75, class: 'm1' }
          }
        }
    }
</script>
