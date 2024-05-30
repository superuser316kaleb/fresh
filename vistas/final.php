<div class="has-background-primary is-fullwidth is centered" style="
background: linear-gradient(0deg, rgba(123,46,195,1) 1%, rgba(214,64,236,1) 6%, rgba(222,98,240,1) 9%, rgba(234,108,252,1) 14%, rgba(224,114,240,1) 18%, rgba(232,146,245,1) 31%, rgba(116,141,221,1) 45%, rgba(61,120,214,1) 52%, rgba(56,136,209,1) 57%, rgba(43,165,236,1) 63%, rgba(22,157,214,1) 70%, rgba(40,167,214,1) 80%, rgba(40,192,228,1) 86%);" >
<div class="container-is-full">
  <div class="columns is-centered">
    <div class="column is-full">
      <h1 class="title is-1 has-text-centered has-text-danger-light">FRESH</h1>
      <p class="subtitle is-4 has-text-centered has-text-link">Simulador de VENDING MACHINE</p>
    </div>
  </div>
</div>
<section class="hero is-primary-light">
  <div class="hero-body is-fullwidth">
    <div class="container has-text-centered">
      <p class="title">SU BEBIDA</p>
    </div>
    <div class="container has-text-centered">
      <figure class="image is-128x128 is-inline-block">
        <img src="imgs/<?php echo $_SESSION['sabor'].$_SESSION['tamano'].$_SESSION['hielo']; ?>.png">
      </figure>
    </div>
    <section class="section is-medium">
      <h1 class="title has-text-centered has-text-primary-60">GRACIAS POR TU COMPRA</h1>
    </section>
  </div>
  <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth ">
      <div class="container">
        <ul>
          <li class="is-active"><a href="inicio.php?do=reiniciar">REINICIAR SIMULACIÓN</a></li>
          <li><a href="/about:blank" >SALIR</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
</div>
