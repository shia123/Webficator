<template>

<div style="background-color:skyblue;height:100vh">

 <ownerNavbar/>
  <ownerDashboard />
  <ownerSidebar/>
  <ownerFooter/>

</div>
    
</template>
<script>
 import ownerNavbar from "./OwnerNavbarComponent";
 import ownerDashboard from "./OwnerDashboardComponent";
 import ownerSidebar from "./OwnerSidebarComponent";
 import ownerFooter from "./OwnerFooterComponent";

export default {
    components: {
     ownerNavbar,
     ownerDashboard,
     ownerSidebar,
     ownerFooter
    
    }
    
}
</script>