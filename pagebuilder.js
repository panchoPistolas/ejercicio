var NoOfLines = 1+21;
var InitialBuild = 0;

if(!Array.prototype.indexOf){
    Array.prototype.indexOf=function(obj,start){
        for(var i=(start||0),j=this.length;i<j;i++){
            if(this[i]==obj){return i;}
        }
        return -1;
    }
}	

function BuildPage() {				
   var strOutput = ""; 
   var holdOptions = BuildOptions();
   
   	if (InitialBuild == 0) {
		InitialBuild = 1;
		for ( var i = 1; i < NoOfLines; i++ ) {
				strOutput += "<tr><td><select name=\"Qnty" + i + "\" id=\"Qnty" + i + "\" onChange=\"setItemPrice(this)\">"
				strOutput += "<option selected=\"selected\" value=\"0\">&nbsp;<option value=1>1<option value=2>2<option value=3>3<option value=4>4<option value=5>5<option value=6>6<option value=7>7<option value=8>8<option value=9>9<option value=10>10</select></td>"
				strOutput += "<td><select name=\"Item" + i + "\" id=\"Item" + i + "\" onChange=\"setItemPrice(this)\">"
				strOutput += "<option selected=\"selected\" style=\"width:70px;\" value=\"X\">--- Select ---"
				strOutput += holdOptions
				strOutput += "</select></td></td>"
				strOutput += "<td><input type=hidden name=\"Unit" + i + "\" id=\"Unit" + i + "\" value=\"0.00\" width=\"20\">"
				strOutput += "<div id=\"dPrice" + i + "\" class=\"iText\">&nbsp;</div></td></td>"
				strOutput += "<td><input type=hidden name=\"Amt"  + i + "\" id=\"Amt"  + i + "\" value=\"0.00\" width=\"20\">"
				strOutput += "<div id=\"dAmt" + i + "\" class=\"iText\">&nbsp;</div></td></td></tr>"
		}

	document.write(strOutput);
	document.close();
	}
}


function BuildOptions() {
	var sOptions  = ""; 
	var holdGroup = ""; 
	
	for ( var i = 0; i < noOfItems; i++ ) {
			j=i*3;
			if (holdGroup != Products[j+0]) {
				holdGroup =  Products[j+0];
				if (i > 0) { sOptions += "</optgroup>" }
				sOptions += "<optgroup label=\"" + Products[j+0] + "\">"
				}
			sOptions += "<option value=\"" + Products[j+1] + "\">" + Products[j+1]
			}
			
	sOptions += "</optgroup>"
	return sOptions;
}


function setItemPrice(passData) {
	
	var lineIndex 	 = passData.name.substring(4)*1;
	var dispUnit	 = "dPrice"+lineIndex;			/*   Display Unit Price				*/
	var dispAmt		 = "dAmt"+lineIndex;			/*   Display Quantity * Unit Price	*/
	var inputQnty	 = "Qnty"+lineIndex;			/*   Quantity Ordered				*/
	var inputItem	 = "Item"+lineIndex;			/*   Item Selected					*/
	var inputUnit	 = "Unit"+lineIndex;			/*   Unit price						*/
	var inputAmt	 = "Amt"+lineIndex;				/*   Quantity * Unit Price			*/
	var productName	 = document.getElementById(inputItem).value;
	var productQnty	 = document.getElementById(inputQnty).value;
	var productIndex = Products.indexOf(productName)*1;
	var productPrice = Products[productIndex+1]*1;
	var totDue		 = 0;
	var holdAmt		 = 0;
	
	if (productName == "X" || productQnty == 0) {
			document.getElementById(inputUnit).value	= 0.00;
			document.getElementById(dispUnit).innerHTML = "";	
			document.getElementById(inputAmt).value  	= 0.00;
			document.getElementById(dispAmt).innerHTML  = "";
		}
		else {
			holdAmt = productQnty * productPrice;
			document.getElementById(inputUnit).value 	= productPrice.toFixed(2);
			document.getElementById(dispUnit).innerHTML = addCommas(productPrice.toFixed(2));
			document.getElementById(inputAmt).value  	= holdAmt.toFixed(2);
			document.getElementById(dispAmt).innerHTML  = addCommas(holdAmt.toFixed(2));
		}
		
	for ( var i = 1; i < NoOfLines; i++ ) {
		totDue = totDue + document.getElementById("Amt"+i).value*1;
	}
	document.getElementById("totalDue").innerHTML = addCommas(totDue.toFixed(2));
	document.getElementById("tDue").value = addCommas(totDue.toFixed(2));
}






function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

function clearPage() {
	for ( var i = 1; i < NoOfLines; i++ ) {
			document.getElementById("Unit"+i).innerHTML = 0.00;
			document.getElementById("dPrice"+i).innerHTML  = "";
			document.getElementById("Amt"+i).innerHTML  = 0.00;
			document.getElementById("dAmt"+i).innerHTML   = "";
		}
}

