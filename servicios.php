<?php include("head.php"); ?>

<?php include("header.php"); ?>


<section>
    <div class="container__services">
        <div class="wrapper_service">
    <h1>SERVICIOS</h1>
    <div class="foto_services">
    <img src="/web-img/images/escritorio_minimalista.jpg" alt="Espacio seguro Terapia cognitivo conductual">
</div>

<div class="servicios_help">

<h2>¿Cómo puedo ayudarte?</h2>
    <p class="font-size-21"> 
    Ofrezco <strong>terapia individual</strong> para adultos.
    </p>
    <p class="font-size-21">
    Mis áreas de especialización incluyen:
    </p>
    <div class="listado_help">
        <ul class="lista_fit">
            <li>Ansiedad y bajo estado de ánimo</li>
            <li>Baja autoestima y autoimagen negativa</li>
            <li>Trauma y dificultades en las relaciones de apego</li>
            <li>Adicciones a sustancias</li>
            <li>Proceso de duelo</li>
        </ul>

        <ul class="lista_fit">
            <li>Maltrato y abuso</li>
            <li>Crecimiento personal</li>
            <li>Autoconocimiento y autocuidado</li>
            <li>Inseguridades, afrontamiento y resolución de conflictos</li>
            <li>Problemas de sueño</li>
        </ul>
    </div>
</div>
</div>
<div class="section_help">
    <div class="width padding">

   
<h1 >
Si no sabes exactamente cómo describir tu malestar,<b> está bien</b>.
</h1>
<p class="font-size-20 interlineado">
No necesitas tener un nombre específico para lo que sientes.
</p>

</div>
</div>
<div class="servicios_help width">
    <p class="font-size-21">
    Trabajo con un enfoque <strong>flexible y personalizado</strong>, adaptado a cada persona y sus necesidades.
    </p>
    <p class="font-size-21">
    Entre las metodologías que utilizo se encuentran:
    </p>
    <ul class="flexible_work">
        <li>Psicoterapia Integrativa</li>
        <li>Terapia de Reprocesamiento y Desensibilización a través del Movimiento Ocular (EMDR)</li>
        <li>Terapia Cognitivo-Conductual (TCC)</li>
        <li>Terapia de Aceptación y Compromiso (ACT)</li>
        <li>Mindfulness</li>
        <li>Terapia Basada en los Sistemas de Familia Interna (IFS)</li>
    </ul>
</div>
<div class="aristoteles">
    <div class="wrapper">
    <div class="text-aristoteles">  
<h1>
     <i>"No se puede desatar un nudo, sin saber cómo está hecho" - Aristóteles</i>
</h1>
</div>
<div class="img-nudo">


<img class="nudo" src="/web-img/images/nudo.jpg" alt="Desata un nudo">
</div>    
</div>
</div>
<div class="find_space width padding">
    <p class="font-size-21">
        Cada sesión es un <b> espacio seguro y confidencial </b> donde podrás explorar y trabajar tus dificultades.    </p>
    <div class="table">
        <div id="time">
        <p class="font-size-20">
        Duración de la sesión 1 hora
        </p>
            <img class="icon_services" src="/web-img/icons/reloj.svg" alt="Sesion de 1hora">
        </div>
        <div id="price">
        <p class="font-size-20">
        Precio de la sesión 70€
        </p>
        <img class="icon_services" src="/web-img/icons/ecology_hands.svg" alt="Precio de la sesion 70€">
        </div>
        <div id="place">
        <p class="font-size-20">
        Desde donde quieras
        </p>
        <img class="icon_services" src="/web-img/icons/internet.svg" alt="Desde donde quieras">
       </div>
    </div>


<a href="/contacto"> <p class="btn-reservar">
                Reservar        
           </p>
           </a>
           </div>
</div>

<div class="container__reviews">
<?php include_once( "./web-content/reviews.php" ); ?>
  
        
    <?php foreach( $reviews as $review ) : ?>
        <div class="card">
    <div class="stars">
   
        <?php 
    for ($i = 1; $i <= $review["puntuacion"]; $i++) { 
        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
        </svg>';
        }
    ?>
      
    </div>

    <div class="infos">
      <p class="description">
      <?=$review["comentario"]?>
      </p>
  </div>

  <div class="author">
  <?=$review["nombre"]?>
  </div>
 </div>
<?php endforeach; ?>


    </div>

    <a href="https://g.page/r/CV0V7C8o5vEoEAE/review"> <p class="btn-review">
                Puedes aportar tu granito aquí
           </p>
           </a>

</section>

<?php include("footer.php") ?>