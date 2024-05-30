<div class="has-background-danger-85 is-fullwidth is-centered"  style="
background: linear-gradient(0deg, rgba(123,46,195,1) 1%, rgba(214,64,236,1) 6%, rgba(222,98,240,1) 9%, rgba(234,108,252,1) 14%, rgba(224,114,240,1) 18%, rgba(232,146,245,1) 31%, rgba(116,141,221,1) 45%, rgba(61,120,214,1) 52%, rgba(56,136,209,1) 57%, rgba(43,165,236,1) 63%, rgba(22,157,214,1) 70%, rgba(40,167,214,1) 80%, rgba(40,192,228,1) 86%);" >
<div class="container-is-full">
    <div class="columns is-centered">
        <div class="column is-full has-background">
            <h1 class="title is-1 has-text-centered has-text-link-light">FRESH</h1>
            <p class="subtitle is-4 has-text-centered has-text-link">Simulador de VENDING MACHINE</p>
            <p class="subtitle is-4 has-text-centered has-text-link"></p>
            
        </div>
    </div>
</div>
<section class="hero is-primary-light is-medium is-centered">
    <div class="hero-head">
    </div>
    <div class="hero-body is-fullwidth is-centered">
        <div class="container has-text-centered">
            <p class="title">ELIGE UN UN TAMAÑO</p>
            <div class="columns is-mobile is-centered">
                <div class="column is-one-fifth"></div>
                <div class="column is-one-third">
                    <figure class="image is-128x128 ">
                        <img src="imgs/<?php echo $_SESSION['sabor']; ?>c.png">
                    </figure>  
                </div>
                <div class="column is-one-third">
                    <figure class="image is-128x128 ">
                        <img src="imgs/<?php echo $_SESSION['sabor']; ?>m.png">
                    </figure>  
                </div>
                <div class="column is-one-third">    
                    <figure class="image is-128x128 ">
                        <img src="imgs/<?php echo $_SESSION['sabor']; ?>g.png">
                    </figure>  
                </div>
            </div>
            <progress class="progress is-large is-primary" max="100">1000000%</progress>

        </div>
    </div>
    <div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth ">
            <div class="container">
                <ul>
                    <li><a href="inicio.php?do=hielo&tamano=c">Chico</a></li>
                    <li><a href="inicio.php?do=hielo&tamano=m">Mediano</a></li>
                    <li><a href="inicio.php?do=hielo&tamano=g">Grande</a></li>
                </ul>
            </div>
        </nav>
    </div>
</section>
</div>
</body>
</html>