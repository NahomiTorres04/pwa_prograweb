<template>
  <div id="album">
      <div class="container">
        <div class="row">
          <div class="two columns pic"></div>
          <div class="two columns pic"></div>
          <div class="two columns pic"></div>
          <div class="two columns pic"></div>
          <div class="two columns pic"></div>
          <div class="two columns pic"></div>
          <div class="two columns pic"></div>
          <div class="two columns pic"></div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    name: 'Album'
}
</script>

<style scoped>
    #album{
        margin: 55px 0;
        height: 150px;
    }
    #album .container{
        min-width: 100%;
        height: 100%;
    }
    #album .container .row{
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #album .container .row .pic{
        margin: 0;
        height: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    #album .container .row .pic:nth-child(1){
        background-image: url(https://www.cosemarozono.com/wp-content/uploads/2017/02/eliminar-olores-en-habitaciones-de-hotel-con-ozono.jpg);
    }
    #album .container .row .pic:nth-child(2){
        background-image: url(https://www.hiltonhotels.com/assets/img/Hotel%20Images/Hilton/G/GUALLHH/GUALLHH_full_9615101.jpg);
    }
    #album .container .row .pic:nth-child(3){
        background-image: url(https://static.abc.es/Media/201504/27/hotel12--644x362.jpg);
    }
    #album .container .row .pic:nth-child(4){
        background-image: url(https://www.cataloniahotels.com/es/blog/wp-content/uploads/2016/05/habitaci%C3%B3n-doble-catalonia-620x412.jpg);
    }
    #album .container .row .pic:nth-child(5){
        background-image: url(https://lh3.googleusercontent.com/proxy/orwopYTwr9YWGmfAxW8nuqw30bKQutE6CL-D1nPjen0VipaV_Z1HHQvM5tl4unvqR8Q-qP6o13Ux3T4SPHUWHDwQEXqgDN2GEFFFAj-diKVMeVaSNjj7Z-PFeZwnu09vC1CEMQhQP7uC6LgrLe9ebkK7bfodlDryNKpUAK8R2Q1BiUbmnlJmZxWm3D1R9p_BezV4BODdKlWl9rav-5-8nGhBZA);
    }#album .container .row .pic:nth-child(6){
        background-image: url(https://lh3.googleusercontent.com/proxy/NrSH7X6QtlyNHZ9_KuuFRXNmNk7XO0znReU3LxX2vSbhdWguVWN9wCv0rdSfQ8qya10d8BafbtxoEfmMBHUayqNCoZGeSDPGsZn0bE7cxll6_7Vg2qlPvKMTL-TWfSAU9se046V4igDd_945z5ejp8Iq0Go9P8XyP-RlpsNQ);
    }
    #album .container .row .pic:nth-child(7){
        background-image: url(https://www.clarionguatemala.com/media/k2/items/cache/e2bf3b11df0b872112757f1c2fee6e32_L.jpg);
    }
    #album .container .row .pic:nth-child(8){
        background-image: url(https://www.guatemala.com/fotos/2020/02/Hotel-Vista-Quince-Guatemala-tiene-el-primer-Restaurante-Giratorio-de-Centroamerica-885x500.jpg);
    }
    #album .container .row .pic:nth-child(9){
        background-image: url(https://assets-news.housing.com/news/wp-content/uploads/2020/06/23163910/What-are-penthouses-and-how-popular-are-they-in-India-FB-1200x700-compressed.jpg);
    }
    #album .container .row .pic:nth-child(10){
        background-image: url(https://media.inmobalia.com/imgV1/B8vEv5Xh_VThvnEqMx4G0ZxU_YC_pCgmETwWNQKyeMqLb9Afo_WSoi~kcK5mwaepLz96AHEmAzWJQblCNhundVwSXYuTJ46zcl7jiVvTms8M4eLsBNT_M5IePqajfhTOCFfDOEuztkXEkPmh9abKEw3pYkqW_JkojONjY3du5noe4CjFZRE~9hzWgLPuqLReDMuHVm8tFu58T6Wbw06A6~4sos7KG_DUa41_SQ5Pth4wyyGWUFOONf60LjShmPKvdq8l42Iw0TA_SNZ_L0ZRTVGfSM8jVaLxyJo0ZQtVvrSbzfDrSxXI8ae_9MAVPfJjwKd_9eG7mvx~.jpg);
    }
    #album .container .row .pic:nth-child(11){
        background-image: url(https://www.thetimes.co.uk/imageserver/image/%2Fmethode%2Ftimes%2Fprod%2Fweb%2Fbin%2F455b7bfc-2799-11e8-bb7d-85110f4c5caa.jpg?crop=1688%2C949%2C0%2C88&resize=1180);
    }
</style>