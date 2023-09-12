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
  sr.reveal(".hoja_1", {
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
  sr.reveal(".regalos-lugar", {
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

  //contador de dias

  function getRemainTime(deadline) {
    let now = new Date(), remainTime = (new Date(deadline) - now + 1000) / 1000, remainSeconds = ("0" + Math.floor(remainTime % 60)).slice(-2), remainMinutes = ("0" + Math.floor((remainTime / 60) % 60)).slice(-2), remainHours = ("0" + Math.floor((remainTime / 3600) % 24)).slice(-2), remainDays = Math.floor(remainTime / (3600 * 24));

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

  contDown("Sun Nov 5 2023 14:30:00 GMT-0600");

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


  const createEvent = async ()=> {
      // TODO(developer): Set to client ID and API key from the Developer Console
  const CLIENT_ID = '814437859642-g5t7kms7pm922ppm3vmdbiqv6tuubn3h.apps.googleusercontent.com';
  const API_KEY = 'AIzaSyC4LBvdliagb5jO6Szy_zpnO7ApR5eugaw';

  // Discovery doc URL for APIs used by the quickstart
  const DISCOVERY_DOC = 'https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest';

  // Authorization scopes required by the API; multiple scopes can be
  // included, separated by spaces.
  const SCOPES = 'https://www.googleapis.com/auth/calendar';

  let tokenClient;
  let gapiInited = false;
  let gisInited = false;

  gapi.load('client', initializeGapiClient);

  async function initializeGapiClient() {
    await gapi.client.init({
      apiKey: API_KEY,
      discoveryDocs: [DISCOVERY_DOC],
    });
    gapiInited = true;
  }
  
  function gisLoaded() {
    tokenClient = google.accounts.oauth2.initTokenClient({
      client_id: CLIENT_ID,
      scope: SCOPES,
      callback: '', // defined later
    });
    gisInited = true;
  }

  const event = {
    'summary': 'Google I/O 2015',
    'location': '800 Howard St., San Francisco, CA 94103',
    'description': 'A chance to hear more about Google\'s developer products.',
    'start': {
      'dateTime': '2021-11-05T09:00:00-07:00',
      'timeZone': 'America/Los_Angeles'
    },
    'end': {
      'dateTime': '2021-11-05T09:00:00-07:00',
      'timeZone': 'America/Los_Angeles'
    },
    'recurrence': [
      'RRULE:FREQ=DAILY;COUNT=2'
    ],
    'attendees': [
      {'email': 'lpage@example.com'},
      {'email': 'sbrin@example.com'}
    ],
    'reminders': {
      'useDefault': false,
      'overrides': [
        {'method': 'email', 'minutes': 24 * 60},
        {'method': 'popup', 'minutes': 10}
      ]
    }
  };
  
  const request = gapi.client.calendar.events.insert({
    'calendarId': 'primary',
    'resource': event
  });
  
  request.execute(function(event) {
    appendPre('Event created: ' + event.htmlLink);
  });
  }

  // Escucha el evento click del botón
  document.getElementById('agregar-evento').addEventListener('click', function() {
    createEvent();
  });
}


