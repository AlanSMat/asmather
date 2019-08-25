<template>
  <div>
    <div v-if="route">
      <nuxt-link to="/route">
        <button class="btn btn-outline btn-default btn-outline-1x m-1">{{title}}</button>
      </nuxt-link>
    </div>
    <div v-if="!route">
      <button
        :id="id"
        @click="clickedBtn"
        class="btn btn-outline btn-default btn-outline-1x m-1"
      >{{title}}</button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true
    },
    id: {
      type: String,
      required: false
    },
    route: {
      type: String,
      required: false
    },
    link: {
      type: String,
      required: false
    },
    disabled: {
      type: Boolean,
      required: false
    },
    disabled: {
      type: Boolean,
      required: false
    }
  },
  data() {
    return {
      value: 'I am a child'
    }
  },
  methods: {
    clickedBtn(e) {
      this.$emit('clickedBtn', e)
    }
  },
  mounted() {
    //this.$emit(this.value)
  }
}
</script>

<style lang="scss" scope>
@import '@/assets/scss/main.scss';
</style>