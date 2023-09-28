window.onload = () => {

// initialisation des vues du form

document.getElementById('form2').style.display = 'none';
document.getElementById('form3').style.display = 'none';
document.getElementById('alert').style.display = 'none';
document.getElementById('alert1').style.display = 'none';
document.getElementById('alert3').style.display = 'none';
document.getElementById('alert4').style.display = 'none';
document.getElementById('alert2').style.display = 'none';
document.getElementById('btn5').style.display = 'none';

// initialisation des variables

var date = document.getElementById('booking_BookSlotDate').value;
console.log(date);
var slotMin = document.getElementById('booking_slotLunch_minute').value;
var slotHour = document.getElementById('booking_slotLunch_hour').value;

// récupération du jour réservé

var bookDate = new Date(date);
var dayBooked = bookDate.getDay();
var today = new Date();

// fonction de vérification si ouvert au jour et heure réservé

function checkSlot() {
    date = document.getElementById('booking_BookSlotDate').value;
    bookDate = new Date(date);
    dayBooked = bookDate.getDay();

    // transcription du jour réservé en 'id' de 'openinngs days'
    var openLunch = 'openLunch' + dayBooked;
    var closeLunch = 'closeLunch' + dayBooked;
    var openDinner = 'openDinner' + dayBooked;
    var closeDinner = 'closeDinner' + dayBooked;

    // Récupération des heures d'ouverture et fermeture pour chaque jour sinon données factices
    if ((document.getElementById(openLunch))) { 
    var startLunch = document.getElementById(openLunch).innerHTML;
    }
    else {
    var startLunch = '24:00';
    };
    if ((document.getElementById(openDinner))) {
    var startDinner = document.getElementById(openDinner).innerHTML;
    }
    else {
    var startDinner = '24:00';
    };
    if ((document.getElementById(closeLunch))) {
    var endLunch = document.getElementById(closeLunch).innerHTML;
    }
    else {
    var endLunch = '00:00';
    };
    if ((document.getElementById(closeDinner))) {
    var endDinner = document.getElementById(closeDinner).innerHTML; 
    }
    else {
    var endDinner = '00:00';
    };

    // calcul de concordance en timestamp du créneau horaire souhaité et des horaires d'ouverture
    slotHour = document.getElementById('booking_slotLunch_hour').value;
    slotMin = document.getElementById('booking_slotLunch_minute').value;
    slotInSeconds = (slotHour * 3600) + (slotMin * 60);
    var secondsOpenLunch = (startLunch.substring(0, 2) * 3600) + (startLunch.substring(3, 5) * 60);
    var secondsOpenDinner = (startDinner.substring(0, 2) * 3600) + (startDinner.substring(3, 5) * 60);
    var secondsCloseLunch = (endLunch.substring(0, 2) * 3600) + (endLunch.substring(3, 5) * 60);
    var secondsCloseDinner = (endDinner.substring(0, 2) * 3600) + (endDinner.substring(3, 5) * 60);

    // vérification de concordance du créneau horaire souhaité et des horaires d'ouverture
    if (((slotInSeconds >= secondsOpenLunch) && ((slotInSeconds) <= secondsCloseLunch - 3600)) || ((slotInSeconds >= secondsOpenDinner) && ((slotInSeconds) <= secondsCloseDinner - 3600))) {
        return true;
    } else {
        return false;
    };
};

// ouverture ou non de 2ème partie du form si horaires valables et date pas encore passée

document.getElementById('btn1').addEventListener('click', () => {
    var isSlot = checkSlot();
    test = (today<=bookDate);

    if (!isSlot) {  
        document.getElementById('form2').style.display = 'none';
        document.getElementById('alert').style.display = 'block';
                }
    else {
        if (!test)
        {
        document.getElementById('form2').style.display = 'none';
        document.getElementById('alert1').style.display = 'block';
        }
        else { 
        document.getElementById('form2').style.display = 'block';
        document.getElementById('form1').style.display = 'none';
        document.getElementById('alert').style.display = 'none';
        document.getElementById('alert1').style.display = 'none';
        }
                }
                                                                })
// bouton de retour à la première partie du formulaire
document.getElementById('btn2').addEventListener('click', () => {
    document.getElementById('form2').style.display = 'none';
    document.getElementById('form1').style.display = 'block';
    document.getElementById('alert').style.display = 'none';
    document.getElementById('alert1').style.display = 'none';
    document.getElementById('alert2').style.display = 'none';
    document.getElementById('alert3').style.display = 'none';
    document.getElementById('booking_BookSlotCovers').value = NULL;
})        
  
// définition automatique du 'service' concerné
document.getElementById('btn1').addEventListener('click', () => {
    service = document.getElementById('booking_service');
    att3 = document.createAttribute("value");
    if (slotHour >= 16 || slotHour <= 2) {
        att3 = 'Diner'
        service.setAttribute('value', att3);
    }
    else {
        att3 = 'Déjeuner'
        service.setAttribute('value', att3);
    };
})

// fonction de récupération en api des réservations selon date pour disponibilités

/** function object() {
    // récupération de la date souhaitée pour réservation et service et convertion en timestamp
    const dateBooked = document.getElementById('booking_BookSlotDate').value;
    const dateBookedTimestamp = (Date.parse(dateBooked) / 1000) - 7200;
    console.log(dateBookedTimestamp);
    const serviceBooked = document.getElementById('booking_service').value;
    console.log(serviceBooked);
    
    // appel à l'api
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://young-coast-00769.herokuapp.com/api/api-liste');
    xhr.send();
  
    return new Promise((resolve, reject) => {
      xhr.addEventListener('readystatechange', function covers() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          const object = JSON.parse(xhr.response);

          // récupération des éléments souhaités (réservation selon date et service)
          const covers = object
            .filter(element => element.service == serviceBooked && element.BOOKINGSLOTdatetime.timestamp == dateBookedTimestamp)
            .map(element => element.BOOKINGSLOTcoversnumber);

          // calcul du total réservé à la date et service souhaité
          console.log(covers);
          const sum = covers.reduce((a, b) => a + b, 0);
          resolve(sum);
          console.log(sum);
        }
      });
    });
  } **/

  function object() {
    // Récupération de la date souhaitée pour la réservation et du service, et conversion en timestamp
    const dateBooked = document.getElementById('booking_BookSlotDate').value;
    const dateBookedTimestamp = (Date.parse(dateBooked) / 1000);
    console.log(dateBookedTimestamp);
    const serviceBooked = document.getElementById('booking_service').value;
    console.log(serviceBooked);
  
    // Construction de l'URL de l'API
    const apiUrl = '/api/api-liste';
  
    // Utilisation de fetch
    return fetch(apiUrl)
      .then(response => {
        if (!response.ok) {
          throw new Error (window.location.href = '/error');
        }
        return response.json();
      })
      .then(object => {
        // Récupération des éléments souhaités (réservation selon date et service)
        const covers = object
          .filter(element => element.service === serviceBooked && element.BOOKINGSLOTdatetime.timestamp === dateBookedTimestamp)
          .map(element => element.BOOKINGSLOTcoversnumber);
        // Calcul du total réservé à la date et au service souhaité
        console.log(covers);
        const sum = covers.reduce((a, b) => a + b, 0);
        console.log(sum);
        return sum;
      })
      .catch(error => {
        throw error (window.location.href = '/error');
      });
  }
  

// récupération du nombre de couverts souhaités pour réservation

let coversBooked;

document.getElementById('booking_BookSlotCovers').addEventListener('input', () => {  
    object()
    .then(result => {
       coversBooked = result;
      });
});


// création du récapitulatif de réservation avant validation
        messages = document.getElementById("messages");
        send = document.getElementById("send");
        confirmMessage = document.createElement("p");

        messages.insertBefore(confirmMessage, send);



// ouverture de dernière partie du form si disponibilités toujours possibles

document.getElementById('btn3').addEventListener('click', () => { 
    // récupération des couverts réservés et tests si possible de réserver et récupération nom utilisateur
    nameUser = document.getElementById('booking_BookSlotUser').value;
    coversAvailable = document.getElementById(dayBooked).innerHTML;
    let coversWished = document.getElementById('booking_BookSlotCovers').value;
    let test = coversWished > (coversAvailable - coversBooked);

    // récupération de l'allergie déclarée
    var allergie = document.getElementById('booking_BookSlotAllergies').value;

    // transformation de la date format US en format FR
    let year = date.substring(0, 4);
    let month = date.substring(5, 7);
    let day = date.substring(8, 10);
    dateFr = day +'/'+ month +'/'+ year;

    //affichage du message d'alerte ou de la dernière partie du form si places toujours disponibles
    if (!test) {
        if(coversWished <= 0 || nameUser === "") {
        document.getElementById('form3').style.display = 'none';
        document.getElementById('alert3').style.display = 'block';
        document.getElementById('form2').style.display = 'none';
        document.getElementById('btn5').style.display = 'block';
        }
        else {
        document.getElementById('form2').style.display = 'none';
        document.getElementById('form3').style.display = 'block';
        document.getElementById('alert2').style.display = 'none';
        document.getElementById('alert3').style.display = 'none';
    
        confirmMessage.innerHTML = "Vous souhaitez réserver pour le " + "<span class=\"text-success fw-bold\">" + dateFr + "</span>" +" à "+ "<span class=\"text-success fw-bold\">" + slotHour + ":"+ slotMin +"h" + "</span>" +" pour "+ "<span class=\"text-success fw-bold\">" + coversWished + " couvert(s)"+ "</span>" +" dont une ou plusieurs personnes souffrent de l'allergie alimentaire suivante : "+ "<span class=\"text-success fw-bold\">" + allergie+"</span>";
        }
    }
    else
    {
        if(coversWished > 0 || nameUser != "") {
        document.getElementById('form3').style.display = 'none';
        document.getElementById('alert2').style.display = 'block';
        document.getElementById('form2').style.display = 'none';
        document.getElementById('btn5').style.display = 'block';
        }
        else {
        document.getElementById('form3').style.display = 'none';
        document.getElementById('alert2').style.display = 'block';
        document.getElementById('alert3').style.display = 'block';
        document.getElementById('form2').style.display = 'none';
        document.getElementById('btn5').style.display = 'block';        }
    }
})

// bouton de retour pour corrections des données
document.getElementById('btn5').addEventListener('click', () => {  
    document.getElementById('form2').style.display = 'block';
    document.getElementById('form3').style.display = 'none';
    document.getElementById('btn5').style.display = 'none';
    document.getElementById('alert2').style.display = 'none';
    document.getElementById('alert3').style.display = 'none';
})

// bouton de retour pour changements des données de réservation
document.getElementById('btn4').addEventListener('click', () => {  
    document.getElementById('form3').style.display = 'none';
    document.getElementById('form2').style.display = 'block';
})


}
