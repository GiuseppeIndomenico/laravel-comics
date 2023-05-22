<template>
  <header class="bg-light position-relative">
    <componentHeader />
    <div class="jumbo">
      <img src="\img\jumbotron.jpg" alt="jumbo">
    </div>
    <span class="text-bg-primary py-2 px-4 fw-semibold gi-pos">CURRENT SERIES</span>
  </header>
  <main>
    <section class="bg-dark">
      <div class="container py-4">
        <div class="row">
          <div v-for="(comic, index) in comics" :key="index" class="col-12 col-sm-6 col-md-4 col-lg-2">
            <componentMain1 :price="comic.price" :thumb="comic.thumb" :type="comic.type" :series="comic.series" />
          </div>

        </div>
      </div>
    </section>
    <section class="bg-primary p-2">
      <componentMain2 />
    </section>
  </main>
  <footer>
    <section class="gi-bg">
      <componentFooter1 />
    </section>
    <section class="gi-dark text-light">
      <componentFooter2 />
    </section>
  </footer>
</template>

<script>
import componentHeader from './components/componentHeader.vue';
import componentMain1 from './components/componentMain1.vue';
import componentMain2 from './components/componentMain2.vue';
import componentFooter1 from './components/componentFooter1.vue';
import componentFooter2 from './components/componentFooter2.vue';
export default {
  components: {
    componentHeader,
    componentMain1,
    componentMain2,
    componentFooter1,
    componentFooter2,
  },
  data() {
    return {
      comics: [
        {
          "thumb": "https://www.coverbrowser.com/image/action-comics/1-1.jpg",
          "price": "$19.99",
          "series": "Action Comics",
          "type": "comic book"
        },
        {
          "thumb": "https://www.panini.it/media/catalog/product/cache/a5b5dd3adfe0d321084804c738f29601/M/1/M1BLLA015ISBN_0.jpg",
          "price": "$3.99",
          "series": "American Vampire 1976",
          "type": "comic book"
        },
        {
          "thumb": "https://media.wired.com/photos/593384dad80dd005b42b2817/master/w_2560%2Cc_limit/Aquaman-16.jpg",
          "price": "$16.99",
          "series": "Aquaman",
          "type": "graphic novel"
        },
        {
          "thumb": "https://d29xot63vimef3.cloudfront.net/image/batgirl/1-1.jpg",
          "price": "$2.99",
          "series": "Batgirl",
          "type": "comic book"
        },
        {
          "thumb": "https://static.posters.cz/image/750/locandine-film-in-plexiglass-batman-prowl-comic-cover-i69653.jpg",
          "price": "$3.99",
          "series": "Batman",
          "type": "comic book"
        },
        {
          "thumb": "https://static.wikia.nocookie.net/marvel_dc/images/5/50/Batman_Beyond_v.1_1.jpg",
          "price": "$2.99",
          "series": "Batman Beyond",
          "type": "comic book"
        },
        {
          "thumb": "https://static.wikia.nocookie.net/marvel_dc/images/0/0d/Batman_Superman_Vol_1_1.jpg",
          "price": "$3.99",
          "series": "Batman/Superman",
          "type": "comic book"
        },
        {
          "thumb": "https://static.wikia.nocookie.net/marvel_dc/images/c/cf/Batman_Superman_Annual_Vol_2_1.jpg",
          "price": "$4.99",
          "series": "Batman/Superman Annual",
          "type": "comic book"
        },
        {
          "thumb": "https://static.wikia.nocookie.net/marvel_dc/images/5/54/Batman_The_Joker_War_Zone_Vol_1_1.jpg",
          "price": "$5.99",
          "series": "Batman: The Joker War Zone",
          "type": "comic book"
        },
        {
          "thumb": "https://static.wikia.nocookie.net/marvel_dc/images/6/64/Batman_Three_Jokers_Collected.jpg",
          "price": "$6.99",
          "series": "Batman: Three Jokers",
          "type": "comic book"
        },
        {
          "thumb": "https://static.wikia.nocookie.net/marvel_dc/images/f/f8/Batman_White_Knight_Presents_Harley_Quinn_Vol_1_1.jpg",
          "price": "$4.99",
          "series": "Batman: White Knight Presents: Harley Quinn",
          "type": "comic book"
        },
        {
          "thumb": "https://static.wikia.nocookie.net/marvel_dc/images/c/c8/Catwoman_Vol_2_1.jpg",
          "price": "$16.99",
          "series": "Catwoman",
          "type": "graphic novel"
        }
      ]
    }
  }
}
</script>

<style lang="scss" scoped>
.gi-bg {
  width: 100%;
  height: 100%;
  background-image: url(/img/footer-bg.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}

;

.gi-dark {
  background-color: #333333;
}

;

.jumbo {
  width: 100%;
  height: 400px;
    img{
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: 100% 0%;
    }


};
.gi-pos{
position: absolute;
left: 312px;
bottom: -20px;
font-size: 20px;
}
</style>