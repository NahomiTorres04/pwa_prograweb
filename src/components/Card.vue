<template>
  <div class="three columns cat">
            <div class="imgBox">
              <img :src="place.img_source" alt="">
              <h4>{{place.title}}</h4>
            </div>
            <p>{{place.description}}</p>
            <a href=""><i class="fas fa-star"></i> {{score}} </a>
            <span class="like" @click="addScore()"><i class="far fa-thumbs-up"></i> Like </span>
          </div>
</template>

<script>
export default {
    name:'Card',
    data(){
        return{
            rated: false
        }
    },
    methods: {
        addScore(){
            if(this.rated)
                this.score++;
            
            this.rated = true;
        }
    },
    props: {
        place: {
            type: [Object],
            require: true,
            default: {
                score: 0,
                title: 'Lorem ipsasdsfjkja',
                description: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur rem tenetur est aspernatur neque quisquam?',
                img_source: 'https://i.pinimg.com/474x/c9/50/f3/c950f375a48aa268f9843beacbbbb3a3.jpg'
            }
        }
    }
}
</script>

<style scoped>
        #categorias .container .row .cat{
          width: 300px;
        height: 360px;
        margin-top: 5px;
        margin-bottom: 5px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    #categorias .container .row .cat .imgBox {
      height: 80%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #categorias .container .row .cat .imgBox img{
      height: 80%;
      width: 100%;
    }
    #categorias .container .row .cat .imgBox h4{
        padding: 10px 35px;
        position: absolute;
        z-index: 100;
        background-color: var(--gradientbanner);
        backdrop-filter: blur(10px);
        font-family: var(--fontcontent);
        font-size: 22px;
        font-weight: bold;
    }
    #categorias .container .row .cat p{
      margin: 5px 0;
    }
    #categorias .container .row .cat a{
      text-decoration: none;
      margin-right: 10px;
      color: black;
    }

    #categorias .container .row .cat a i{
      color: yellow;
    }
    #categorias .container .row .cat span:hover{
        cursor: pointer;
    }
    #categorias .container .row .cat span i{
      color: blue;
    }
    @media only screen and (max-width: 1200px) {
        #categorias .container .row .cat .imgBox h4{
        font-size: 15px;}
    }

</style>