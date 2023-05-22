<template>
  <div class="container text-light d-flex align-items-center justify-content-between p-4">
    <div v-for="(option, index) in optionlinks" :key="index" class="d-flex align-items-center">
      <div class="img-option">
        <img class="" :src="'/img/' + option.path" :alt="option.alt">
      </div>
      <span class="text-uppercase">{{ option.description }}</span>
    </div>


  </div>
</template>

<script>
export default {
  data() {
    return {
      optionlinks: [
        {
          path: 'buy-comics-digital-comics.png',
          alt: 'buy-comics-digital-comics',
          description: 'Digital Comics',
        },
        {
          path: 'buy-comics-merchandise.png',
          alt: 'buy-comics-merchandise',
          description: 'DC Merchandise',
        },
        {
          path: 'buy-comics-subscriptions.png',
          alt: 'buy-comics-subscriptions',
          description: 'Subscription',
        },
        {
          path: 'buy-comics-shop-locator.png',
          alt: 'buy-comics-shop-locator',
          description: 'comics shop locator',
        },
        {
          path: 'buy-dc-power-visa.svg',
          alt: 'buy-dc-power-visa',
          description: 'DC power visa',
        },
      ],
    }
  }
}
</script>

<style lang="scss" scoped>
.img-option {
  width: 50px;
  height: 50px;
  margin: 10px;

  img{
    width: 100%;
    height: 100%;
    object-fit: contain;
  }
}
</style>