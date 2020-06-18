<template>
   
 <sidebar-menu :menu="menu" v-bind:style="styleObject.default" />   
    
  
</template>
 
<script>

    export default {
        name:"ownerSidebar",
        data() {
            return {
                 styleObject:{
                 default:{
                      backgroundColor:'darkblue',
                      color:'white'
                   },
                    Violet:{
                      backgroundColor:'#900FD5',
                      color:'white'
                   },
                     Grey:{
                      backgroundColor:'grey',
                      color:'#3490dc'
                   },
              
                },

                menu: [
                    {
                        header: true,
                        title: 'Admin',
                        hiddenOnCollapse: true,
                    
                        
                    },
                    {
                        href: '/Owner/dashboard',
                        title: 'Dashboard',
                        icon: 'fa fa-user'
                    },
                    {
                        href: '#',
                        title: 'Components',
                        icon: 'fa fa-cog',
                       
                    },
                     {
                        href: '#',
                        title: 'Users Account',
                        icon: 'fa fa-user',
                       
                    },
                     {
                        href: '#',
                        title: 'Secretary Logs',
                        icon: 'fa fa-user',
                       
                    },
                     {
                        href: '#',
                        title: 'Track Logs',
                        icon: 'fa fa-location-arrow',
                       
                    },
                     {
                        href: '#',
                        title: 'Manage Unit',
                        icon: 'fa fa-car',
                       
                    },
                     {
                        href: '#',
                        title: 'Manage Devices',
                        icon: 'fa fa-car',
                       
                    }
                ]
            }
        }
    }
</script> 