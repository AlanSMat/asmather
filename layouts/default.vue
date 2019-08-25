<template>
  <div>
    <Header />

    <nuxt />

    <Footer />
  </div>
</template>
<script>
import Header from './Header.vue'
import Footer from './Footer.vue'

export default {
  components: {
    Header,
    Footer
  },
  data() {
    return {}
  }
}
</script>
<style lang="scss" scop>
@import '@/assets/scss/main.scss';
</style>
