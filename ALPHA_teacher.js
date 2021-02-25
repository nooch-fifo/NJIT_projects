<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet"type="text/css"href="style1.css">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
 	 <script>
	
           // var xhttp = new XMLHttpRequest();
           //document.write("<h1>Welcome to web page</h1>");
           var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = function() {
           if (this.readyState == 4 && this.status == 200) {
               var json = xhttp.responseText;
              //var obj = JSON.parse(json);
	       console.log(json);
               //console.log(obj[0][0].stack);
	       //var i =0;
              //for(i=0;i<obj[0][0].stack.length;i++){
                   //document.write(JSON.stringify(obj[0][0].stack[i]));
               //}

}
};
xhttp.open("POST", "https://afsaccess1.njit.edu/~dmr56/back_to_mid.php", true);

xhttp.send(null);


    
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "https://afsaccess1.njit.edu/~dmr56/prac_exam.php", true);
	xhr.setRequestHeader('Content-Type', 'application/json');
	xhr.send(xhttp.responseText);

</script>

<body>
	<h1> Teacher Login Successful! </h1>
	

<p><font size = "5"> <a href= "https://afsaccess1.njit.edu/~dmr56/create.php"> Create a Question </a> </font>
	<p><br><font size = "5"> <a href= "https://afsaccess1.njit.edu/~dmr56/prac_exam.php"> Create Exam </a> </font>
	<p><br><font size = "5"> <a href= "https://afsaccess1.njit.edu/~dmr56/grade_exam.php"> Grade Exam </a> </font>
	<p><br><br><br><font size = "4"> <a href= "https://afsaccess1.njit.edu/~dmr56/ALPHA_front.php"> Logout </a> </font>

</body>
</html>
