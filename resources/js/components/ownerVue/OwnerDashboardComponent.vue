
<template>
  <div style="position:fixed;padding-top:30px;display:flex;">
    <div>
      
      <h1 style="padding-left:2.7in;">Admin Dashboard</h1>

    </div>
      
    <transition-group name="fade" tag="div">
      <div v-for="i in [currentIndex]" :key="i" style="margin:0">
        <img class="image-dash" :src="currentImg" style="padding-right:1in" />
      </div>
    </transition-group>
  
    <!-- <a class="prev" @click="prev" href="#">&#10094; Previous</a>
    <a class="next" @click="next" href="#">&#10095; Next</a> -->
  </div>
  
</template>
<script>
export default {
  name: "ownerDashboard",
  data() {
    return {
      images: [
        "/css/img/Track.png",
        "/css/img/Fingerprint2.png"

      ],
      timer: null,
      currentIndex: 0
    };
  },

  mounted: function() {
    this.startSlide();
  },

  methods: {
    startSlide: function() {
      this.timer = setInterval(this.next, 4000);
    },

    next: function() {
      this.currentIndex += 1;
    },
    prev: function() {
      this.currentIndex -= 1;
    }
  },

  computed: {
    currentImg: function() {
      return this.images[Math.abs(this.currentIndex) % this.images.length];
    }
  }
};
</script>
