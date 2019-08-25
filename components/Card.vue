<template>
  <div class="card-container">
    <div class="card u-border-shadow u-mb-35">
      <img :src="img" width="100%" />
      <div class="card__title">{{title}}</div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    title: {
      type: String,
      required: false
    },
    img: {
      type: String,
      required: false
    },
    width: {
      type: String,
      required: false
    },
    height: {
      type: String,
      required: false
    },
    modifierClass: {
      type: String,
      required: false
    },
    url: {
      type: String,
      required: false
    }
  },
  data() {
    return {}
  }
}
</script>
<style lang="scss" scoped>
@import '@/assets/scss/main.scss';
.card {
  width: 30rem;
  border: 1px solid $color-grey-lt;
  background-color: #fff;
  transition: 0.2s;
  height: 20rem;
  position: relative;

  &__title {
    background-color: $color-grey-mid;
    text-align: center;
    padding: 0.5rem;
    color: filter(120%);
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
  }

  &:hover {
    width: 31rem;
    height: 21rem;
    cursor: pointer;
    box-shadow: 0 0.5rem 1.5rem rgba(111, 122, 146, 0.15);
  }
}

.card-container {
  width: 31rem;
  height: 24rem;
}
</style>
