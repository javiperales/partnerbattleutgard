<?php include("head.php"); ?>

<?php include("header.php"); ?>


<section>
<?php include_once( "./web-content/faqs.php" ); ?>
    <div class="faq">
        <h2>Preguntas frecuentes</h2>
    <?php foreach( $faqs as $faq ) : ?>
            <h3 class="question u-title-line"><?=$faq["pregunta"]?><img class="icon_arrow" src="/web-img/icons/arrow.svg" alt=""></h3>
            <p class="answer"  hidden="true"><?=$faq["respuesta"]?></p>
        <?php endforeach; ?>
    </div>
</section>



<script>
			document.addEventListener('DOMContentLoaded', function() {
				const questions = document.querySelectorAll('h3.question');
				

				questions.forEach((question)=>{
					question.addEventListener('click', function(){
						const answer = question.nextElementSibling;
						const arrow = question.querySelector('img.icon_arrow');
						arrow.classList.add('rotate');
						answer.hidden = !answer.hidden;

						if(answer.hidden){
							arrow.classList.remove('rotate');
						}
					});
				});
			});
		

		</script>



<?php include("footer.php"); ?>