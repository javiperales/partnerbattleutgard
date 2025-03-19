<?php include("head.php"); ?>

<?php include("header.php"); ?>


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
<?php include("footer.php"); ?>