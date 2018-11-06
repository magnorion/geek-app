<template>
  <div id="formulario-lateral" class="col-md-3">
    <form @submit.prevent class="mt-5" action="?">
      <h3 class="text-center"> Avante Equipe! </h3>
      <p class="text-center description"> Como seria a sua equipe dos vingadores? </p>
      <div class="form-group">
        <input type="text" class="form-control mb-2" v-model="nome" placeholder="Digite o nome de um herói">
        <button @click="busca();" class="btn btn-primary"> Buscar </button>
        <div v-if="error" id="error-msg" class="alert alert-danger mt-2">
          <p class="mt-2 text-center"> Não foi possível encontrar este heroi! </p>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      nome: '',
      error: false
    }
  },
  methods: {
    busca: function () {
      if (this.nome === '') return false;
      const self = this

      axios.get('/heroi', {params: {nome: self.nome}})
        .then(res => console.log(self.setHeroi(res.data)))
        .catch(err => console.log(err))
    },

    setHeroi: function (dados) {
      if (dados.length > 0) {
        this.$emit('hero', dados[0])
        this.error = false
      } else {
        this.error = true
      }
    }
  }
}
</script>

<style scoped lang="scss">
#formulario-lateral {
  background: #555;
  height: 100vh;

  h3, p.description {
    font-family: 'Lobster';
    color: #ddd;
  }

  form div input, form div button {
    width: 90%;
    margin-left: 5%;
  }

  #error-msg {
    padding: 0px;
    width: 80%;
    margin-left: 10%
  }
}
</style>
