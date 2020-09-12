<html>
   <head>
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
  background: url(laptop1.jpg) no-repeat;
  background-size: 960px 940px;
}

.right {
  right: 0;
   background: url(mono-color.jpg) no-repeat;
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

h4{
  padding-left:7px;
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
	right: 50px;
	top: 750px;
}
.form-btn:hover{
	background: silver;
}

h4 {
    text-decoration: underline;
}

.form-btn2{
	float: right;
	border: 0;
	background: black;
	color: white;
	padding: 10px 30px;
	border-radius: 20px;
	cursor: pointer;
	transition: 0.5s;
	position: absolute;
	right: 50px;
	top: 750px;
}

      
</style>
</head>

<body>
<div class="split right">
  <div class="right">
   <div>
	<form id="form">
	
	


<h4> Check Questions & Enter Corresponding Point Values: </h4>
	<div id="container" class= "container">
	</div>

<input type="text" id="search" placeholder="Search for keywords...">
<input type="button" onclick= "filter()" value="Filter"></button>
<input type="button" onclick= "create()" value="Add Question" class="form-btn2"></button>

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
<p id="para">
</p>


	<script>
        	var xhttp = new XMLHttpRequest();
        	xhttp.onreadystatechange = function() {
           		if (this.readyState == 4 && this.status == 200) {
               		var json = xhttp.responseText;
               		var obj = JSON.parse(json);
	       		//console.log(json);	
               		//console.log(obj[0][0].stack);
	       		var container = document.getElementById("container");

               		for(i=0;i<obj[0][0].stack.length;i++){
				//create checkboxes for each question
				var c = document.createElement("input");	
                 		c.type = "checkbox";		
 		 		c.name = "exam_ids1[]";
  		 		c.value= JSON.stringify(obj[0][0].stack[i].id);
		 		
				//create input field for each question that will be the amount of points
				//var pts = document.createElement("input");
		 		//pts.type = "text";
		 		//pts.style = "display:none";	
		 		//pts.name = "exam_points[]";	
		 
				//create br element
	         		var br = document.createElement("br");	
				
				//create text element that shows question
				var x = document.createTextNode(JSON.stringify(obj[0][0].stack[i].sentence));
                 		
				var g = document.createElement("input");	
                 		g.type = "hidden";		
 		 		g.name = "exam_sent[]";
  		 		g.value= JSON.stringify(obj[0][0].stack[i].sentence);


				var form = document.getElementById("form");
				
				p = document.getElementById("para");

				p.appendChild(br);
		 		p.appendChild(c);
		 		p.appendChild(x);
		 		//p.appendChild(pts);
				p.appendChild(g);		

               			}
		   	}
		};
function create(){
	var json = xhttp.responseText;
	var obj = JSON.parse(json);
	var p = document.getElementById("para");
	var p1 = document.getElementById("para1");
	var ox = document.getElementsByName("exam_ids1[]");
	var g = document.getElementsByName("exam_sent[]");
	var h = document.getElementsByName("exam_sentence[]");
	//console.log(ox.length);
	console.log(ox);
	var br = document.createElement("br");
	if (h.length==0){

	for(i=0;i<g.length;i++){
		if (ox[i].checked == true){
		var pts1 = document.createElement("input");
		pts1.type = "text";
		//pts.style = "display:none";	
		pts1.name = "exam_points[]";
		var j = g[i].value;
		var x = document.createTextNode(j);
		var c1 = document.createElement("input");	
                c1.type = "hidden";		
 		c1.name = "exam_ids[]";
  		c1.value= ox[i].value;		
		

		p1.appendChild(br);
		p1.appendChild(c1);
		p1.appendChild(x);
		p1.appendChild(pts1);
}	
}
}
	else{
			for(i=0;i<h.length;i++){
			if (ox[i].checked == true){
			var pts1 = document.createElement("input");
			pts1.type = "text";
			//pts.style = "display:none";	
			pts1.name = "exam_points[]";
			var j = h[i].value;
			var x = document.createTextNode(j);
			var c1 = document.createElement("input");	
                	c1.type = "hidden";		
 			c1.name = "exam_ids[]";
  			c1.value= ox[i].value;
			var x = document.createTextNode(j);
			p1.appendChild(br);
			p1.appendChild(c1);
			p1.appendChild(x);

			p1.appendChild(pts1);

}
}
}
};

function filter(){
	var json = xhttp.responseText;
	var obj = JSON.parse(json);

	p.innerHTML = "";
	//console.log(s[1]);
	//var node = document.getElementById
	for(i=0;i<obj[0][0].stack.length;i++){
		var c = document.createElement("input");	
        	c.type = "checkbox";		
 		c.name = "exam_ids1[]";
  		c.value= JSON.stringify(obj[0][0].stack[i].id);
		
		var c2 = document.createElement("input");	
                c2.type = "hidden";		
 		c2.name = "exam_sentence[]";
  		c2.value= JSON.stringify(obj[0][0].stack[i].sentence);
	
 		
		//create input field for each question that will be the amount of points
		//var pts = document.createElement("input");
		//pts.type = "text";
		//pts.style = "display:none";	
		//pts.name = "exam_points[]";	
		 

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

	//var wh = document.createElement("input");	
        //wh.type = "hidden";		
 	//wh.name = "exam_ids[]";
  	//wh.value= JSON.stringify(obj[0][0].stack[i].sentence);

	var w = document.createTextNode(JSON.stringify(obj[0][0].stack[i].sentence));
	w.name = "text[]";
	w.id = "text";
	//console.log(document.getElementsByName("text"));
	//console.log(k);	
	//console.log(q);
	//console.log(top);
	//console.log(dif);
	if (m && q && o){
		p.appendChild(c2);
		//p.appendChild(w);
		p.appendChild(br);
		//form.append(JSON.stringify(obj[0][0].stack[i].sentence))
		//p.appendChild(br);
		p.appendChild(c);
		p.appendChild(w);
		//p.appendChild(pts);
		//num +=1;
	}else{
		//for(i=0; i<document.getElementByName("text"); i++){
		//document.body.removeChild(w);
		//form.appendChild(w);
		//}
	}
}
    };


	//post info from previous page *try putting above function later*
	
	xhttp.open("POST", "https://afsaccess1.njit.edu/~dmr56/back_to_mid.php", true);
	xhttp.send(null);
/*	
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://afsaccess1.njit.edu/~dmr56/back_to_mid.php", true);
	xhr.setRequestHeader('Content-Type', 'application/json');
	xhr.send(xhttp.responseText);
*/
	
	
document.getElementById('whatever').onchange = myFunction();

function move(){
	window.Alert("Hello");
}


       </script>
   </form>
</div>
  </div>
</div>
<div class="split left">
  <div class="center">
	<div>
	<center><h1> Exam </h1></center>
<!-- Add code for left side here
-->
	<form method="post" action="back_to_mid.php" id="form1">
	<h2> <input type="submit" class="form-btn" value="Make Exam"></h2>
	<p id="para1"></p>
	</form>
	</div>
    
  </div>
</div>




</body>
</html>
