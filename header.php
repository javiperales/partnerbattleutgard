<header class="header">
    <div class="wrapper_header">
        <div class="logo"><a href="/index"><img src="./web-img/icons/icono.png" alt="UTGARD Partners BATTLE"></a></div>
            <h1 class="dnone">UTGARD Partners BATTLE</h1>
    <div class="nav-container-menu"><img class="icon_contact_menu" src="/web-img/icons/menu.svg" alt="UTGARD Partners BATTLE"></div>
    <div class="nav-container">
        <ul class="nav-menu">
            <li><a href="/index">Inicio</a></li>
            <li><a href="/ubicacion">Ubicacion</a></li>
            <li><a href="#Inscribete">Inscribete</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
    </div>
    </div>
</header>

<script>
const menuIcon = document.querySelector('.icon_contact_menu');
const navContainer = document.querySelector('.nav-menu');


menuIcon.addEventListener('click', function() {
    
  navContainer.classList.toggle('active');
});
</script>