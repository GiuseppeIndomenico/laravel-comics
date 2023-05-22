<template>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row p-4 text-light">
                    <div class="col-4 ">
                        <h3 class="py-3">DC Comics</h3>
                        <ul class="ul-footer" v-for="i in dcComics">
                            <li>
                                <a>{{ i }}</a>
                            </li>
                        </ul>
                        <h3 class="py-3">SHOP</h3>
                        <ul class="ul-footer" v-for="i in shop">
                            <li><a>{{ i }}</a> </li>
                        </ul>

                    </div>

                    <div class="col-4 ">
                        <h3 class="py-3">DC</h3>
                        <ul class="ul-footer" v-for="i in dc">
                            <li><a>{{ i }}</a> </li>
                        </ul>

                    </div>

                    <div class="col-4 ">
                        <h3 class="py-3">Sites</h3>
                        <ul class="ul-footer" v-for="i in sites">
                            <li><a>{{ i }}</a> </li>
                        </ul>

                    </div>

                </div>

            </div>
            <div class="col-6 gi-logo">
                <img src="\img\dc-logo-bg.png" alt="">
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            dcComics: [
                "Characters",
                "Comics",
                "Movies",
                "TV",
                "Games",
                "Videos",
                "News"
            ],
            shop: [
                "Shop DC",
                "Shop DC Collectibles"
            ],
            dc: [
                "Terms of Use",
                "Privacy Policy (New)",
                "Ad Choices",
                "Advertising",
                "Jobs",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us"
            ],
            sites: ["DC",
                "MAD MAgazine",
                "DC kids",
                "DC universe",
                "DC power visa",
            ]
        };
    }
}

</script>

<style lang="scss" scoped>
.gi-logo {
    height: 480px;

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
}

h3 {
    font-size: 18px;
    padding-left: 1rem;
    text-align: center;

}

.ul-footer {

    li {
        list-style: none;
        color: lightgray;
        font-size: 12px;
        text-align: center;

        &:hover {
            color: white;
        }
    }
}
</style>
