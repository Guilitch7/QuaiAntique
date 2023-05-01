window.onload = () => {
// document.getElementById('submit').style.display = 'none';
document.getElementById('form2').style.display = 'none';
document.getElementById('alert').style.display = 'none';
document.getElementById('alert2').style.display = 'none';
document.getElementById('submit').disabled = true;

var date = document.getElementById('booking_BookSlotDate').value;
var slotMin = document.getElementById('booking_slotLunch_minute').value;
var slotHour = document.getElementById('booking_slotLunch_hour').value;

var bookDate = new Date(date);
var dayBooked = bookDate.getDay();
var openLunch = 'openLunch' + dayBooked;
var closeLunch = 'closeLunch' + dayBooked;
var openDinner = 'openDinner' + dayBooked;
var closeDinner = 'closeDinner' + dayBooked;


function checkSlot() {
    date = document.getElementById('booking_BookSlotDate').value;
    console.log(date);
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
        //  var isDate = checkDate();
        
        //  if (isDate == false) {
        //    document.getElementById('submit').addEventListener('click', alert('Le jour choisit ne coïncide pas avec la date sélectionnée'));
        //} else { 
 
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


  function object ()
        {
    dateBooked = document.getElementById('booking_BookSlotDate').value;
    dateBookedTimestamp = (Date.parse(dateBooked)/1000)-7200;
    serviceBooked = document.getElementById('booking_service').value;
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'http://localhost/api/resa/liste');
    xhr.send();
    xhr.addEventListener('readystatechange', function() {
        if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            object = JSON.parse(xhr.response);
        }
    })
    }

  function numberBooked () { 
            let totalCovers = [];
            let sum = 0;
            object.forEach(element =>{
                    if(element.service == serviceBooked && element.BOOKINGSLOTdatetime.timestamp == dateBookedTimestamp) {
                    totalCovers.push(element.BOOKINGSLOTcoversnumber) }
                                        })
            totalCovers.forEach( num => { sum += num;} );
    };


document.getElementById('btn1').addEventListener('click', () => {  
        let sum = numberBooked();
        console.log(sum);
        coversAvailable = document.getElementById(dayBooked).innerHTML;
        let coversWished = document.getElementById('booking_BookSlotCovers').value;
        
        if(coversWished > (coversAvailable - sum)) {
            document.getElementById('form2').style.display = 'none';
            document.getElementById('alert2').style.display = 'block';
            
        }
        {
            document.getElementById('form2').style.display = 'block';
            document.getElementById('alert2').style.display = 'none';
        }
})
}

/* document.getElementById('booking_BookSlotCovers').addEventListener('input', () => {

window.onload = () => {
    // On va chercher la région
    let region = document.querySelector("#annonces_regions");

    region.addEventListener("change", function(){
        let form = this.closest("form");
        let data = this.name + "=" + this.value;
        
        fetch(form.action, {
            method: form.getAttribute("method"),
            body: data,
            headers: {
                "Content-Type": "application/x-www-form-urlencoded; charset:UTF-8"
            }
        })
        .then(response => response.text())
        .then(html => {
            let content = document.createElement("html");
            content.innerHTML = html;
            let nouveauSelect = content.querySelector("#annonces_departements");
            document.querySelector("#annonces_departements").replaceWith(nouveauSelect);
        })
        .catch(error => {
            console.log(error);
        })
    }); */
