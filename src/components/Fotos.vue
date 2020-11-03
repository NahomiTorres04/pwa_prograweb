<template>
   <div id="fotos" class="text-center">
      <div class="container">
        <div class="row">
          <div class="twelve columns txt">
            <h3>Lorem, ipsum dolor.</h3>
          </div>
        </div>
        <div class="row">
          <div class="six columns foto">
            <h2>Lorem, ipsum.</h2>
          </div>
          <div class="six columns foto">
            <h2>Lorem, ipsum.</h2>
          </div>
        </div>
        <div class="row">
          <div class="six columns foto">
            <h2>Lorem, ipsum.</h2>
          </div>
          <div class="six columns foto">
            <h2>Lorem, ipsum.</h2>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    name: 'Fotos'
}
</script>

<style scoped>
    #fotos{
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #fotos .container{
        min-width: 80%;
        height: 80%;
    }
    #fotos .container .row .txt h3{
        font-family: var(--fontsubt);
        font-size: 35px;
    }
    #fotos .container .row .foto{
        height: 500px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #fotos .container .row .foto h2{
        padding: 30px 65px;
          background-color: var(--gradientbanner);
          backdrop-filter: blur(10px);
          font-family: var(--fontcontent);
          font-size: 28px;
          font-weight: bold;
    }
    #fotos .container .row:nth-child(1){
        height: 20%;
    }
    #fotos .container .row:nth-child(1) .txt h3{
        margin-top: 35px;
    }
    #fotos .container .row:nth-child(2){
        height: 100%;
        margin: 30px;
    }
    #fotos .container .row:nth-child(2) .foto:nth-child(1){
        background-image: url(https://www.guatemala.com/fotos/2020/02/Hotel-Vista-Quince-Guatemala-tiene-el-primer-Restaurante-Giratorio-de-Centroamerica-885x500.jpg);
    }
    #fotos .container .row:nth-child(2) .foto:nth-child(2){
        background-image: url(https://assets-news.housing.com/news/wp-content/uploads/2020/06/23163910/What-are-penthouses-and-how-popular-are-they-in-India-FB-1200x700-compressed.jpg);
    }
    #fotos .container .row:nth-child(3){
        height: 100%;
        margin: 30px;
    }
    #fotos .container .row:nth-child(3) .foto:nth-child(1){
        background-image: url(https://media.inmobalia.com/imgV1/B8vEv5Xh_VThvnEqMx4G0ZxU_YC_pCgmETwWNQKyeMqLb9Afo_WSoi~kcK5mwaepLz96AHEmAzWJQblCNhundVwSXYuTJ46zcl7jiVvTms8M4eLsBNT_M5IePqajfhTOCFfDOEuztkXEkPmh9abKEw3pYkqW_JkojONjY3du5noe4CjFZRE~9hzWgLPuqLReDMuHVm8tFu58T6Wbw06A6~4sos7KG_DUa41_SQ5Pth4wyyGWUFOONf60LjShmPKvdq8l42Iw0TA_SNZ_L0ZRTVGfSM8jVaLxyJo0ZQtVvrSbzfDrSxXI8ae_9MAVPfJjwKd_9eG7mvx~.jpg);
    }
    #fotos .container .row:nth-child(3) .foto:nth-child(2){
        background-image: url(https://www.thetimes.co.uk/imageserver/image/%2Fmethode%2Ftimes%2Fprod%2Fweb%2Fbin%2F455b7bfc-2799-11e8-bb7d-85110f4c5caa.jpg?crop=1688%2C949%2C0%2C88&resize=1180);
    }


</style>