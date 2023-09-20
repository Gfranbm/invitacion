document.addEventListener("DOMContentLoaded", function () {
  eventListener();
});

function eventListener() {
  // scroll efect
  function scrollNav() {
    document.querySelectorAll(".navegacion-principal a").forEach(function (e) {
      e.addEventListener("click", function (e) {
        e.preventDefault();
        document
          .querySelector(e.target.attributes.href.value)
          .scrollIntoView({ behavior: "smooth" });
      });
    });
  }
  scrollNav();

  //animation divs
  window.sr = ScrollReveal();
  sr.reveal(".header", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".pic", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".fondo-honores", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".hoja_1", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".faltan", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });


  window.sr = ScrollReveal();
  sr.reveal(".date", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".swiper-wrapper", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });


  window.sr = ScrollReveal();
  sr.reveal(".contenido_informacion", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".hoja_bottom", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".info", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".dias", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".texto-fecha", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal("#swip-ani", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".fecha-titulo", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal("#agregar-evento", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".direccion", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });


  window.sr = ScrollReveal();
  sr.reveal(".social", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });


  window.sr = ScrollReveal();
  sr.reveal("#ubicacion", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".image-center", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".confirmacion", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".vestimenta", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal("#deseos", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".img-saludos", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".titulo-saludo", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".icon-gift", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".regalos-p", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".regalo-lugar", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".lugar", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".efectivo", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });
  

  window.sr = ScrollReveal();
  sr.reveal(".transferencia", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".cuenta", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });


  window.sr = ScrollReveal();
  sr.reveal(".trajes", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });


  window.sr = ScrollReveal();
  sr.reveal(".ropa", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".enlaces", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });


  window.sr = ScrollReveal();
  sr.reveal(".gracias", {
    duration: 1500,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".texto.saludo", {
    duration: 1500,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".textos-bi", {
    duration: 3000,
    origin: "top",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".hashtag", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".liston", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".alerta", {
    duration: 3000,
    origin: "bottom",
    distance: "-55px",
  });

  //contador de dias

  function getRemainTime(deadline) {
    let now = new Date(),
      remainTime = (new Date(deadline) - now + 1000) / 1000,
      remainSeconds = ("0" + Math.floor(remainTime % 60)).slice(-2),
      remainMinutes = ("0" + Math.floor((remainTime / 60) % 60)).slice(-2),
      remainHours = ("0" + Math.floor((remainTime / 3600) % 24)).slice(-2),
      remainDays = Math.floor(remainTime / (3600 * 24));

    return {
      remainTime,
      remainSeconds,
      remainMinutes,
      remainHours,
      remainDays,
    };
  }

  getRemainTime();

  const contDown = (deadline, message) => {
    let days = document.getElementById("dias"),
      hours = document.getElementById("horas"),
      minutes = document.getElementById("minutos"),
      seconds = document.getElementById("segundos");
    const timeUpdate = setInterval(() => {
      let r = getRemainTime(deadline);

      days.innerHTML = r.remainDays + ":";
      hours.innerHTML = r.remainHours + ":";
      minutes.innerHTML = r.remainMinutes + ":";
      seconds.innerHTML = "" + r.remainSeconds;

      // mensaje final
      if (r.remainTime <= 1) {
        clearInterval(timeUpdate);
      }
    }, 1000);
  };

  contDown("Sun Nov 5 2023 14:00:00 GMT-0600");

  // confirmacion por wa

  const confirmWaNovio = (phone, message) => {
    enlace = document.getElementById("wa-novio");
    enlace.href = `https://wa.me/${phone}?text=${message}`;
  };

  const confirmWaNovia = (phone, message) => {
    enlace = document.getElementById("wa-novia");
    enlace.href = `https://wa.me/${phone}?text=${message}`;
  };

  confirmWaNovio(
    44969627,
    "Hola, Gracias por la invitación a su boda 🤵🏻👰🏻‍♀, me gustaría confirmar mi asistencia, <Tu nombre>"
  );
  confirmWaNovia(
    44969627,
    "Hola, Gracias por la invitación a su boda 🤵🏻👰🏻‍♀, me gustaría confirmar mi asistencia, <Tu nombre>"
  );
}
