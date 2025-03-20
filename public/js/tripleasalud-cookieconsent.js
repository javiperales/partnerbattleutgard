var cc = initCookieConsent();


var cookie = '🍪';

// run plugin with config object
cc.run({
    current_lang : 'en',
    autoclear_cookies : true,                   // default: false
    cookie_name: 'cc_cookie',             // default: 'cc_cookie'
    cookie_expiration : 1,                    // default: 182
    page_scripts: true,                         // default: false

    // auto_language: null,                     // default: null; could also be 'browser' or 'document'
    // autorun: true,                           // default: true
    // delay: 0,                                // default: 0
    // force_consent: false,
    // hide_from_bots: false,                   // default: false
    // remove_cookie_tables: false              // default: false
    // cookie_domain: location.hostname,        // default: current domain
    // cookie_path: "/",                        // default: root
    // cookie_same_site: "Lax",
    // use_rfc_cookie: false,                   // default: false
    // revision: 0,                             // default: 0

    gui_options: {
        consent_modal: {
            layout: 'box',                      // box,cloud,bar
            position: 'bottom right',           // bottom,middle,top + left,right,center
            transition: 'slide'                 // zoom,slide
        },
        settings_modal: {
            layout: 'box',                      // box,bar
            // position: 'left',                // right,left (available only if bar layout selected)
            transition: 'slide'                 // zoom,slide
        }
    },

    onFirstAction: function(){
        console.log('onFirstAction fired');
    },

    onAccept: function (cookie) {
        console.log('onAccept fired ...');
    },

    onChange: function (cookie, changed_preferences) {
        console.log('onChange fired ...');
    },

    languages: {
        'en': {
            consent_modal: {
                title:  ' Aviso de cookies',
                description: 'Utilizamos cookies propias necesarias y funcionales para garantizar el correcto funcionamiento de esta web;  Puede aceptar todas las cookies, denegar las no esenciales o configurar sus preferencias aquí. Más información en nuestra Política de Cookies. <button type="button" data-cc="c-settings" class="cc-link">Configurar sus preferencias aqui</button>',
                primary_btn: {
                    text: 'Aceptar todo',
                    role: 'accept_all'              
                },
                secondary_btn: {
                    text: 'Rechazar no esenciales',
                    role: 'accept_necessary'        
                }
            },
            settings_modal: {
                title: 'Configuración de cookies',
                save_settings_btn: 'Guardar preferencias',
                accept_all_btn: 'Aceptar todo',
                reject_all_btn: 'Rechazar todo',
                close_btn_label: 'Cerrar',
                cookie_table_headers: [
                    {col1: 'Name'},
                    {col2: 'Domain'},
                    {col3: 'Expiration'},
                    {col4: 'Description'}
                ],
                blocks: [
                    {
                        title: '¿Qué son las cookies?',
                        description: 'Una “cookie” es un simple archivo de texto almacenado por el servidor de un sitio web en su ordenador o dispositivo móvil al que solo el propio servidor puede acceder y leer los contenidos de dicho archivo. Nuestra web utiliza una  de las siguientes cookies.'
                    }, {
                        title: 'Cookies necesarias',
                        description: 'Estas cookies son esenciales para el correcto funcionamiento de mi sitio web. Sin estas cookies, el sitio web no funcionaría correctamente. <a class="cc-link" href="https://utgard PartnersBattle.com/politica-de-cookies.php">Mas información</a>.',
                        toggle: {
                            value: 'necessary',
                            enabled: true,
                            readonly: true       
                        }
                    }, {
                        title: 'Cookies funionales',
                        description: 'Este tipo de “cookies” aumentan la funcionalidad del sitio web guardando sus preferencias. Por ejemplo, una “cookie” se puede utilizar para cambiar el idioma por defecto.<a class="cc-link" href="https://utgard PartnersBattle.com/politica-de-cookies.php">Mas información</a>.',
                        toggle: {
                            value: 'targeting',
                            enabled: false,
                            readonly: false
                        }
                    }, {
                        title: 'Mas informacion',
                        description: 'Para la información completa sobre la política de cookies puede acceder aquí y para la política de privacidad, <a class="cc-link" href="https://utgard PartnersBattle.com/politica-de-privacidad.php">aqui</a>.',
                    }
                ]
            }
        }
    }

});