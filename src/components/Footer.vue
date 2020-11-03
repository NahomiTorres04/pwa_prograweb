<template>
  <div id="contacto" class="text-center">
      <div class="container">
        <div class="row">
          <div class="four columns tarjeta">
            <input type="search" name="buscar" id="search" value="Buscar" />
          </div>
          <div class="four columns tarjeta">
            <h1>NT</h1>
          </div>
          <div class="four columns tarjeta">
            <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    name: 'Footer'
}
</script>

<style scoped>
    #contacto .container .row .tarjeta:nth-child(1) input{
        border: solid 1px var(--fontc);
        font-family: var(--fontcontent);
    }
    #contacto .container .row .tarjeta:nth-child(2) h1{
        font-family: var(--fontt2);
        font-size: 70px;
    }
    #contacto .container .row .tarjeta:nth-child(3) a{
         border-radius: 50%;
          background-color: var(--fontc);
          color: var(--bckgreg);
          display: inline-block;
          text-decoration: none;
          padding: 10px;
          width: 22px;
          transition: all 0.3s linear;
    }
    #contacto .container .row .tarjeta:nth-child(3) a:hover{
            background: var(--bckgreg);
            color: var(--fontc);
    }
</style>