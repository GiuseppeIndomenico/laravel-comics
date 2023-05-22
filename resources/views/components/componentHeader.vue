<template>
    <nav class="container d-flex justify-content-between">
        <div class="logo-header">
            <img class="img-fluid" src="/img/dc-logo.png" alt="logo">
        </div>
        <ul class="d-flex align-items-center justify-content-center m-0 ul-header">
            <li v-for="(link, index) in linksNav" :class="{ 'active': link.active }" @click="setActive(index)"
                class="p-3 d-flex align-items-center" :key="index">
                <a class="fw-semibold" :href="link.url">{{ link.title }}</a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {

    data() {
        return {
            linksNav: [
                {
                    title: 'Characters',
                    active: false,
                    url: '#'
                },

                {
                    title: 'Comics',
                    active: true,
                    url: '#'

                },

                {
                    title: 'Movie',
                    active: false,
                    url: '#'

                },

                {
                    title: 'TV',
                    active: false,
                    url: '#'

                },

                {
                    title: 'Games',
                    active: false,
                    url: '#'

                },

                {
                    title: 'Collectibles',
                    active: false,
                    url: '#'

                },

                {
                    title: 'Videos',
                    active: false,
                    url: '#'

                },

                {
                    title: 'Fans',
                    active: false,
                    url: '#'

                },

                {
                    title: 'News',
                    active: false,
                    url: '#'

                },
                {
                    title: 'Shop',
                    active: false,
                    url: '#'
                },



            ]
        }
    },
    methods: {
        setActive(index) {
            this.linksNav.forEach((link, i) => {
                if (i === index) {
                    link.active = true;
                } else {
                    link.active = false;
                }
            });

        }

    }
}
</script>

<style lang="scss" scoped>
.logo-header {
    width: 60px;
    height: 60px;
    margin: 20px;
}



.active {
    border-bottom: 3px inset #0d6efd;

    a {
        color: #0d6efd
    }
}

.ul-header {
    list-style: none;

    li {
        cursor: pointer;
        height: 100%;
        border-bottom: 3px inset transparent;
        transition: all .25s;

        &:hover {
            border-bottom: 3px inset #0d6efd;

            a {
                color: #0d6efd
            }
        }

        a {
            text-decoration: none;
            color: black;

        }
    }
}
</style>
