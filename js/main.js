function login(){
	document.getElementById('su_button').style.border = "0px solid white";

	document.getElementById('su_button').style.borderBottom = "2px solid white";
	document.getElementById('li_button').style.border = "2px solid white";
	document.getElementById('li_button').style.borderBottom = "0px solid white";

	document.getElementById('form2').style.display = "none";
	document.getElementById('form1').style.display = "block";


}

function signup(){
	document.getElementById('su_button').style.border = "2px solid white";

	document.getElementById('su_button').style.borderBottom = "0px solid white";
	document.getElementById('li_button').style.border = "0px solid white";

	document.getElementById('li_button').style.borderBottom = "2px solid white";

	document.getElementById('form1').style.display = "none";
	document.getElementById('form2').style.display = "block";
}



function select_solo(){
    // document.getElementById('type').innerHTML=;
    document.getElementById("su_type").value= "solo";
    document.getElementById('solo').classList.add("active");
    var li = document.getElementById('team');
    if(li.className.search("active")>=0)
    {
        document.getElementById('team').classList.remove("active");
    }


}

function select_team(){
    // document.getElementById('type').innerHTML="team leader";
    document.getElementById("su_type").value= "team leader";

    document.getElementById('team').classList.add("active");
    var l = document.getElementById('solo');
    if(l.className.search("active")>=0)
    {
        document.getElementById('solo').classList.remove("active");
    }
}


	

function sendEmail() {
            var type = $("#su_type");
            var email = $("#su_email");
            console.log('hii');
            if (isNotEmpty(type) && isNotEmpty(email) ) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       type: type.val(),
                       email: email.val()
                      
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }   