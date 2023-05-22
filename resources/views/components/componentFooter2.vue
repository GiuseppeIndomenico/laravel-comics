<template>
    <div class="container p-4 d-flex align-items-center justify-content-between">
        <button> SIGN-UP NOW!</button>

        <div class="d-flex align-items-center justify-content-center">
            <h5 class="text-primary me-3">FOLLOW US</h5>
            <div v-for="(social, index) in socials" :key="index">
                <div class="img-social">
                    <img class="" :src="'/img/' + social.path" :alt="social.alt">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            socials: [
                {
                    path: 'footer-facebook.png',
                    alt: 'footer-facebook',
                },
                {
                    path: 'footer-twitter.png',
                    alt: 'footer-twitter',
                },
                {
                    path: 'footer-youtube.png',
                    alt: 'footer-youtube',
                },
                {
                    path: 'footer-pinterest.png',
                    alt: 'footer-pinterest',
                },
                {
                    path: 'footer-periscope.png',
                    alt: 'footer-periscope',
                },

            ]
        }
    }
}
</script>

<style lang="scss" scoped>
button {
    background: transparent;
    color: white;
    border: 2px solid #0d6efd;
    padding: 10px;
    font-size: 1rem;
    transition: all .25s;
    &:hover{
       color: #0d6efd; 
       background-color: white;
       border: 2px solid white;
    }
}
.img-social {
  width: 50px;
  height: 50px;
  margin: 5px;

    &:hover img{
        scale: 1;
    }

    img{
        scale:0.8;
        transition: all .5s;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
}
</style>