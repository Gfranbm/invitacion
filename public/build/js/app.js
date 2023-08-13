document.addEventListener("DOMContentLoaded", function () {
  eventListener();
});

function eventListener() {
  function navegacionFija() {
    const e = document.querySelector("a");
    new IntersectionObserver(function (t) {
      t[0].isIntersecting
        ? e.classList.remove("active")
        : e.classList.add("active");
    }).observe(document.querySelector(".header"));
  }
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
  navegacionFija();

  window.sr = ScrollReveal();
  sr.reveal(".header", {
    duration: 1500,
    origin: "bottom",
    distance: "-100px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".pic", {
    duration: 3000,
    origin: "left",
    distance: "-100px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".hoja_1", {
    duration: 3000,
    origin: "right",
    distance: "-100px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".contenido_informacion", {
    duration: 3000,
    origin: "right",
    distance: "-100px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".hoja_bottom", {
    duration: 3000,
    origin: "left",
    distance: "-100px",
  });

  const getRemainTime = (deadline) => {
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
  };

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

  contDown("Sun Nov 5 2023 15:00:00 GMT-0600");


  window.sr = ScrollReveal();
  sr.reveal(".dias", {
    duration: 3000,
    origin: "left",
    distance: "-100px",
  });

  window.sr = ScrollReveal();
  sr.reveal(".texto-fecha", {
    duration: 3000,
    origin: "left",
    distance: "-100px",
  });

  window.sr = ScrollReveal();
  sr.reveal("#swip-ani", {
    duration: 3000,
    origin: "left",
    distance: "-100px",
  });

  
}
