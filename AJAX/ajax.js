/*function buttom1() {
	msgScr(get("file1.html"));
}*/

function buttom1() {
	$.get("file1.html", function(data){
		msgScr(data);
	})
	
}

/*function buttom2() {
	msgScr(get("file2.html"));
}*/

function buttom2() {
	$.get("file111.html", function(data){
		msgScr(data);
	}).fail(function(){
		$("#msg").html("Не удалось получить данные");
	})
}

function buttom3() {
	msgScr(get("file3.html"));
}

function msgScr (str) {
	var msg = document.getElementById("msg"); 
	msg.innerHTML = str;
}

function get (fileHTML) {
	// Создаем новый HTTP-запрос (объект XMLHttpRequest)
	var xhr = new XMLHttpRequest();
	// конфигурация запроса: тип и адрес
	xhr.open ("GET", fileHTML, false);
	// Отсылаем запрос
	xhr.send();
	// Проверяем код ответа сервера - не 200, то ошибка
	if (xhr.status != 200){
		// обработать ошибку
		return xhr.status + " " + xhr.statusText;
	} else {
		// Вывести результат
		return xhr.responseText;
	}
	
}

function data1 () {
	var x1 = get ("data1.json");
	var obj1 = JSON.parse(x1);
	console.log (obj1.last_name);
}

function data2 () {
	var x1 = get ("data2.json");
	var obj1 = JSON.parse(x1);
	console.log (obj1[1].last_name);
}

function data3 () {
	var x1 = get ("data3.json");
	var obj1 = JSON.parse(x1);
	console.log ("Сотруднику" + obj1.first_name + " " + obj1.last_name +
	" назначена должность " + obj1.job.job_title + " в отделе " + obj1.department.department_name + 
	"<br>Контактный телефон: <br>- " + obj1.phon_number[0] + "<br>- " + obj1.phon_number[1]);
}

/*var butt = document.getElementById("submit1");
butt.onclick = buttom1;*/

$("#submit1").click(buttom1);

var butt = document.getElementById("submit2");
butt.onclick = buttom2;

var butt = document.getElementById("submit3");
butt.onclick = buttom3;

var butt = document.getElementById("data1");
butt.onclick = data1;

var butt = document.getElementById("data2");
butt.onclick = data2;

var butt = document.getElementById("data3");
butt.onclick = data3;