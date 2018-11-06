<template>
  <div class="row">
    <formulario-component @hero="onHero"></formulario-component>
    <dashboard-component :heroi="heroi"></dashboard-component>
  </div>
</template>

<script>
  import Formulario from '../components/Formulario.vue'
  import Dashboard from '../components/Dashboard.vue'

  export default {
    components: {
      'formulario-component': Formulario,
      'dashboard-component': Dashboard
    },
    data() {
      return {
        heroi: {}
      }
    },
    mounted() {
      
    },
    methods: {
      onHero: function (heroi) {
        this.heroi = heroi
      }
    }
  }
</script>

<style lang="scss">

</style>

