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
	text-align: start;
	
	transform: translate(50%, 0%);
	top: 40%;
	left: 50%;
	background: url(njit4.jpg) no-repeat;
	background-size: 1920px 940px;
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
	top: 840px;
	left: 590px;
}
.form-btn:hover{
	background: silver;
}

h1{
	text-decoration: underline;


</style>
</head>

<body>

<!--
<input type="text" name="poop" rows="6" cols="34"></text>
-->

<h1>Python Exam</h1>
<form method="post" action="back_to_mid.php" id="form">

<h2><input type="submit" class="form-btn" value="Submit Exam">




<script>
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
var json = xhttp.responseText;
var obj = JSON.parse(json);
console.log(json);	
console.log(obj[0][0].student_exam);
var container = document.getElementById("container");

for(i=0;i<obj[0][0].student_exam.length;i++){

//added 
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

//added 6-5
var topic_array = document.createElement("input");
topic_array.type = "hidden";
topic_array.name = "topic_array[]";
topic_array.value = JSON.stringify(obj[0][0].topic_array[i]);
//added 6-5
var difficulty_array = document.createElement("input");
difficulty_array.type = "hidden";
difficulty_array.name = "difficulty_array[]";
difficulty_array.value = JSON.stringify(obj[0][0].difficulty_array[i]);
//added 6-5
var constraints_array = document.createElement("input");
constraints_array.type = "hidden";
constraints_array.name = "constraints_array[]";
constraints_array.value = JSON.stringify(obj[0][0].constraints_array[i]);
//added 6-10
var num_args = document.createElement("input");
num_args.type = "hidden";
num_args.name = "num_args[]";
num_args.value = JSON.stringify(obj[0][0].num_args[i]);





//create input field for each question 
var answer = document.createElement("textarea");
answer.type = "textarea";
//pts.style = "display:none";	
answer.name = "answer_id[]";
answer.id = "textboxid";
answer.style.height="100px";
answer.style.width="400px";
	

//create br element
var brk = document.createElement("br");	

//create text element that shows question
var z = document.createTextNode(JSON.stringify(obj[0][0].student_exam[i]));

//create text element that shows points for each question RC STEP 3

var p = document.createTextNode(JSON.stringify(obj[0][0].student_points[i]));

//create text explaining points value
var worth = document.createElement("W");
worth.innerText = "__________________Points value:";


var form = document.getElementById("form");



//added
form.appendChild(function_name);
form.appendChild(cases);
form.appendChild(test_solutions);

form.appendChild(brk);
form.appendChild(z);
form.appendChild(brk);

//added 6-5 for points
form.appendChild(worth);
form.appendChild(p);
form.appendChild(answer);

//added 6-5 for hidden	
form.appendChild(topic_array);
form.appendChild(difficulty_array);
form.appendChild(constraints_array);
//added 6-10
form.appendChild(num_args);
			
		}

	}
};

	xhttp.open("POST", "https://afsaccess1.njit.edu/~dmr56/back_to_mid.php", true);
	xhttp.send(null);

 




</script>
</form>
</body>
</html>
