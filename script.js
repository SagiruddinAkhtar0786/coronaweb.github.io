// function fetch(){
//     $.get("https://api.covid19api.com/summary",
//     function(data){
//         // console.log(data['Countries'].length);
//         var tableval = document.getElementById('tablevalue');
//         for (var i = 1 ; i <(data['Countries'].length); i++)
//         {
//             var x = tableval.insertRow();
//             x.insertCell(0);

//             tableval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
//             tableval.rows[i].cells[0].style.background = '#7a4a91';
//             tableval.rows[i].cells[0].style.color = '#fff';

//             x.insertCell(1);
//             tableval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
//             tableval.rows[i].cells[1].style.background = '#4bb7d8';
//             x.insertCell(2);
//             tableval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
//             tableval.rows[i].cells[2].style.background = '#4bb7d8';
//             x.insertCell(3);
//             tableval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
//             tableval.rows[i].cells[3].style.background = '#f36e23';
//             x.insertCell(4);
//             tableval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
//             tableval.rows[i].cells[4].style.background = '#4bb7d8';
//             x.insertCell(5);
//             tableval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
//             tableval.rows[i].cells[5].style.background = '#9cc850';
//             x.insertCell(6);
//             tableval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
//             tableval.rows[i].cells[6].style.background = '#f36e23';
//         }
//     }
//     );
// }




mybtn = document.getElementById("mybtn"); //when the usrs scrols down 20 px from the top of the document, show the buttom

window.onscroll = function(){
    scrollfunction()
};
function scrollfunction(){
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop> 100){
        mybtn.style.display = "block";
    }
    else{
        mybtn.style.display = "none";
    }
}
// when the user clicks  on the button, scroll to the top of the document

function topfunction(){
    document.body.scrollTop = 0;  //for safari
    document.documentElement.scrollTop = 0; //for chrome ,firrefox,IE and OPERa
}

// function validateForm() {
//     var name = document.getElementById("name").value;
//     var Mobile = document.getElementById("mobile").value;
//     var Email = document.getElementById("email").value;
   

//     // name validation
//     if (name == "") {
//         document.getElementById("firstname").innerHTML = " ** please enter the  name";
//         return false;//if we dont write false the the  text will go to serrer
//     }

//     // email validation starts
//     if (Email == "") {
//         document.getElementById("emailid").innerHTML = " ** please enter the email fields";
//         return false;//if we dont write false the the  text will go to serrer
//     }

//     if (Email.indexOf('@') <= 0) {
//         document.getElementById("emailid").innerHTML = " ** @ invalid position";
//         return false; //if we dont write false the the  text will go to serrer
//     }

//     if ((Email.charAt(Email.length - 4) != ".") && (Email.charAt(Email.length - 3) != ".")) {
//         document.getElementById("emailid").innerHTML = " ** . invalid position";
//         return false; //if we dont write false the the  text will go to serrer
//     }


//     // mobile number validation
//     if (Mobile == "") {
//                 document.getElementById("mobile-number").innerHTML = " ** please enter the Mobile number fields";
//                 return false;//if we dont write false the the  text will go to serrer
//             }

//             if (isNaN(Mobile)) {
//                 document.getElementById("mobile-number").innerHTML = "** type mismatch please use only numbers";
//                 return false;
//             }

//             if (Mobile.length != 10) {
//                 document.getElementById("mobile-number").innerHTML = "** mobile number must be of 10 digit";
//                 return false;
//             }

//             // mobile validation ends

// }


