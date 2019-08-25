<template>
  <div>
    <div class="page-container">
      <slot></slot>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {}
  }
}
</script>
<style lang="scss" scoped>
@import '@/assets/scss/main.scss';
.page-container {
  padding: 4rem 3rem;
  @include respond(big-desktop) {
    width: 100rem;
    margin: auto;
  }
  @include respond(tab-land) {
    width: 100rem;
    margin: auto;
  }
  @include respond(tab-port) {
    width: 65rem;
    margin: auto;
  }
  @include respond(phone) {
    width: 30rem;
    margin: auto;
  }
}
</style>