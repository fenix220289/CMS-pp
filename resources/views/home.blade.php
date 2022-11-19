<x-guest-layout>
    
    <header class="hero " >
        <nav class="nav container">
            <div class="nav_logo">
                <h2 class="nav_title">CODELAB<h2> 
            </div>
            <ul class="nav_link nav_link--menu">
                <li class="nav_items">
                    <a href="#" class="nav_links">Inicio</a>
                </li>
                <li class="nav_items">
                    <a href="#" class="nav_links">Acerca de</a>
                </li>
                <li class="nav_items">
                    <a href="#" class="nav_links">Contacto</a>
                </li>
                <li class="nav_items">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="nav_links">Dashboard</a>
                        @else
                             <a href="{{ route('login') }}" class="nav_links">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 nav_links">Register</a>
                            @endif
                        @endauth
                    @endif

                </li>

                <img alt="" src="{{ Vite::asset('resources/img/close.svg') }}" class="nav_close">
            </ul>
            <div class="nav_menu">
                <img alt="" src="{{ Vite::asset('resources/img/menu.svg') }}" class="nav_img">
            </div>
        </nav>

        <section class="hero_container container">
         <h1 class="hero_tittle">¿Quieres Posicionarte en el Mercado Digital?</h1>
         <p class="hero_paragraph">Nuestra empresa tiene personal calificado en el desarrollo web , app y Marketing Digital para plasmar tus ideas,
         lograr las metas y objetivos propuestos por tu organización o empresa.</p>
         <a href="#" class="cta">Mas Información</a>   
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">¿Que quieres hacer para mejorar tu negocio?</h2>
            <p class="about_paragraph">¿Deseas realizar un programa para el manejo de información de tu empresa, Marketing en Redes sociales, Mejorar tus diseños? o ¿Quieres un Sitio web para dar a conocer tu empresa ? Al elegirnos te ofrecemos</p>

            <div class="about_main">
                <article class="about_icons">
                    <img src="{{ Vite::asset('resources/img/verificacion.svg') }}" class="about_icon"/>
                    <h3 class="about_title">Personal Calificado</h3>
                    <p class="about_paragrah">Todo nuestro equipo esta conformado por personal calificado en Programación, Marketing, Diseño Gráfico con herramientas de ultima generación.
                    </p>
                </article>

                <article class="about_icons">
                    <img src="{{ Vite::asset('resources/img/device.svg') }}" class="about_icon"/>
                    <h3 class="about_title">Compatibilidad</h3>
                    <p class="about_paragrah">Alto grado de compatibilidad con todos los dispositivos (tablets, Mac, Android, entre otros), sin que se vea afectado el diseño o sus funcionalidades.
                    </p>
                </article>
                
                <article class="about_icons">
                    <img src="{{ Vite::asset('resources/img/tiempo.svg') }}" class="about_icon"/>
                    <h3 class="about_title">Responsabilidad</h3>
                    <p class="about_paragrah">Nuestro motor principal es la responsabilidad y puntualidad en la entrega de proyectos solicitados por las empresas.
                    </p>
                </article>
            </div>
        </section> 
        
        <section class="knowledge">
            <div class="container knowledge_container ">
                <div class="knowledge_texts">
                <h2 class="subtitle">Patrocina tu empresa en Redes Sociales. ¡Mejora tu alcance!</h2>
                <p class="knowledge_paragraph">Hoy en día las redes sociales son una de las herramientas mas factibles para darse a conocer y alcanzar una cartera de clientes amplia, desde la comodidad de tu oficina. No esperes más</p>
                <a href="#" class="cta">¡Cotiza Ya!</a>
                </div>

                <figure class="knowledge_picture">
                    <img class="knowledge_img" src="{{ Vite::asset('resources/img/mac.png.png') }}"/>
                </figure>
                
            </div>
        </section>

        <section class="price container">
            <h2 class="subtitle">Obten el paquete de tu preferencia</h2>

            <div class="price_table">
                <div class="price_element">
                    <p class="price_name">Administraciòn de Redes Sociales</p>
                    <h3 class="price_price">Precio de Promoción</h3>
                

                <div class="price_items">
                    <p class="price_features">Instagram</p>
                    <p class="price_features">Facebook</p>
                    <p class="price_features">Tiktok</p>
                    <p class="price_features">Twiter</p>
                </div>
            
                <a href="#" class="price_cta">Solicitar Oferta</a>
            
            </div>

            <div class="price_element price_element--best">
                <p class="price_name">Sistema Web</p>
                <h3 class="price_price">Precio de Promoción</h3>
            

                <div class="price_items">
                    <p class="price_features">Alojamiento Web</p>
                    <p class="price_features">Diseño</p>
                    <p class="price_features">Mantenimiento</p>
                    <p class="price_features">hosting .com</p>
                </div>
            
                <a href="#" class="price_cta">Solicitar Oferta</a>
            </div>

            <div class="price_element">
                <p class="price_name">Programas Empresariales</p>
                <h3 class="price_price">Precio de Promoción</h3>
            

                <div class="price_items">
                    <p class="price_features">Programas (Facturaciòn, inventarios,Registros)</p>
                    <p class="price_features">Apps</p>
                    <p class="price_features">Sistemas Web App</p>
                    <p class="price_features">otros...</p>
                </div>
            
                <a href="#" class="price_cta">Solicitar Oferta</a>
            </div>
        
        </section>
        
        <section class="advantage">
            <div class="advantage__container container">
                <img src="{{ Vite::asset('resources/img/leftarrow.svg') }}" class="advantage__arrow" id="before"/>

                <section class="advantage__body advantage__body--show" data-id="1">
                    <div class="advantage__texts">
                        <h2 class="subtitle">Las redes sociales <span class="advantage__course">El mundo en tus manos</span></h2>
                        <p class="advantage__review">Las redes sociales se han convertido en una forma de entretenimiento para muchos actualmente, y para otros en su medio de trabajo, pues son una de las principales herramientas de marketing y ventas que usan las empresas para hacer crecer sus negocios.</p>

                    </div>

                    <figure class="advantage__picture">
                        <img src="{{ Vite::asset('resources/img/firmbee-com-DfMMzzi3rmg-unsplash (1).jpg') }}" class="advantage__img"/>
                    </figure>
                </section>

                <section class="advantage__body" data-id="2">
                    <div class="advantage__texts">
                        <h2 class="subtitle">El Marketing Digital <span class="advantage__course">La nueva era del Comercio.</span></h2>
                        <p class="advantage__review">"Si su negocio no está en internet, su negocio no existe" está frase que pronunció en una ocasión Bill Gates, se ha convertido en todo un axioma. Los consumidores ya no conciben la idea de que una marca o producto no aparezca en Internet, todo un reto para los expertos en marketing digital.</p>
                    </div>

                    <figure class="advantage__picture">
                        <img src="{{ Vite::asset('resources/img/campaign-creators-gMsnXqILjp4-unsplash (1).jpg') }}" class="advantage__img">
                    </figure>
                </section>

                <section class="advantage__body" data-id="3">
                    <div class="advantage__texts">
                        <h2 class="subtitle">Implementación de Sistemas de Información <span class="advantage__course">Ventajas</span></h2>
                        <p class="advantage__review">Control más efectivo de las actividades de la organización. Integración de las diferentes áreas que conforman la organización. Integración de nuevas tecnologías y herramientas de vanguardia. Ayuda a incrementar la efectividad en la operación de las empresas.</p>
                    </div>

                    <figure class="advantage__picture">
                        <img src="{{ Vite::asset('resources/img/jason-goodman-Oalh2MojUuk-unsplash.jpg') }}" class="advantage__img">
                    </figure>
                </section>

                <section class="advantage__body" data-id="4">
                    <div class="advantage__texts">
                        <h2 class="subtitle">Servicios en Codelab Venezuela, <span class="advantage__course">Tu mejor Opción</span></h2>
                        <p class="advantage__review">Nosotros como empresa te damos la oportunidad de poder diseñar e implementar herramientas que permitan potenciar el alcance de tu organización según tus necesidades, no esperes más y comunicate con nosotros para mayor información</p>
                    </div>

                    <figure class="advantage__picture">
                        <img src="{{ Vite::asset('resources/img/brooke-cagle-g1Kr4Ozfoac-unsplash (1).jpg') }}" class="advantage__img">
                    </figure>
                </section>


                <img src="{{ Vite::asset('resources/img/rigtharrow.svg') }}" class="advantage__arrow" id="next">
            </div>
        </section>

        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">En esta sección encontrarás las preguntas mas frecuentes que pueden presentarse al momento de contratar nuestros servicios</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Existe Confidencialidad en los datos Suministrados?
                            <span class="questions__arrow">
                                <img src="{{ Vite::asset('resources/img/arrow.svg') }}" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Si. Nuetra objetivo esta orientado a la sastifacción de nuestros contratantes y el alcance de sus metas, donde nuestro equipo de Profesionales maneja toda la información que usted suministre  como extrictamente confidencial</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Puedo hacer que crezca el alcance de mi empresa?
                            <span class="questions__arrow">
                                <img src="{{ Vite::asset('resources/img/arrow.svg') }}" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">
                            Si. Muchas veces, el cliente puede tener muy buenas ideas que con la ayuda adecuada y los conocimientos necesitados para el desarrollo de la misma, puede generar muy buenos resultados.
                        </p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Si adquiero varios servicios existen Descuentos o Promociones?
                            <span class="questions__arrow">
                                <img src="{{ Vite::asset('resources/img/arrow.svg') }}" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">Si. Cuando un cliente quiere adquirir varios servicios con nosotros, se dará una promoción atractiva para que pueda gozar de los beneficios que nosotros como empresa le podemos ofrecer.</p>
                    </div>
                </article>
            </section>
        </section>

    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">CODELAB VENEZUELA C.A.</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>

            <form class="footer__form" action="https://formspree.io/f/mknkkrkj" method="POST">
                <h2 class="footer__newsletter">Suscribete a la newsletter</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                    <input type="submit" value="Registrate" class="footer__submit">
                </div>
            </form>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="{{ Vite::asset('resources/img/face.svg') }}" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="{{ Vite::asset('resources/img/instagram.svg') }}" class="footer__img"></a>
                <a href="#" class="footer__icons"><img src="{{ Vite::asset('resources/img/youtube.svg') }}" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">Derechos reservados &copy; Codelab Venezuela C.A</h3>
        </section>
    </footer>


    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
    
</x-guest-layout>