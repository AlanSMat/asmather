<template>
  <div>
    <PageHero pageTitle="Portfolio Page" />
    <g-page-layout>
      <p class="page-description">These are some of the projects I've worked on.</p>
      <div class="flex flex--space-between flex--row-wrap">
        <Card
          :key="project.id"
          v-for="project in projects"
          :title="project.title"
          :img="project.img"
        />
      </div>
    </g-page-layout>
  </div>
</template>
<script>
import PageHero from '@/components/PageHero'
import Card from '@/components/Card'

export default {
  components: {
    PageHero,
    Card
  },

  data() {
    return {
      projects: [
        {
          id: 1,
          title: 'Al Services',
          img: require('@/assets/imgs/projects/alservices.png'),
          href: 'http://www.alservices.com.au'
        },
        {
          id: 2,
          title: 'Legal Will',
          img: require('@/assets/imgs/projects/legalwill.png'),
          href: 'http://www.legalwill.com.au'
        },
        {
          id: 3,
          title: 'On Q Recruitment',
          img: require('@/assets/imgs/projects/onq.png'),
          href: 'https://www.onqrecruitment.com.au/'
        },
        {
          id: 4,
          title: 'Turboxs',
          img: require('@/assets/imgs/projects/turboxs.png'),
          href: 'https://www.turboxs.com/'
        },
        {
          id: 5,
          title: 'Coopers Store',
          img: require('@/assets/imgs/projects/coopersstore.png'),
          href: 'https://www.coopersstore.com.au/'
        },
        {
          id: 6,
          title: 'Purrfect Ragdolls',
          img: require('@/assets/imgs/projects/ragdolls.jpg'),
          href: 'https://asmdigital.com.au/wp/purrfect-ragdolls/'
        }
      ]
    }
  }
}
</script>
<style lang="scss" scoped>
@import '@/assets/scss/main.scss';
.content-wrapper {
  width: 30rem;
  height: 50rem;
  border: 1px solid #000;
  position: relative;
}

.content {
  flex: 1 0 auto;
  background-color: $color-tan;
}
</style>