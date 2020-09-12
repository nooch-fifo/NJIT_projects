<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Georgia;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background: url(yes1.jpg) no-repeat;
  background-size: 960px 940px;
}

.right {
  right: 0;
   background: url(laptop1.jpg) no-repeat;
  background-size: 960px 940px;

}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}

h1 {
  text-decoration: underline;
}

h3 {
  border: thick solid red;
  background:none;
  width: 700px;
  border-radius: 20px;
}
h4 {
  border: thick solid white;
  background: black;
  width: 700px;
  border-radius: 20px;
}
.form-btn{
	float: right;
	border: 0;
	background: red;
	color: white;
	padding: 15px 50px;
	border-radius: 20px;
	cursor: pointer;
	transition: 0.5s;
}
.form-btn:hover{
	background: black;
}
.hyper{
	position: absolute;
	top: 700px;
	left: 700px;
}

</style>
</head>
<body>

<div class="split left">
  <div class="left">
   <div>	
	<center><h1> Enter a Question </h1></center>
	<form action="back_to_mid.php" method="post">
	<br><br><h3>Fill in the blanks to create a question: <br> <br> Write a function named <textarea id="test" name="func" rows="1" cols="20" required></textarea> <br> that takes <br> the following arguments <textarea id="test" name="args" rows="1" cols="20" required></textarea> and performs <br> the following operations <textarea id="test" name="ops" rows="1" cols="40" required></textarea> <br></br> 
	<br>
	<h4><label for="difficulty">Choose Difficulty:</label>
	<select id="difficulty" name="difficulty">
		<option value="Easy">Easy</option>
		<option value="Medium">Medium</option>
		<option value="Hard">Hard</option>
	</select>
	<label for="topic">Topic:</label>
	<select id="topic" name="topic">
		<option value="Conditions">Conditions</option>
		<option value="Loops">Loops</option>
		<option value="Lists">Lists</option>
	</select>
	<input type="checkbox" name="forloop" value="forloop"> Require For Loop
	<input type="checkbox" name="prints" value="prints"> Require Print<br>
	 <br> <input type="text" name="arguments" id="arguments" required>Number of Arguments(Min 1)<br>
	 <br> <input type="text" name="case_num" id="case_num" required>Number of Test Cases(Min 2)<br>
	<div id="container"/>
	</div id="container">

	<div id="container1"/>
	</div id="container1">

	<a href="#" id="filldetails" onclick="addFields()"><p>Fill Details</a>
    	<!-- Test Case 1 Solution: <input type="text" name="case1_answer" required><br>
	 Test Case 2: <input type="text" name="test_case2" required><br>
	 Test Case 2 Solution: <input type="text" name="case2_solution" required><br> </h4>
	-->
	<h2> <input type="submit" class="form-btn" value="Submit Question"> 
<script>
function addFields(){
	    var number1 = document.getElementById("arguments").value;
            var number = document.getElementById("case_num").value;				
            var container = document.getElementById("container");
	    var container1 = document.getElementById("container1");	
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
	if(number1<6 && number1>0){		
	var values = ["string", "char", "int", "float", "complex", "bool", "dict", "list"];
            for (i=0;i<number1;i++){
		var select = document.createElement("select");
 		 select.name = "args_array[]";
  		 select.id = "args_array[]";

  		for (const val of values) {
  		  var option = document.createElement("option");
   		  option.value = val;
    		  option.text = val.charAt(0).toUpperCase() + val.slice(1);
    		  select.appendChild(option);


  }

  		var label = document.createElement("label");
  		label.innerHTML = "Choose your Argument Types: "
  		label.htmlFor = "arguments";

  		document.getElementById("container").appendChild(label).appendChild(select);
  		container.appendChild(document.createElement("br"));
}
		
               /*container.appendChild(document.createTextNode("Argument Number " + (i+1)));
                var input = document.createElement("input");
                input.type = "text";
		input.setAttribute("name", "args_array[]");
                container.appendChild(input);
                container.appendChild(document.createElement("br"));
		*/
            }
	else{
		window.alert("Enter Minimium of 2 Arguments");

        }

	while (container1.hasChildNodes()) {
                container1.removeChild(container1.lastChild);
            }

	if(number>1){		
            for (i=0;i<number;i++){
                container.appendChild(document.createTextNode("Test Case " + (i+1))); 
		container1.appendChild(document.createTextNode("Test Case Solution" + (i+1)));
                var input = document.createElement("input");
                input.type = "text";
		input.setAttribute("name", "test_cases[]");
		var input1 = document.createElement("input");
                input1.type = "text";
		input1.setAttribute("name", "case_solution[]");
                container.appendChild(input);
                container.appendChild(document.createElement("br"));
		container1.appendChild(input1);
                container1.appendChild(document.createElement("br"));

            }
	}else{
		window.alert("Enter Minimium of 2 Arguments");

        }
}


