<template>
  <div>
    <header>
      <Navbar />
    </header>
    <div class="container px-4">
      <div class="col-md-6 offset-md-3 center">
        <a>
          <router-link to="/" >
            <h5>Início > Blog</h5>
          </router-link>
        </a>
      </div>
      <div class="row" style="padding: 10px;">
        <div class="col-md-6 offset-md-3">
          <div class="card">
            <img :src="materia.imagem" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <b>{{ materia.titulo }}</b> 
              </h5>
              <p class="card-text">{{ materia.descricao }}</p>
              <p class="card-text">{{ materia.texto_completo }}</p>
              <router-link to="/" class="btn btn-primary">Voltar</router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Footer />
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';

export default {
  components: {
    Navbar,
    Footer
  },
  data() {
    return {
      materia: {}
    };
  },
  async mounted() {
    const id = this.$route.params.id;
    let response = await window.axios.get(`/materias/${id}`);

    if (response.status === 200) {
      this.materia = response.data;
    }
  }
};
</script>