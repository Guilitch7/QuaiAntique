window.onload = () => {
// document.getElementById('submit').style.display = 'none';
document.getElementById('form2').style.display = 'none';
document.getElementById('alert').style.display = 'none';

var date
var slotMin
var slotHour

/* function checkDate() {
    date = document.getElementById('booking_BookSlotDate').value;
    bookDate = new Date(date);
    daybooked = bookDate.getDay();
    dayBooked = document.getElementById('booking_OPENINGDAYSday').value;

    if (day == dayBooked) {
        return true;
    } else {
        return false;
    };
}
*/

function checkSlot() {
    date = document.getElementById('booking_BookSlotDate').value;
    bookDate = new Date(date);
    dayBooked = bookDate.getDay();
//    var dayBooked = document.getElementById('booking_OPENINGDAYSday').value;
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
    document.getElementById('alert').style.display = 'block';
                                                                })               
}