</script>

	</form>

 </div>
  </div>
</div>

<div class="split right" id="right">
  <div class="center">
	<div>
	<center><h1> Relevant Questions </h1></center>
	<form action="back_to_mid.php" method="post" id="form">
<!-- Add code for right side here
-->
<input type="text" id="search" placeholder="Search for keywords...">
<input type="button" onclick= "filter()" value="Filter"></button>
<div class="hyper">
<br><h2><a href= "https://afsaccess1.njit.edu/~dmr56/ALPHA_teacher.php"> Back to Teacher Page</a></h2>
</div>

<label for="difficulty">Choose Difficulty:</label>
	<select id="difficulty1" name="difficulty">
		<option value= "" selected></option>
		<option value="Easy">Easy</option>
		<option value="Medium">Medium</option>
		<option value="Hard">Hard</option>
	</select>
	<label for="topic">Topic:</label>
	<select id="topic1" name="topic">
		<option value= "" selected></option>
		<option value="Conditions">Conditions</option>
		<option value="Loops">Loops</option>
		<option value="Lists">Lists</option>
	</select>
<br>
<br>
<p id="para"></p>	
<script>
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
     var json = xhttp.responseText;
     var obj = JSON.parse(json);
     console.log(json);
     var p = document.getElementById("para");
for(i=0;i<obj[0][0].stack.length;i++){
var x = document.createTextNode(JSON.stringify(obj[0][0].stack[i].sentence));
x.name = "text[]";
var br = document.createElement("br");

/*
	var w = document.createTextNode(JSON.stringify(obj[0][0].stack[i].sentence));
  	var form = document.getElementById("form");

	var list = document.createElement("li");
	var search = document.getElementById("search");		
        list.name = "list_ids[]";
        list.value= "hello";
	
	form.appendChild(w);
	search.appendChild(list);
*/

p.appendChild(br);
p.appendChild(x);
	}
	}
};
function filter(){
	var json = xhttp.responseText;
	var obj = JSON.parse(json);
	var p = document.getElementById("para");
	p.innerHTML = "";
	//console.log(s[1]);
	//var node = document.getElementById
	for(i=0;i<obj[0][0].stack.length;i++){
	var br = document.createElement("br");
	var word = document.getElementById('search').value;
	var dif = document.getElementById('difficulty1').value;
	//var q = z.includes(dif);
	var top = document.getElementById('topic1').value;
	//var o = z.includes(top);
	var z = JSON.stringify(obj[0][0].stack[i].sentence);
	var k = JSON.stringify(obj[0][0].stack[i].difficulty);
	var t = JSON.stringify(obj[0][0].stack[i].topic);
	//var z = "Hello";
	var q = k.includes(dif);
	var m = z.includes(word);
	var o = t.includes(top);
	var w = document.createTextNode(JSON.stringify(obj[0][0].stack[i].sentence));
	w.name = "text[]";
	w.id = "text";
	console.log(document.getElementsByName("text"));
	//console.log(k);	
	//console.log(q);
	//console.log(top);
	//console.log(dif);
	if (m && q && o){
		p.appendChild(w);
		p.appendChild(br);
		//form.append(JSON.stringify(obj[0][0].stack[i].sentence))
	}else{
		//for(i=0; i<document.getElementByName("text"); i++){
		//document.body.removeChild(w);
		//form.appendChild(w);
		//}
	}
}
    };

	xhttp.open("POST", "https://afsaccess1.njit.edu/~dmr56/back_to_mid.php", true);
	xhttp.send(null);

</script>
</form>
</div>
    
  </div>
</div>
    
</body>
</html> 
