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
              <b-media left-align vertical-align="center" class="mb-3">
                <template v-slot:aside>
                  <b-img blank blank-color="#ccc" rounded="circle" width="49" alt="placeholder"></b-img>
                </template>
                <b-card >
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                </b-card>
              </b-media>
         
              <b-media right-align vertical-align="center" class="mb-3">
              <template v-slot:aside>
                <b-img blank blank-color="#ccc" rounded="circle" width="49" alt="placeholder"></b-img>
              </template>
              <b-card >
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
              </b-card>
            </b-media>
              
              <div slot="footer">
                  <b-form  class="mb-0">
                       <b-input-group>

                        <b-form-input type="text" placeholder="Escribe un mensaje"></b-form-input>

                        <b-input-group-append>
                          <b-button variant="primary">Enviar</b-button>
                        </b-input-group-append>
                      </b-input-group>
                  </b-form>
              </div>
            </b-card>
        </b-col>
        <b-col  cols="4">
            <b-img v-bind="mainProps" rounded="circle" alt="Circle image" width="48" height="48" blank-color="#777" class="m-1"/></b-img>
            <p>Usuario seleccionado</p>
            <hr>
            <b-form-checkbox >
                Desactivar notificaciones
            </b-form-checkbox>

        </b-col>
    </b-row>
</template>

<script>
    export default {
        mounted(){
          console.log('Compoent mounted.')
        },
         data() {
          return {
          
          }
        }
    }
</script>
