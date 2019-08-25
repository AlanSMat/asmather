<template>
  <div class="container">
    <div>
      <HomeHero pageTitle="This is the home page" />
      <div class="content-container"></div>
    </div>
  </div>
</template>

<script>
import HomeHero from '@/components/HomeHero'
export default {
  components: {
    HomeHero
  }
}
</script>

<style lang="scss">
@import '@/assets/scss/main.scss';

.content-container {
  height: 23vh;
}
</style>
