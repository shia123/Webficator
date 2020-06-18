<template>

<div style="background-color:blue">
   
   <nav  class="nav-owner navbar-expand-md  shadow-sm ">
        <div class="container">
            
         

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto ">

                </ul>

                <ul class="navbar-nav ml-auto nav-left">
                  <div class="user-menu">
                       <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#modalLoginForm"><i class="fa fa-user-tag"></i></button> -->
                          <div class="dropdown" >
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:blue">
                        <i class="fa fa-user"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLoginForm">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>

                        <form method="GET" @submit.prevent="logOut" >
                              <button class="dropdown-item">Logout</button>
                            
                        </form>
                        </div>
                        </div>
                  </div>
                   
                </ul>
            </div>
        </div>
    </nav>
  

 </div>



        
    
</template>

<script>

  

    export default {
     name: "ownerNavbar",
     methods:{

         logOut(){
                axios.get('/Owner/logout')
                 .then(function (response){
                   window.location.href = '/webcontent/home';
                 })
                .catch(function(response){
                  console.log(response)
                  // this.loginDetails.errors.push(error.response.loginDetails.errors)
                })
         }
     }
  
  
  
    
    }
</script>
