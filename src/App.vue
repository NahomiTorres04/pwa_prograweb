<template>
  <div id="app">
    <header>
      <Logo></Logo>
      <Menu></Menu>
    </header>
    <main>
      <Banner></Banner>
      <Descripcion></Descripcion>
      <Cards></Cards>
      <Cards></Cards>
      <Registro></Registro>
      <Fotos></Fotos>
      <Album></Album>
      <Footer></Footer>
    </main>
  </div>
</template>

<script>
import Menu from './components/Menu';
import Logo from './components/Logo';
import Banner from './components/Banner'
import Descripcion from './components/Descripcion'
import Cards from './components/Cards'
import Registro from './components/Registro'
import Fotos from './components/Fotos'
import Album from './components/Album'
import Footer from './components/Footer'

export default {
  name: 'app',
  components: {
    Menu,
    Logo,
    Banner,
    Descripcion,
    Cards,
    Registro,
    Fotos,
    Album,
    Footer
  }
}
</script>

<style>
:root{
  
  --bckg: #fdf9f6;
  --bckgnav: #ffffff;
  --bckgreg: #E5EAF0;
  --bckglog: #ffffff;
  --fontc: #2A465B;
  --colors: #B3B47A;
  --fontcnav: #fdf9f7;
  --gradientbanner: rgba(255, 255, 255, 0.6);

  --fontt2: "Homemade Apple", cursive;
  --fontsubt: "Sansita Swashed", cursive;
  --fontcontent: "Source Code Pro", monospace;
}

body {
  margin: 0;
  padding: 0;
}
header{
  margin: 0;
  padding: 0;
}
.text-center {
  text-align: center;
}

</style>
