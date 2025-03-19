

    <section>
        <div class="container__index">
            <div class="text__index">
                    <h1 class="animate__backInDown"><strong> Utgard partner- Battle </strong></h1>
                   
                    <p>
                   Utgard Partner Battle 2025 te espera
                </p>
               
                <p>
                   Los dias 6 y 7 de Septiembre de 2025, te estaremos esperando en Utgard
                </p>
               
                
                <p>
                <a href="wodbusterarena.com"> <p class="btn-reservar">
                    Registrate aquí ahora      
                     </p>
                    </a>
                </p>
            </div>
            <div class="image__index">
                <img " src="./web-img/images/scaled_bn.jpeg"  alt="" loading="lazy">
                

            </div>


        </div>

        <div class="container__index">
            
        <div class="image__index">
        <img class="image__index" src="./web-img/images/sensacion_wod.jpeg" alt="l" loading="lazy">
        <p>
                <a href="wodbusterarena.com"> <p class="btn-reservar">
                    Registrate aquí ahora      
                     </p>
                    </a>
                </p>

            </div>
            <div class="image__index">
        <img class="image__index" src="./web-img/images/cinturon.jpeg" alt="l" loading="lazy">
        <p>
                <a href="wodbusterarena.com"> <p class="btn-reservar">
                    Registrate aquí ahora      
                     </p>
                    </a>
                </p>

            </div>
            <div class="image__index">
        <img class="image__index" src="./web-img/images/idem.jpeg" alt="l" loading="lazy">
        <p>
                <a href="wodbusterarena.com"> <p class="btn-reservar">
                    Registrate aquí ahora      
                     </p>
                    </a>
                </p>

            </div>
            <div class="image__index">
        <img class="image__index" src="./web-img/images/a_jump.jpeg" alt="l" loading="lazy">
        <p>
                <a href="wodbusterarena.com"> <p class="btn-reservar">
                    Registrate aquí ahora      
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
                <label for="disponibilidad">Disponibilidad:</label>
                <input type="text" id="disponibilidad" name="disponibilidad" required>
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
