function check_fields(thisForm) {
var returnval=false;
var errorFields = "Required fields are missing or invalid!";
var errorFlag   = "n";

	if(thisForm.aName.value == "")  { errorFlag = "y"; document.all.EaName.style.color  = "Red"; } else { document.all.EaName.style.color  = "Black"; }
	if(thisForm.cCo.value == "")    { errorFlag = "y"; document.all.EcCo.style.color    = "Red"; } else { document.all.EcCo.style.color    = "Black"; }
	if(thisForm.cAddr1.value == "") { errorFlag = "y"; document.all.EcAddr1.style.color = "Red"; } else { document.all.EcAddr1.style.color = "Black"; }
	if(thisForm.cCity.value == "")  { errorFlag = "y"; document.all.EcCity.style.color  = "Red"; } else { document.all.EcCity.style.color  = "Black"; }
	if(thisForm.cState.value == "") { errorFlag = "y"; document.all.EcState.style.color = "Red"; } else { document.all.EcState.style.color = "Black"; }
	if(thisForm.cZip.value == "")   { errorFlag = "y"; document.all.EcZip.style.color   = "Red"; } else { document.all.EcZip.style.color   = "Black"; }
	if(thisForm.cName.value == "")  { errorFlag = "y"; document.all.EcName.style.color  = "Red"; } else { document.all.EcName.style.color  = "Black"; }
	if(thisForm.cPhone.value == "") { errorFlag = "y"; document.all.EcPhone.style.color = "Red"; } else { document.all.EcPhone.style.color = "Black"; }
	if(thisForm.cEmail.value == "") { errorFlag = "y"; document.all.EcEmail.style.color = "Red"; } else { document.all.EcEmail.style.color = "Black"; }

	if(errorFlag == "n") 
		returnval=true;
	else 
		alert(errorFields);
		
	return returnval;
}

function submit_form(formname) {
	if(check_fields(formname)) {
       document.hgmailer.submit();
       alert ('Thank you!\nYour order has been sent.');
		}
	else
		return false;
	}
