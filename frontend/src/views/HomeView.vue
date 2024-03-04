<template>
  <div>
    <header>
      <Navbar />
    </header>
    <div class="container px-4">
      <div class="col-md-6 offset-md-3 center mb-5">
        <h1>Blog</h1>
        <div class="traco-blog"></div>
      </div>
      <div class="row" style="padding: 10px;">
        <div
          class="col-md-6 offset-md-3 mb-4"
          v-for="(materia, index) in materias"
          :key="index"
        >
          <div class="card" style="margin-bottom: 10px;">
            <img :src="materia.imagem" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <b>{{ materia.titulo }}</b>
              </h5>
              <p class="card-text">{{ materia.descricao }}</p>
              <router-link
                :to="'/materia/' + materia.id"
                class="btn btn-primary"
              >
                Ler mais...
              </router-link>
            </div>
          </div>
        </div>
      </div>
      <div class="center  justify-content-center mt-5">
        <nav aria-label="Page navigation example">
          <ul class="pagination col-md-6 offset-md-3 justify-content-center">
            <li class="page-item" :class="{ disabled: payloadMaterias.current_page === 1 }">
              <button class="page-link" @click="previousPage">«</button>
            </li>
            <li class="page-item" :class="{ active:payloadMaterias.current_page == pageNumber }" v-for="pageNumber in payloadMaterias.last_page" :key="pageNumber">
              <button class="page-link" @click="goToPage(pageNumber)">{{ pageNumber }}</button>
            </li>
            <li class="page-item" :class="{ disabled: payloadMaterias.current_page === payloadMaterias.last_page }">
              <button class="page-link" @click="nextPage">»</button>
            </li>
          </ul>
        </nav>
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
      payloadMaterias: {},
      perPage: 6,
      currentPage: 1
    };
  },
  computed: {
    materias(){
      if(this.payloadMaterias.data){
        return this.payloadMaterias.data;
      }

      return [];
    }
  },
  async mounted() {
    await this.goToPage(1);
  },
  methods: {
    async previousPage() {
      if (this.payloadMaterias.current_page > 1) {
        let page = this.payloadMaterias.current_page - 1;
        await this.goToPage(page);
      }
    },
    async nextPage() {
      if (this.payloadMaterias.current_page < this.payloadMaterias.last_page) {
        let page = this.payloadMaterias.current_page + 1;
        await this.goToPage(page);
      }
    },
    async goToPage(pageNumber) {
      let response = await window.axios.get('/materias?page='+pageNumber);

      if (response.status == 200) {
        console.log(response.data);
        this.payloadMaterias = response.data;
      }
    }
  }
};
</script>