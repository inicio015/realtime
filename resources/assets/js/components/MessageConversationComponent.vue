<template>
  <b-media :right-align="writtenByMe" vertical-align="center" class="mb-3">
    <template v-slot:aside>
      <b-img blank blank-color="#ccc" rounded="circle" width="49" alt="placeholder"></b-img>
    </template>
    <b-card >
 
      <slot></slot> <!--Obtenemos lo que pasamos desde el componente padre mediante las  etiquetas-->
    </b-card>
  </b-media>
</template>
<script>
    export default {
        
        props:{
          writtenByMe : Boolean
        },
        mounted(){
        },
         data() {
          return {
            content: 'Contenido'
          }
        }
    }
</script>
