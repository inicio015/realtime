<template>
    <b-list-group-item :variant="variante">
        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center" >
                <b-img  rounded="circle" alt="Circle image" width="48" height="48" v-bind="mainProps" blank-color="#777" class="m-1">
                    
                </b-img>
            </b-col>
            <b-col cols="6" align-self="center" class="d-none d-md-block">
                <p class="mb-1">{{ name }}</p>
                <p class="text-muted small mb-1">{{ lastMessage }}</p>
            </b-col>
            <b-col cols="3" class="d-none d-md-block">
                <p class="text-muted small">{{lastTime}}</p>
            </b-col>
        </b-row> 
      </b-list-group-item>
</template>

<script>
    export default {
        props:[
            'variante' //recibimos la variable desde la vista
        ],
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
