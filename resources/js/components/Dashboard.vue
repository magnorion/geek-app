<template>
  <div id="dashboard" class="col-md-9">
    <div ref="heroData" id="hero-data-return" class="row">
      <div class="image-box col-md-4">
        <img class="mt-4" :src="image" alt="perfil">
      </div>
      <div class="description-box col-md-8 mb-2">
        <h1> {{heroi.name}} </h1>
        <p> <strong>Descrição:</strong> {{heroi.description}} </p>
        <button @click="addHeroi()" class="btn btn-primary"> Add Herói </button>
        <button @click="close()" class="btn btn-danger"> Cancelar </button>
      </div>
    </div>
    <div id="equipe-holder" class="mt-2">
      <h3 class="title"> Equipe </h3>
      <heroi-component :heroi="hero"></heroi-component>
    </div>
  </div>
</template>

<script>
import Heroi from './Heroi.vue'
export default {
  data() {
    return {
      hero: {},
      image: '/images/perfil.jpg'
    }
  },
  props: ['heroi'],
  components: {
    'heroi-component': Heroi
  },
  watch: {
    heroi: function (data) {
      this.getImage()
      this.$refs.heroData.style.height = '200px'
    }
  },
  methods: {
    getImage: function () {
      this.image = `${this.heroi.thumbnail.path}.${this.heroi.thumbnail.extension}`
    },

    addHeroi: function () {
      const self = this

      this.hero = {
        nome: self.heroi.name,
        image: self.image
      }

      this.close()
    },

    close: function() {
      this.$refs.heroData.style.height = '0px'
    }
  }
}
</script>

<style scoped lang="scss">
#hero-data-return {
  background: #ddd;
  transition: 0.5s ease all;
  height: 0px;
  overflow: hidden;
}
.description-box {
  text-align: right;
  h1, h2 {
    font-family: 'Lobster';
  }
  p, h1, button {
    margin-right: 1%;
  }
}
.image-box {
  
  img {
    width: 150px;
    height: auto;
  }
}

#equipe-holder {
  h3.title {
    text-align: left !important;
  }
}
</style>
