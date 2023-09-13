<?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $message = $_GET['message'];
            if ($message == 1) {
                $mensaje = '<div class="alerta exito"><p>Mensaje enviado correctamente</p></div>';
            } elseif ($message == 2) {
                $mensaje = '<div class="alerta error"><p>Error al enviar el mensaje</p></div>';
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Courgette&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="public/build/css/app.css" />

    <title>Invitación</title>
  </head>
  <body>
    <header class="header">
      <div class="contenedor contenido-header">
        <h1>Leonel & Yasmin</h1>
        <nav class="navegacion-principal">
          <a href="#inicio">Inicio</a>
          <a href="#galeria">Galería</a>
          <a href="#ubicacion">Ubicación</a>
          <a href="#deseos">Deseos</a>
        </nav>
      </div>
    </header>

    <div class="imagen-portada" id="inicio">
      <div class="overlay"></div>
      <picture class="pic">
        <img
          class="portada"
          src="https://invitacion-img.s3.amazonaws.com/portada.jpg"
          alt="texto entrada blog"
        />
      </picture>
    </div>
    <main class="main">
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>
      <section class="info" id="informacion">
        <p class="dia-llego">
          Llegó el día de decirnos <span class="si">Sí</span> para toda la
          vida...
        </p>
        <h2 class="date">¡Nos casamos!</h2>
        <div class="fondo-info">
          <img
            src="https://invitacion-img.s3.amazonaws.com/hoja6 (1).png"
            alt="hoja"
          />
        </div>
        <div class="nombres">
          <h3 class="content-nombres">Leonel<span>Ramírez Escobar</span></h3>
          <div class="andperson">
            <span class="content-andperson">&</span>
          </div>
          <h3 class="content-nombres">
            Yasmin<span>Quiñonez Chinchilla</span>
          </h3>
        </div>
        <h2 class="date">5 | Noviembre | 2023</h2>
        <h2 class="faltan">¡Faltan!</h2>
      </section>
      <section class="dias-juntos">
        <div id="clock">
          <div class="fecha">
            <div id="dias"></div>
            <p class="texto-fecha">D</p>
          </div>

          <div class="fecha">
            <div id="horas"></div>
            <p class="texto-fecha">H</p>
          </div>

          <div class="fecha">
            <div id="minutos"></div>
            <p class="texto-fecha">M</p>
          </div>

          <div class="fecha">
            <div id="segundos"></div>
            <p class="texto-fecha">S</p>
          </div>
        </div>
      </section>
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>

      <div class="textos-bi">
        <p>
          revístanse de amor, que es el lazo de la perfecta unión. Y que la paz
          de Cristo reine en sus corazones, porque con este propósito los llamó
          Dios a formar un solo cuerpo.
        </p>
        <!-- <p>dondequiera que tú vayas, yo iré; y dondequiera que tú vivas, yo viviré. Tu pueblo será mi pueblo y tu Dios será mi Dios.</p> -->
        <span>Colosenses 3:14-15</span>
      </div>

      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>

      <section id="galeria">
        <div
          style="
            --swiper-navigation-color: #fff;
            --swiper-pagination-color: #fff;
          "
          class="swiper mySwiper2"
          id="swip-ani"
        >
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen1.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen8.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen16.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen3.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen4.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen2.jpg" />
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div thumbsSlider="" class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen1.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen8.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen16.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen3.jpg" />
            </div>
            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen4.jpg" />
            </div>

            <div class="swiper-slide">
              <img src="https://invitacion-img.s3.amazonaws.com/imagen2.jpg" />
            </div>
          </div>
        </div>
      </section>
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>
      <section class="honores" id="ubicacion">
        <p>Con la bendición de Dios y la de nuestros padres</p>
        <div class="fondo-honores">
          <div class="cont-honores">
            <div class="nombres-honores">
              <h3>Leonel Ramirez <span class="andper">&</span></h3>
              <h3>Gladys Esperanza de Ramirez</h3>
            </div>
            <p class="separacion"></p>
            <div class="nombres-honores">
              <h3>Miguel Angel Quiñonez <span class="andper">&</span></h3>
              <h3>Mirna Ideth de Quiñonez</h3>
            </div>
          </div>
        </div>
        <p>Queremos invitarte a compartir el día de nuestra boda</p>
        <div class="lineas">
          <div class="ceremonia">
            <div class="liston">
              <img
                src="https://invitacion-img.s3.amazonaws.com/liston.png"
                alt=""
              />
            </div>
            <div class="fecha-titulo">
              <span class="content-titulo">Fecha</span>
            </div>
            <h2>Sábado <span>05 Noviembre 2023</span></h2>
            <h2>02:30 P.M.</h2>

            <div class="social"  id="agregar-evento">
              <a
                href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=MG1xc2VzcGltMmY2MG1tMWYyMnNkdDRna2IgNGRlOTU2NGI2MzRkMWYzYzc4MDkwYWZhYjIwODRlZWJmMTM3ZjM5MjIxOTdmNzA1ZmM4NmU2ZjNiYzg2ZmEzZEBn&tmsrc=4de9564b634d1f3c78090afab2084eebf137f3922197f705fc86e6f3bc86fa3d%40group.calendar.google.com"
                class="social-icon calendar"
                target="_blank"
              >
                <i class="fa-regular fa-calendar-check"></i>
              </a>
              <p>Click aqui para agendar fecha en tu calendario</p>
            </div>

            <div class="fecha-titulo">
              <span class="content-titulo">Ceremonia</span>
            </div>
            <div class="direccion">
              <h2>Hacienda los volcanes</h2>
              <p>
                Km. 30 Carretera a Barcenas, Santa Lucia Milpas Altas, Antigua
                Guatemala, Guatemala
              </p>
            </div>

            <div class="fecha-titulo">
              <span class="content-titulo">Recepción</span>
            </div>

            <div class="direccion-rec">
              <h2>Salón volcan de agua</h2>
              <p>Hacienda los volcanes</p>
            </div>

            <div class="social">
              <a
                href="https://www.waze.com/es-419/live-map/directions?to=ll.14.572957%2C-90.642164"
                class="social-icon waze"
                target="_blank"
              >
                <i class="fa-brands fa-waze"></i>
              </a>
              <p>Click aqui para llegar con waze</p>
            </div>
          </div>
        </div>
      </section>
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>
      <div class="textos-bi">
        <p>
          Uno solo puede ser vencido, pero dos pueden resistir: como cordón de tres dobleces que no se rompe fácilmente
        </p>
        <!-- <p>dondequiera que tú vayas, yo iré; y dondequiera que tú vivas, yo viviré. Tu pueblo será mi pueblo y tu Dios será mi Dios.</p> -->
        <span>Eclesiastés 4:12</span>
      </div>
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>
      <div class="image-center">
        <img src="https://invitacion-img.s3.amazonaws.com/imagen13.jpg" />
      </div>
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>

      <section class="vestimenta">
        <div class="cont-suite">
          <span class="icon-suite"><i class="fa-solid fa-user-tie"></i></span>
        </div>
        <h2>Código de vestimenta</h2>
        <h2 class="etiqueta">Formal</h2>
        <div class="trajes">
          <div class="ropa">
            <h3>Mujeres</h3>
            <p>Vestido Largo</p>
          </div>
          <div class="ropa">
            <h3>Hombres</h3>
            <p>Traje</p>
          </div>
        </div>
        <div class="notas">
          <h3>Recomendaciones</h3>
          <p>El color blanco es exclusivo para la novia</p>
        </div>
      </section>
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>

      <div class="image-center">
        <img src="https://invitacion-img.s3.amazonaws.com/imagen5.jpg" />
      </div>
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>

      <section class="regalos">
        <div class="icon-gift">
          <i class="fa-solid fa-gifts"></i>
        </div>
        <p class="regalos-p">
          Tu presencia es nuestro mejor regalo, pero si deseas hacernos un
          obsequio, ponemos a tu disposición las siguientes opciones
        </p>
        <div class="regalo-lugar">
          <div class="lugar">
            <div class="icon-regalo">
              <i class="fa-solid fa-kitchen-set"></i>
            </div>
            <div class="texto-regalo">
              <h3>Cemaco</h3>
              <a href="https://www.cemaco.com/c-cocina-y-mesa" target="_blank"
                >Ir al link</a
              >
            </div>
          </div>
          <div class="lugar">
            <div class="icon-regalo">
              <i class="fa-solid fa-house"></i>
            </div>
            <div class="texto-regalo">
              <h3>Siman</h3>
              <a
                href="https://gt.siman.com/muebles-y-hogar/muebles-de-dormitorio/gaveteros"
                target="_blank"
                >Ir al link</a
              >
            </div>
          </div>
        </div>

        <div class="transferencia">
          <div class="efectivo">
            <h3>Efectivo</h3>
            <i class="fa-solid fa-envelope"></i>
            <h2 class="o">Ó</h2>
          </div>
          <h3>Transferencia/Depósito</h3>
          <div class="cuenta">
            <p class="label-t">Banco</p>
            <p class="label-t">Nombre</p>
            <p class="label-t">No. cuenta</p>
            <p>BANRURAL</p>
            <p>Leonel N. Ramírez E.</p>
            <p class="no-cuenta">4420074652</p>
          </div>
        </div>
        <h2 class="gracias">¡Muchas Gracias!</h2>
      </section>
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>

      <section class="confirmacion">
        <h3>Recuerda que es importante confirmar tu asistencia, ya que nos encontramos organizando los lugares de cada invitado</h3>
        <h3 class="maxima">Fecha máxima, <span class="dia">20</span> de Septiembre</h3>
        <div class="content-confirm">
          <div class="enlaces">
            <a href="" class="wa" id="wa-novio" target="_blank">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
            <p>Invitados del novio</p>
          </div>
          <div class="enlaces">
            <a href="" class="wa" id="wa-novia">
              <i class="fa-brands fa-whatsapp" target="_blank"></i>
            </a>
            <p>Invitados de la novia</p>
          </div>
        </div>
      </section>
      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>
      <div class="image-center">
        <img src="https://invitacion-img.s3.amazonaws.com/imagen12.jpg" />
      </div>
      <div class="textos-bi">
        <p>
          Desde el principio de la creación, Dios los hizo hombre y mujer.
          Por esta causa el hombre dejará a su padre y a su madre, y se unirá a
          su esposa; y serán los dos una sola carne. Así que, ya no son más dos
          sino una sola carne. Por tanto, lo que Dios ha unido no lo separe el
          hombre.
        </p>
        <span></span>
      </div>

      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>
      <?php
        echo $mensaje;
      ?>
      <div class="container-form" id="deseos">
        <form class="formulario" action="send-mail.php" method="POST">
          <fieldset>
            <legend>Envía tus deseos</legend>

            <label for="titulo">Nombre</label>
            <input type="text" id="nombre" placeholder="Tu nombre" name="nombre" />

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje"> </textarea>
            <button>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              Enviar
            </button>
          </fieldset>
        </form>
      </div>
      <section class="hashtag">
        <i class="fa-brands fa-instagram" id="instagram"></i>
        <h2>#Leo&Yas</h2>
        <p>
          No olvides usar este hashtag cuando subas tus fotos de nuestra boda
        </p>
      </section>

      <div class="liston">
        <img src="https://invitacion-img.s3.amazonaws.com/liston.png" alt="" />
      </div>

      <section class="saludos">
        <div class="img-saludos">
          <img
            src="https://invitacion-img.s3.amazonaws.com/imagen6.jpg"
            alt="boda"
          />
        </div>
        <div class="textos-bi">
          <p>
            Hoy empieza nuestra vida tomados de la mano de Dios; Iniciaremos un
            libro lleno de historias y aventuras como una sola carne, será de
            mucha alegría y bendición que puedas formar parte de este capítulo
          </p>
        </div>
        <h2 class="titulo-saludo">¡Te esperamos!</h2>
      </section>
    </main>
    <footer class="footer">
      <p>
        BodaLeo&Yas <i class="fa-solid fa-heart"></i> &copy;2023
      </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="public/build/js/scrollreveal.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
      integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsrsasign/10.3.0/jsrsasign-all-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script src="https://apis.google.com/js/api.js"></script>
    <script src="public/build/js/app.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
  </body>
</html>
