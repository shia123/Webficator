<template>

 
  
 <div class="card-body">
   <h1>Secretary</h1>
   <button class="btn btn-outline-primary" @click="redirect">Login</button>
 </div>
 
</template>

<script>
  export default {
    name: 'app',

    methods:{
        redirect(){
          
            window.location.href = '/webcontent/test';

        }
    },

    mounted() {
      console.log({router: this.$router});
    }
  }
</script>
