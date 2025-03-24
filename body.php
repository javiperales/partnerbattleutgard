

    <section>
        <div class="container__index">
            <div class="text__index">
                    <h1 class="animate__backInDown"><strong> ¡Bienvenidos a la Utgard Partners Battle!</strong></h1>
                   
                    <p>
                   Utgard Partners Battle 2025 os espera 
                </p>
               
                <p>
                La Utgard Partners Battle es la competencia de cross training más emocionante del año, diseñada especialmente para equipos de dos. ¡Es hora de poner a prueba tu fuerza, resistencia, agilidad y trabajo en equipo! Forma tu pareja, prepárate para desafiar tus límites y demuestra que juntos son invencibles.
                </p>
               
                
                <p>
                <a href="https://arena.wodbuster.com/register.aspx?id=2617"> <p class="btn-reservar">
                    Registrate aquí ahora      
                     </p>
                    </a>
                </p>
            </div>
            <div class="image__index">
                <img " src="./web-img/images/scaled_bn.jpeg"  alt="" loading="lazy">
                

            </div>


        </div>

        <div >
            
        <div class="section_body">
        <img class="" src="./web-img/images/sensacion_wod.jpeg" alt="l" loading="lazy">
            <div class="section_text">
                    <p>
                    En esta competencia, los participantes competirán en una serie de desafíos físicos diseñados para poner a prueba cada aspecto de su rendimiento físico. Lo mejor de todo es que cada equipo será formado por dos personas, lo que significa que tendrás que trabajar en perfecta sincronía con tu compañero para superar cada prueba. ¡El verdadero espíritu de trabajo en equipo estará a la vista!
                    </p>
            </div>

        </div>
        
        <div class="section_body">
        <div class="section_text">
                <p>  
                La Utgard Partners Battle tiene categorías tanto para principiantes como para atletas avanzados, asegurando que todos tengan una competencia justa y desafiante, independientemente de su nivel. Desde movimientos básicos hasta ejercicios complejos, ¡hay algo para todos!
                </p>
            </div>
            <img class="" src="./web-img/images/cinturon.jpeg" alt="l" loading="lazy">
        </div>

        <div class="section_body">
        <img class="" src="./web-img/images/idem.jpeg" alt="l" loading="lazy">
        <div class="section_text">
        <p>
            ¿Donde será?
            <br>
            Nuestra batalla tendra lugar en 2 ubicaciones confirmadas.
            <br>
            La plaza de toros de Casetas (Zaragoza) y
            <br>
            En utgard Box Utebo(Zaragoza)
        </p>
       </div>
        <p>
                <a href=""> <p class="btn-reservar">
                    Ubicacion    
                     </p>
                    </a>
                </p>

        </div>

        <div class="section_body">
        <img class="" src="./web-img/images/a_jump.jpeg" alt="l" loading="lazy">
        <div class="section_text"> 
            <h2>
                CATEGORIOAS
            </h2>
        <p>
                <a href="wodbusterarena.com"> <p class="btn-reservar">
                    Contacto     
                     </p>
                    </a>
                </p>

            </div>

          
            
        </div>
       
    </section>
    <section class="section section-form">


    <div class="right-column">
        <form id="contactForm" action="email.php" method="POST">
            <h2 class="title-form">Contáctame</h2>
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="surname">Apellidos:</label>
                <input type="text" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="tel"  pattern="[0-9]{3}[0-9]{3}[0-9]{3}" required id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Motivo de la consulta:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>

            <label>
                <input type="checkbox" id="terms" name="terms" required>
              He leido y acepto el <a href="/avisos-legales">aviso legal</a> y la <a href="/politica-de-privacidad">política de privacidad</a>
            </label>
            <div id="termsError" style="color: red; display: none;">
                Debes aceptar los términos y condiciones para enviar el formulario.
            </div>

            <button type="submit" class="button">Enviar</button>
        </form>

        <script>
            document.getElementById('contactForm').addEventListener('submit', function(event) {
                const termsCheckbox = document.getElementById('terms');
                const termsError = document.getElementById('termsError');

                if (!termsCheckbox.checked) {
                    termsError.style.display = 'block'; // Muestra el mensaje de error
                    event.preventDefault(); // Evita el envío del formulario
                } else {
                    termsError.style.display = 'none';
                }
            });
        </script>
    </div>
</section>
