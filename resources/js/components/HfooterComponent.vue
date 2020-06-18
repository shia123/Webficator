<template>
<div v-if="this.webcontents[0].theme=='default'" v-bind:style="styleObject.default">
   <footer class="page-footer font-small blue pt-4" >

       <div class="container-fluid text-center text-md-left">

           <div class="row">
               <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase"></h5>
                    <h1 v-for="webcontent in this.webcontents">{{webcontent.company_header}}{{webcontent.about_company}}</h1>
                    
               </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">About Us</h5>
                <ul class="list-unstyled">
                     <li v-for="webcontent in this.webcontents">{{webcontent.about_company}}</li>
                    <li v-for="webcontent in this.webcontents">{{webcontent.company_number}}</li>
                    <li v-for="webcontent in this.webcontents">{{webcontent.email}}</li>
                  <li v-for="webcontent in this.webcontents">{{webcontent.company_info}}</li> 
                     
                </ul>
            </div>
               <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">Communicate With Us</h5>
                <li class="icons" ><a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    
                </li>
               </div>
           </div>

       </div>

    <div class="footer-copyright text-center py-3">
    <a href="#"><li class="companyYear" v-for="webcontent in this.webcontents">©{{webcontent.company_year}}{{webcontent.company_header}}{{webcontent.about_company}}</li></a>
    </div>
   
   </footer>
    </div>
    <div v-else-if="this.webcontents[0].theme=='Violet'" v-bind:style="styleObject.Violet">
   <footer class="page-footer font-small blue pt-4">

       <div class="container-fluid text-center text-md-left">

           <div class="row">
               <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase"></h5>
                    <h1 v-for="webcontent in this.webcontents">{{webcontent.company_header}}{{webcontent.about_company}}</h1>
                    
               </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">About Us</h5>
                <ul class="list-unstyled">
                     <li v-for="webcontent in this.webcontents">{{webcontent.about_company}}</li>
                    <li v-for="webcontent in this.webcontents">{{webcontent.company_number}}</li>
                    <li v-for="webcontent in this.webcontents">{{webcontent.email}}</li>
                  <li v-for="webcontent in this.webcontents">{{webcontent.company_info}}</li> 
                     
                </ul>
            </div>
               <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">Communicate With Us</h5>
                <li class="icons" ><a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    
                </li>
               </div>
           </div>

       </div>

    <div class="footer-copyright text-center py-3">
    <a href="#"><li class="companyYear" v-for="webcontent in this.webcontents">©{{webcontent.company_year}}{{webcontent.company_header}}{{webcontent.about_company}}</li></a>
    </div>
   
   </footer>
    </div>
    <div v-else-if="this.webcontents[0].theme=='Grey'" v-bind:style="styleObject.Grey">
   <footer class="page-footer font-small blue pt-4">

       <div class="container-fluid text-center text-md-left">

           <div class="row">
               <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase"></h5>
                    <h1 v-for="webcontent in this.webcontents">{{webcontent.company_header}}{{webcontent.about_company}}</h1>
                    
               </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">About Us</h5>
                <ul class="list-unstyled">
                     <li v-for="webcontent in this.webcontents">{{webcontent.about_company}}</li>
                    <li v-for="webcontent in this.webcontents">{{webcontent.company_number}}</li>
                    <li v-for="webcontent in this.webcontents">{{webcontent.email}}</li>
                  <li v-for="webcontent in this.webcontents">{{webcontent.company_info}}</li> 
                     
                </ul>
            </div>
               <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">Communicate With Us</h5>
                <li class="icons" ><a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    
                </li>
               </div>
           </div>

       </div>

    <div class="footer-copyright text-center py-3">
    <a href="#"><li class="companyYear" v-for="webcontent in this.webcontents">©{{webcontent.company_year}}{{webcontent.company_header}}{{webcontent.about_company}}</li></a>
    </div>
   
   </footer>
    </div>
</template>

<script>
    export default {
        props:['webcontents'],
        name: 'app',
        data:function(){
            return {
                color:this.webcontents[0].theme,
                   styleObject:{
                 default:{
                      backgroundColor:'darkblue',
                      color:'white',
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
            }
        },
        mounted() {
            console.log('Component mounted.')
            console.log(this.webcontents[0].theme)
          
            
        
        }
    }
</script>
