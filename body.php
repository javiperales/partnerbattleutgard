

    <section>
    <h1 class="title new-rocker-regular"><strong> ¡Bienvenidos a la Utgard Partners Battle!</strong></h1>
        <div class="section_body">
       
            <div class="section_text">
                  
                   
                <p class="new-rocker-regular">
                   Utgard Partners Battle 2025 os espera.
                </p>
               
                <p>
                La Utgard Partners Battle es la competencia de cross training más emocionante del año, diseñada especialmente para equipos de dos. ¡Es hora de poner a prueba tu fuerza, resistencia, agilidad y trabajo en equipo! Forma tu pareja, prepárate para desafiar tus límites y demuestra que juntos son invencibles.
                </p>
               
                
                <p>
                <a href="https://arena.wodbuster.com/register.aspx?id=2617"> <p class="btn-reservar">
                    Registrate aquí ahora.      
                     </p>
                    </a>
                </p>
            </div>
            <div class="">
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

        <div class="">
        <div class="countdown-container">
        <h1 class="title_atras new-rocker-regular">SOLO QUEDAN:</h1>
        <div id="countdown" class="title">
            <span id="days" class="contador new-rocker-regular">00</span><span class="contador new-rocker-regular">D :</span>
            <span id="hours" class="contador new-rocker-regular">00</span><span class="contador new-rocker-regular">H :</span>
            <span id="minutes" class="contador new-rocker-regular">00</span><span class="contador new-rocker-regular">M :</span>
            <span id="seconds" class="contador new-rocker-regular">00</span><span class="contador new-rocker-regular">S</span>
        </div>
    </div>

    <script src="script.js"></script>

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
            <h2> ¿Donde será?</h2>
        <p>
           
            <br>
            Nuestra batalla tendra lugar en 2 ubicaciones confirmadas:
            <br>
            <div class="">
                <p>
                <a href=""> <p class="btn-reservar">
                  Plaza de toros Casetas(Zaragoza).
                     </p>
                    </a>
                </p>
                <p>
                <a href=""> <p class="btn-reservar">
                 Utgard Box Utebo(Zaragoza).
                     </p>
                    </a>
                </p>
                </div>
        </div>
        </p>
     
       </div>
       

        <div class="section_body">
        
            <div class="section_text"> 
                <h2>
                    CATEGORIAS
                </h2>
                <p>
                    RX,MASTER +75, INTERMEDIO Y SCALED.
                </p>
                <P>
                    DEL MISMO SEXO Y MIXTAS.
                </P>
                <p>
                <a href="wodbusterarena.com"> <p class="btn-reservar">
                    Contacto     
                     </p>
                    </a>
                </p>

            </div>
            <img class="" src="./web-img/images/a_jump.jpeg" alt="l" loading="lazy">
          
            
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
