<template>
  <div id="Logo" class="text-center">
      <div class="container">
        <div class="row">
          <div class="twelve columns item">
            <h1>Hotel Confortable</h1>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    name: "Logo"
}
</script>

<style scoped>
    #Logo {
        background-color: var(--bckglog);
        }
    .container .row .item {
        padding: 45px 0;
      }
    .container .row .item h1 {
          font-family: var(--fontt2);
          font-size: 45px;
          color: var(--colors);
          font-weight: bolder;
        }
    .container .row .item p {
          font-family: var(--fontcontent);
          font-size: 15px;
          color: var(--fontc);
          margin-bottom: 0;
        }
</style>