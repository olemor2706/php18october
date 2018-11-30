function tab1(){
	var msg = document.getElementById("msg1"); 
	msg.hidden = "";
	var msg = document.getElementById("msg2"); 
	msg.hidden = "hidden";
	var msg = document.getElementById("msg3"); 
	msg.hidden = "hidden";
}

function tab2(){
	var msg = document.getElementById("msg2"); 
	msg.hidden = "";
	var msg = document.getElementById("msg1"); 
	msg.hidden = "hidden";
	var msg = document.getElementById("msg3"); 
	msg.hidden = "hidden";
}

function tab3(){
	var msg = document.getElementById("msg3"); 
	msg.hidden = "";
	var msg = document.getElementById("msg2"); 
	msg.hidden = "hidden";
	var msg = document.getElementById("msg1"); 
	msg.hidden = "hidden";
}

/*function msgScr (str) {
	var msg = document.getElementById("msg"); 
	msg.innerHTML = str;
}*/


var vTab = document.getElementById("tabs-a");
vTab.onclick = tab1;

vTab = document.getElementById("tabs-b");
vTab.onclick = tab2;

vTab = document.getElementById("tabs-c");
vTab.onclick = tab3;

