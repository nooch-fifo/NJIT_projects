<html>
<head>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<style>
body{
	margin: 0;
	padding: 0;
	font-family: Georgia;
	color: white;
	width: 350px;
	text-align: center;
	position: absolute;
	transform: translate(-50%, -50%);
	top: 1025px;
	left: 400px;
	background: url(mono-color.jpg);
	background-size: 1920px 940px;
}
table, th, td{
	border: 3px solid white;
	border-collapse: collapse;
	margin-right: 10px;
}

tr{
	border: 3px solid white;
	border-collapse: collapse;

}
th{
	padding:10px;
}
td{
	padding:10px;
}


.form-btn{
	float: right;
	border: 0;
	background: red;
	color: white;
	padding: 10px 30px;
	border-radius: 20px;
	cursor: pointer;
	transition: 0.5s;
	position: absolute;
	top: 1820px;
	left: 1215px;
}
.form-btn:hover{
	background: silver;
}

h1{
	text-decoration: underline;
}

.hyper{
	position: absolute;
	top: 1850px;
	left: 1200px;
}

</style>
</head>

<body>

<!--
<input type="text" name="poop" rows="6" cols="34"></text>
-->
<div class="hyper">
<br><h2><a href= "https://afsaccess1.njit.edu/~dmr56/ALPHA_student.php"> Back to Student Page</a></h2>
</div>

<form method="post" action="back_to_mid.php" id="form" onkeydown="return event.key != 'Enter';">


<h1>Grade Results</h1>
<!--
<br><br><table style="width:150%;" id="tab">
	<tr>
		<th>Question</th>
		<th>Function Name</th>
		<th>Manual Grade</th>

		<th>Output Name</th>
		<th>Manual Grade</th>
		<th>Colon Check</th>
		<th>Manual Grade</th>
		<th>Print Check</th>
		<th>Manual Grade</th>
		<th>For Loop Check</th>
		<th>Manual Grade</th>
		<th>Comments</th>

	</tr>
	<tr>
		
				
	</tr>
	<tr>
	</table>
