<?php include("head.php"); ?>

<?php include("header.php"); ?>

<section>
<h1 class="title">CONTACTO</h1>
    <div class="container__index">
   
        <div class="text__index">
            <h2>¿Te gustaría hablar conmigo?</h2>
            <p>
                Si sientes que es el momento de dar un paso hacia tu
                bienestar, estaré encantada de escucharte. Puedes
                contactarme a través del <strong>formulario de contacto</strong>, donde
                solo te pediré los datos esenciales para poder responderte
                lo antes posible.
            </p>
            
            <p>
                También estoy disponible por <strong>correo electrónico</strong> o
                <strong>WhatsApp</strong> para resolver cualquier duda que puedas tener
                antes de agendar tu primera sesión. La comunicación es un
                pilar fundamental en mi trabajo, por lo que cada consulta
                es respondida con atención y dedicación.
            </p>
            
            <p><a href= "mailto:info@utgard partnerBattle.com"><img class="icon_contact" src="/web-img/icons/email.svg" alt="">info@utgard partnerBattle.com </a></p>
            <p><a href="https://wa.me/34634634781"> <img class="icon_contact" src="/web-img/icons/whatsapp.svg" alt=""> +34634634781</a></p>
        </div>

        <div class="image__contact">
            <img src="./web-img/images/aran_pc.jpg" alt="Utgard partnerBattle | Psicologia online">

        </div>


    </div>
    <div>

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


<?php include("footer.php"); ?>