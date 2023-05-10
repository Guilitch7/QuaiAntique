window.onload = () => {
document.getElementById('form2').style.display = 'none';
document.getElementById('form3').style.display = 'none';
document.getElementById('alert').style.display = 'none';
document.getElementById('alert2').style.display = 'none';
document.getElementById('btn5').style.display = 'none';

var date = document.getElementById('booking_BookSlotDate').value;
var slotMin = document.getElementById('booking_slotLunch_minute').value;
var slotHour = document.getElementById('booking_slotLunch_hour').value;
var allergie = document.getElementById('booking_BookSlotAllergies').value;

var bookDate = new Date(date);
var dayBooked = bookDate.getDay();

function checkSlot() {
    date = document.getElementById('booking_BookSlotDate').value;
    bookDate = new Date(date);
    dayBooked = bookDate.getDay();
    var openLunch = 'openLunch' + dayBooked;
    var closeLunch = 'closeLunch' + dayBooked;
    var openDinner = 'openDinner' + dayBooked;
    var closeDinner = 'closeDinner' + dayBooked;

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

    slotHour = document.getElementById('booking_slotLunch_hour').value;
    slotMin = document.getElementById('booking_slotLunch_minute').value;
    slotInSeconds = (slotHour * 3600) + (slotMin * 60);
    var secondsOpenLunch = (startLunch.substring(0, 2) * 3600) + (startLunch.substring(3, 5) * 60);
    var secondsOpenDinner = (startDinner.substring(0, 2) * 3600) + (startDinner.substring(3, 5) * 60);
    var secondsCloseLunch = (endLunch.substring(0, 2) * 3600) + (endLunch.substring(3, 5) * 60);
    var secondsCloseDinner = (endDinner.substring(0, 2) * 3600) + (endDinner.substring(3, 5) * 60);

    if (((slotInSeconds >= secondsOpenLunch) && ((slotInSeconds) <= secondsCloseLunch - 3600)) || ((slotInSeconds >= secondsOpenDinner) && ((slotInSeconds) <= secondsCloseDinner - 3600))) {
        return true;
    } else {
        return false;
    };
};


document.getElementById('btn1').addEventListener('click', () => {
    var isSlot = checkSlot();
    if (!isSlot) {  
        document.getElementById('form2').style.display = 'none';
        document.getElementById('alert').style.display = 'block';
                }
    else {
        document.getElementById('form2').style.display = 'block';
        document.getElementById('form1').style.display = 'none';
        document.getElementById('alert').style.display = 'none';
                }
                                                                })

document.getElementById('btn2').addEventListener('click', () => {
    document.getElementById('form2').style.display = 'none';
    document.getElementById('form1').style.display = 'block';
})        
                                                                
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

function object() {

    const dateBooked = document.getElementById('booking_BookSlotDate').value;
    const dateBookedTimestamp = (Date.parse(dateBooked) / 1000) - 7200;
    const serviceBooked = document.getElementById('booking_service').value;
  
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'http://localhost/api/resa/liste');
    xhr.send();
  
    return new Promise((resolve, reject) => {
      xhr.addEventListener('readystatechange', function covers() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
          const object = JSON.parse(xhr.response);
          const covers = object
            .filter(element => element.service == serviceBooked && element.BOOKINGSLOTdatetime.timestamp == dateBookedTimestamp)
            .map(element => element.BOOKINGSLOTcoversnumber);
          const sum = covers.reduce((a, b) => a + b, 0);
          resolve(sum);
        }
      });
    });
  }

let coversBooked;

document.getElementById('booking_BookSlotCovers').addEventListener('input', () => {  
    object()
    .then(result => {
       coversBooked = result;
      });
});

document.getElementById('btn3').addEventListener('click', () => {  
    coversAvailable = document.getElementById(dayBooked).innerHTML;
    let coversWished = document.getElementById('booking_BookSlotCovers').value;
    let test = coversWished > (coversAvailable - coversBooked);
    console.log(test);
    if (!test) {
        document.getElementById('form2').style.display = 'none';
        document.getElementById('form3').style.display = 'block';
        document.getElementById('alert2').style.display = 'none';
 
        
        // create a new div element
        const newDiv = document.createElement("p");

        // and give it some content
        const newContent = document.createTextNode("Vous souhaitez réserver pour le"+ date +"à"+ slotHour +":"+ slotMin +"pour"+ coversWished +"couvert(s) dont une ou plusieurs personnes souffrent de l'allergie alimentaire suivante :"+ allergie);

        // add the text node to the newly created div
        newDiv.appendChild(newContent);

        // add the newly created element and its content into the DOM
        const currentDiv = document.getElementById("send");
        document.body.insertBefore(newDiv, currentDiv);


    }
    else
    {
        document.getElementById('form3').style.display = 'none';
        document.getElementById('alert2').style.display = 'block';
        document.getElementById('form2').style.display = 'none';
        document.getElementById('btn5').style.display = 'block';
    }
})
    
document.getElementById('btn5').addEventListener('click', () => {  
    document.getElementById('form2').style.display = 'block';
    document.getElementById('form3').style.display = 'none';
    document.getElementById('btn5').style.display = 'none';
    document.getElementById('alert2').style.display = 'none';
})

document.getElementById('btn4').addEventListener('click', () => {  
    document.getElementById('form3').style.display = 'none';
    document.getElementById('form2').style.display = 'block';
})


}
