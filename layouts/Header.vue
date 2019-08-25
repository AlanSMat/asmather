<template>
  <div>
    <header>
      <div class="header-container">
        <div class="logo-container">
          <div>AS Mather</div>
        </div>
        <div class="header-nav">
          <div class="header-nav-item">
            <nuxt-link to="/" class="nav-link">Home</nuxt-link>
            <span></span>
          </div>
          <div class="header-nav-item">
            <nuxt-link to="/portfolio" class="nav-link">Portfolio</nuxt-link>
            <span></span>
          </div>
          <div class="header-nav-item">
            <nuxt-link to="/about" class="nav-link" @click.native="setNavSelect">About</nuxt-link>
            <span></span>
          </div>
          <div class="header-nav-item">
            <nuxt-link to="/contact" class="nav-link nav-selected">Contact</nuxt-link>
            <span></span>
          </div>
        </div>
        <!-- Dropdown Menu -->
        <!-- <div class="dropdown">
          <div class="menu-btn">
            <button @click="hamburgerNav()" class="fas fa-bars dropbtn"></button>
          </div>
          <div id="navDropdown" class="dropdown-content">
            <nuxt-link to="/">Home</nuxt-link>
            <nuxt-link to="/services">Services</nuxt-link>
            <nuxt-link to="/portfolio">Portfolio</nuxt-link>
            <nuxt-link to="/news">News</nuxt-link>
            <nuxt-link to="/contact">Contact</nuxt-link>
          </div>
        </div>-->
      </div>
    </header>
  </div>
</template>

<script>
export default {
  name: 'Header',
  methods: {
    setNavSelect(e) {
      //.target.parentNode.lastChild.classList
      console.log(e)
    },
    hamburgerNav() {}
  }
}
</script>

<style lang="scss" scoped>
@import '@/assets/scss/main.scss';

/** navigation css classes in _nav.scss */

.test-div div + .test-p p {
  color: red;
}

.header-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: $color-lavendar;
  padding: 1.5rem 0 1.5rem 2.5rem;
}
</style>