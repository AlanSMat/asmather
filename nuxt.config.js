export default {
  mode: 'universal',
  /*
   ** Headers of the page
   */
  head: {
    title: 'ASMather' || '', //process.env.npm_package_name
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      {
        hid: 'description',
        name: 'description',
        content: process.env.npm_package_description || ''
      }
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }]
  },
  env: {
    ASSETS_URL: './src/assets'
  },
  /*
   ** Customize the progress-bar color
   */
  loading: { color: '#fff' },
  /*
   ** Global CSS
   */
  css: [
    'assets/scss/main.scss'
    // '@/assets/css/normalize.css',
    // '@/assets/icons/font-awesome/css/fontawesome-all.min.css',
    // '@/assets/icons/simple-line-icons/css/simple-line-icons.min.css',
    // '@/assets/icons/themify/css/themify-icons.css',
    // '@/assets/icons/weather-icons/css/weather-icons.min.css'
  ],
  /*
   ** Plugins to load before mounting the App
   */
  plugins: [
    {
      src: '~/plugins/global-components',
      ssr: true
    }
  ],
  /*
   ** Nuxt.js modules
   */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    // '@nuxtjs/axios',
    // '@nuxtjs/style-resources',
    'nuxt-fontawesome'
  ],
  /*
   ** Axios module configuration
   ** See https://axios.nuxtjs.org/options
   */
  axios: {},
  /*
   ** I don't know why you'd use this as the import is in the main.scss style sheet,
   ** BUT if you do ONLY use it for mixin's, variables and functions otherwise replication will occur
   */
  styleResources: {
    scss: []
  },

  build: {
    /*
     ** You can extend webpack config here
     */
    extend(config, ctx) {}
  }
}