-->
<script>

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
var json = xhttp.responseText;
var obj = JSON.parse(json);
console.log(json);	
console.log(obj[0][0].student_exam);
var container = document.getElementById("container");
var amiel=0;
var grade=0;
var final = document.createElement('label');
for(i=0;i<obj[0][0].student_exam.length;i++){
var form = document.getElementById("form");
var tbl  = document.createElement('table');
tbl.style.width="700px";
tbl.id = "sum".concat(i);
form.appendChild(tbl);
//var tab1 = document.getElementById("tab");
//var row0 = tbl.insertRow(0);
var headercell = document.createElement("tr");
headercell.innerHTML = "Question";
var testrow = tbl.insertRow(0);
testrow.appendChild(headercell);

var mike = testrow.insertCell(-1);
mike.innerHTML= "Manual Grades";


var headercell = document.createElement("tr");
headercell.innerHTML = "Function Name";
var row1 = tbl.insertRow(1);
row1.appendChild(headercell);

/*
var headercell = document.createElement("tr");
headercell.innerHTML = "Manual Grade";
var row2 = tbl.insertRow(2);
row2.appendChild(headercell);
*/
var output=[];
for(t=2;t<obj[0][0].test_solutions[i].length+2;t++){
	var minus = "-";
	var headercell = document.createElement("tr");
	var tc = "Test Case";
	headercell.innerHTML = tc.concat(t-1);
	output[t-2] = tbl.insertRow(t);
	output[t-2].appendChild(headercell);
	var testcase = output[t-2].insertCell(0);
	//console.log(parseInt(JSON.stringify(obj[0][0].num_cases[i]).replace(/['"]+/g, '')));
	//for(k=0;k<parseInt(JSON.stringify(obj[0][0].num_cases[i]).replace(/['"]+/g, ''));k++){
	testcase.innerHTML = minus.concat((JSON.stringify(obj[0][0].output_points[amiel]).replace(/['"]+/g, '')));
	/*
	var man2 = document.createElement("input");
	man2.type = "text";
	man2.name = "man2[]";
	man2.style.width="30px";
	var w =output[t-2].insertCell(1);
	w.appendChild(man2);
	*/
	try{
	 var w =output[t-2].insertCell(1);
	 w.innerHTML=(JSON.stringify(obj[0][0].man2[amiel]).replace(/['"]+/g, ''));
	 amiel++;
	}
	catch(err){
   	 window.alert("Grades not yet available");
   	 window.location.replace("ALPHA_student.php");
    	 break;
	}

}
var headercell = document.createElement("tr");
headercell.innerHTML = "Missing Colon";
var row3 = tbl.insertRow(-1);
row3.appendChild(headercell);

var headercell = document.createElement("tr");
headercell.innerHTML = "Print Check";
var row4 = tbl.insertRow(-1);
row4.appendChild(headercell);

var headercell = document.createElement("tr");
headercell.innerHTML = "For Loop Check";
var row5 = tbl.insertRow(-1);
row5.appendChild(headercell);

var headercell = document.createElement("tr");
headercell.innerHTML = "Comment";
var row6 = tbl.insertRow(-1);
row6.appendChild(headercell);


//var row = tbl.insertRow(1);

var question = testrow.insertCell(0);
var functionname = row1.insertCell(0);

//var manual1 = row1.insertCell(1);

//var output = row.insertCell(3);
//var manual2 = row.insertCell(4);

var colon = row3.insertCell(0);
//var manual3 = row.insertCell(6);
var print = row4.insertCell(0);
//var manual4 = row.insertCell(8);
var forloop = row5.insertCell(0);
//var manual5 = row.insertCell(10);
//var comments = row6.insertCell(0);


var str1 = "-";
//document.getElementById("Q").rowSpan = "2";
question.innerHTML = (JSON.stringify(obj[0][0].student_exam[i]));
functionname.innerHTML = str1.concat((JSON.stringify(obj[0][0].func_points[i])).replace(/['"]+/g, ''));
var functionname1 = row1.insertCell(1);
functionname1.innerHTML=(JSON.stringify(obj[0][0].man1[i]).replace(/['"]+/g, ''));

colon.innerHTML = str1.concat((JSON.stringify(obj[0][0].colon_points[i])).replace(/['"]+/g, ''));
var colon1 = row3.insertCell(1);
colon1.innerHTML=(JSON.stringify(obj[0][0].man3[i]).replace(/['"]+/g, ''));

print.innerHTML = str1.concat((JSON.stringify(obj[0][0].print_points[i])).replace(/['"]+/g, ''));
var print1 = row4.insertCell(1);
print1.innerHTML=(JSON.stringify(obj[0][0].man4[i]).replace(/['"]+/g, ''));

forloop.innerHTML = str1.concat((JSON.stringify(obj[0][0].forloop_points[i])).replace(/['"]+/g, ''));
var forloop1 = row5.insertCell(1);
forloop1.innerHTML=(JSON.stringify(obj[0][0].man5[i]).replace(/['"]+/g, ''));

var comments1 = row6.insertCell(0);
comments1.innerHTML=(JSON.stringify(obj[0][0].com[i]).replace(/['"]+/g, ''));


/*
var man1 = document.createElement("input");
man1.type = "text";
man1.name = "man1[]";
man1.style.width="30px";

functionname.appendChild(man1);

var man2 = document.createElement("input");
man2.type = "text";
man2.name = "man2[]";
man2.style.width="30px";

manual2.appendChild(man2);

var man3 = document.createElement("input");
man3.type = "text";
man3.name = "man3[]";
man3.style.width="30px";
var colon1 = row3.insertCell(1);
colon1.appendChild(man3);

var man4 = document.createElement("input");
man4.type = "text";
man4.name = "man4[]";
man4.style.width="30px";
var print1 = row4.insertCell(1);
print1.appendChild(man4);

var man5 = document.createElement("input");
man5.type = "text";
man5.name = "man5[]";
man5.style.width="30px";
var forloop1 = row5.insertCell(1);
forloop1.appendChild(man5);

var com = document.createElement("input");
com.type = "text";
com.name = "com[]";
com.style.width="550px";
var comments1 = row6.insertCell(0);
comments1.appendChild(com);
*/






var function_name = document.createElement("input");
function_name.type = "hidden";
function_name.name = "function_name[]";
var func =  JSON.stringify(obj[0][0].function_name[i]);
function_name.value = func.replace(/"/g,''); 
//added
var cases = document.createElement("input");
cases.type = "hidden";
cases.name = "cases[]";
cases.value = JSON.stringify(obj[0][0].test_cases[i]);
//added
var test_solutions = document.createElement("input");
test_solutions.type = "hidden";
test_solutions.name = "test_solutions[]";
test_solutions.value = JSON.stringify(obj[0][0].test_solutions[i]);

//create input field for each question that will COMMENTS BY TEACHER
var comment = document.createElement("textarea");
comment.type = "textarea";
//pts.style = "display:none";	
comment.name = "answer_id[]";
comment.id = "textboxid";
comment.style.height="100px";
comment.style.width="400px";
	

//create br element
var brk = document.createElement("br");	

//create text element that shows question (THIS WILL NOT BE QUESTIONS BUT INSTEAD BE STUDENT GRADED ANSWERS)
//var y = document.createTextNode(JSON.stringify(obj[0][0].student_exam[i]));

//added 17th
var x = document.getElementById("sum".concat(i)).rows;
//console.log(document.getElementById("sum".concat(i)).rows.length);

//console.log(x[1].cells[1].innerHTML);
var qstn = parseInt(JSON.stringify(obj[0][0].student_points[i]).replace(/['"]+/g, ''));
for (p=1;p<x.length-1;p++){
	if(x[p].cells[1].innerHTML==""){
		var integer = parseInt(x[p].cells[0].innerHTML, 10);
		if(qstn<0){
			qstn=0;
		}else{
			qstn+=integer;
		}	
	}else{
		var integer = parseInt(x[p].cells[1].innerHTML, 10);
		if(qstn<0){
			qstn=0;
		}else{
			qstn+=integer;
		}	


	}
if(qstn<0){
	qstn=0;
}
}
row6.insertCell(1).innerHTML=("Question Grade: ".concat(qstn));

grade+=qstn;

final.innerHTML="Final Grade: ".concat(grade);
final.style.fontSize = "xxx-large";
form.appendChild(final);

form.appendChild(function_name);
form.appendChild(cases);
form.appendChild(test_solutions);

form.appendChild(brk);
form.appendChild(brk);
//form.appendChild(y);
//form.appendChild(comment);				


	}
console.log(grade);

}
};

	xhttp.open("POST", "https://afsaccess1.njit.edu/~dmr56/back_to_mid.php", true);
	xhttp.send(null);

 




</script>
</form>
</body>
</html>
