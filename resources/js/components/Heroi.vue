<template>
  <section>
    <p class="empty-team" v-if="herois.length < 1"> Sua equipe esta vazia! </p>
    <div class="row">
      <div v-for="(heroi, index) in herois" :key="heroi.nome" class="box col-md-2 mt-2 mb-2">
        <p @click="remove(index)" class="remove-hero"></p>
        <img :src="heroi.image" alt="">
        <p class="text-center"> {{heroi.nome}} </p>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: ['heroi'],
  data() {
    return {
      herois: []
    }
  },
  watch: {
    heroi: function (hero) {
      this.herois.push(hero)
    }
  },
  methods: {
    remove: function (index) {
      this.herois.splice(index, 1)
    }
  }
}
</script>

<style scoped lang="scss">
p {
  font-family: 'Lobster'
}

.empty-team {
  font-size: 18px
}

img {
  width: 100%;
  height: auto;
}

.box {
  position: relative
}

.remove-hero {
  position: absolute;
  top: 0%;
  right: 9%;
  background: url(/images/close.png) 100% 100% no-repeat;
  background-size: cover;
  height: 25px;
  width: 25px;
  cursor: pointer;
}
</style>
