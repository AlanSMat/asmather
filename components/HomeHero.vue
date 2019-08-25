<template>
  <div>
    <div id="home-hero">
      <div class="hero-text-box">
        <h1 class="hero-title">
          <span class="main">{{pageTitle}}</span>
        </h1>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    pageTitle: {
      type: String,
      required: false
    }
  }
}
</script>
<style lang="scss" scoped>
@import '@/assets/scss/main.scss';

#home-hero {
  height: 80vh;
  position: relative;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: linear-gradient(
      to right bottom,
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    ),
    url('../assets/imgs/bg0.jpg');
}
</style>