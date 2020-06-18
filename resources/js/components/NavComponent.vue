<template>

 <div v-if="this.webcontents[0].theme=='Violet'" v-bind:style="styleObject.Violet" >
    
   <nav  class="navbar navbar-expand-md  shadow-sm ">
        <div class="container">
         
            <h1  v-for="webcontent in this.webcontents">{{webcontent.company_header}}</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto ">

                </ul>

                <ul class="navbar-nav ml-auto nav-left">
                  <div>
                       <li><a href="#">Sign In</a></li>
                  </div>
                   <div style="padding-left:20px">
                        <li><a href="#">Contact Us</a></li>
                   </div>
                   
                </ul>
            </div>
        </div>
    </nav>      
 </div>
 <div v-else-if="this.webcontents[0].theme=='default'" v-bind:style="styleObject.default" >
      <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                  aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
       

      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="color:black">Sign in</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:black">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="loginImage">

        <img  src="/css/img/logoTrack.png" alt="">
    </div>
    <form method="POST" @submit.prevent="logIn" > 
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
            {!! csrf_token !!}
            <ul class="col-8">
               <li style="color:red" v-for="(error, index) in loginDetails.errors" :key="index">{{error}}</li>
            </ul>
          <input type="text" class="form-control"  placeholder="Username" style="color:black"  v-model="loginDetails.username" name='username'>
          <label data-error="wrong" data-success="right" for="defaultForm-email" style="color:black" >Username</label>
           
        </div>
      
        <div class="md-form mb-4">
        
          <input type="password" id="defaultForm-pass" class="form-control " v-model="loginDetails.password" placeholder="Password" style="color:black" name='password'>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" style="color:black">Password</label>
 
        </div>
    
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-outline-primary">Login</button>
        <button class="btn btn-outline-danger">Forgot Password</button>
      </div>
    </form>

    </div>
 
  </div>
</div>

    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="color:black" >Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:black">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form method="POST" @submit.prevent="sendMail" > 
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
           {!! csrf_token !!}
            <ul class="col-8">
               <li style="color:red" v-for="(error, index) in loginDetails.errors" :key="index">{{error}}</li>
            </ul>
          <i class="fas fa-user prefix grey-text"></i>
          <input placeholder="Name" type="text" id="form34" class="form-control validate" name="name" v-model="loginDetails.name">
          <label data-error="wrong" data-success="right" for="form34" style="color:black">Your name</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input placeholder="Email" type="email" id="form29" class="form-control validate" name="email" v-model="loginDetails.email">
          <label data-error="wrong" data-success="right" for="form29" style="color:black">Your email</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input placeholder="Contact" type="text" id="form32" class="form-control validate" name="contact" v-model="loginDetails.contact">
          <label data-error="wrong" data-success="right" for="form32" style="color:black"> Your Contact Number</label>
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea placeholder="Message" type="text" id="form8" class="md-textarea form-control" rows="4" name="message" v-model="loginDetails.message"></textarea>
          <label data-error="wrong" data-success="right" for="form8" style="color:black">Your message</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn-outline-primary btn">Send <i class="fa fa-plane ml-1"></i></button>
      </div>

     </form>
    </div>
  </div>




 </div>
   <nav  class="navbar navbar-expand-md  shadow-sm ">
        <div class="container">
            
         
            <h1  v-for="webcontent in this.webcontents">{{webcontent.company_header}}</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto ">

                </ul>

                <ul class="navbar-nav ml-auto nav-left">
                  <div>
                       <li><a href="#" data-toggle="modal" data-target="#modalLoginForm">Sign In</a></li>
                  </div>
                   <div style="padding-left:20px">
                        <li><a href="#" data-toggle="modal" data-target="#modalContactForm">Contact Us</a></li>
                   </div>
                   
                </ul>
            </div>
        </div>
    </nav>
    
 
   
 </div>
  <div v-else-if="this.webcontents[0].theme=='Grey'" v-bind:style="styleObject.Grey" >
    
   <nav  class="navbar navbar-expand-md  shadow-sm ">
        <div class="container">
         
            <h1  v-for="webcontent in this.webcontents">{{webcontent.company_header}}</h1>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto ">

                </ul>

                <ul class="navbar-nav ml-auto nav-left">
                  <div>
                       <li><a href="#" >Sign In</a></li>
                  </div>
                   <div style="padding-left:20px">
                        <li><a href="#">Contact Us</a></li>
                   </div>
                   
                </ul>
            </div>
        </div>
    </nav>
 </div>

 



</template>

<script>
    export default {
    
        props:['webcontents'],
        data(){
            return {
     
                   loginDetails:{
                    username:'',
                    password:'',
                    name:'',
                    email:'',
                    contact:'',
                    message:'',
                    errors:[],
               
        
                },
                color:this.webcontents[0].theme,      
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
              }
        },
        methods:{
            sendMail(){

                this.loginDetails.errors=[];

              if(!this.loginDetails.name || !this.loginDetails.email
              || !this.loginDetails.contact
              || !this.loginDetails.message
              ){
                this.loginDetails.errors.push('All field are required');
                  return;
              }
                let data  = this

                axios.post('/webcontent/sendMail',data.loginDetails)
                 .then(function (response){
                  console.log(response)
                 })
                .catch(function(response){
                  console.log(response)
                  // this.loginDetails.errors.push(error.response.loginDetails.errors)
                })

            },          
            logIn(){
              this.loginDetails.errors=[];

              if(!this.loginDetails.username || !this.loginDetails.password){
                this.loginDetails.errors.push('Username and Password is required');
                  return;
              }
                let data  = this

                axios.post('/webcontent/checkUser',data.loginDetails)
                 .then(function (response){
                if(response.data == 'Invalid Credentials'){

                  alert('Invalid Credentials');
                }
                else {
                  if(response.data.user.roleId == 1)
                   {
                      window.location.href = '/Owner/dashboard';
                   }
                   else if (response.data.user.roleId == 2){
                    
                    window.location.href = '/Secretary/dashboard';
                   }
                    else if (response.data.user.roleId == 3){
                    
                    window.location.href = '/Driver/dashboard';
                   }
                   
                }  
                 })
                .catch(function(response){
                  console.log(response)
                  // this.loginDetails.errors.push(error.response.loginDetails.errors)
                })
            }
            

        },
        mounted() {
            console.log('Component mounted.')
            console.log(this.webcontents[0].theme)
            
            
            
        
        }
    }
</script>
