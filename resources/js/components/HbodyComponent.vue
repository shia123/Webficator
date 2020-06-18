<template>
    <div v-if="this.webcontents[0].theme=='default'" class="defaultBg">
        

        <img src="/css/img/zoomed.png" alt="">
    </div>
      <div v-else-if="this.webcontents[0].theme=='Violet'" class="violetBg">

        <img src="/css/img/magentatheme.png" alt="">
    </div>
      <div v-else-if="this.webcontents[0].theme=='Grey'" class="greyBg">

        <img src="/css/img/greytheme.png" alt="">
    </div>
</template>

<script>
    export default {
        props:['webcontents'],
        name: 'app',
        
        data:function(){
            return {
                color:this.webcontents[0].theme,      
            }
        },
        mounted() {
            console.log('Component mounted.')
            console.log(this.webcontents[0].theme)
          
            
        
        }
    }
</script>
