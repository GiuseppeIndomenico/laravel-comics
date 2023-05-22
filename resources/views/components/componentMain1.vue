<template>
    <div class="d-flex flex-column align-content-center justify-content-center py-2">
        <div class="gi-img mb-2">
            <img :src="thumb" :alt="type">
        </div>
        <div class="">
            <div class="row">
                <div class="col-8">
                    <span class="text-light ">{{ series }}</span>

                </div>
                <div class="col-4">
                    <span class="text-light">{{ price }}</span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        thumb: String,
        series: String,
        type: String,
        price: String
    }
}
</script>

<style lang="scss" scoped>
.gi-img {
    width: 200px;
    height: 200px;
    scale: 0.9;
    transition: all .5s;

    &:hover {
        scale: 1.1;
    }

    img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: 100% 0%;
    }
}
</style>
