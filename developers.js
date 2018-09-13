function showDeveloper(str) {
			  var xhttp;    
			  if (str == "") {
				document.getElementById("txtHint").innerHTML = "";
				return;
			  }
			  xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				  //document.getElementById("txtHint").innerHTML = this.responseText;
				  XMLToHTML(this, str);
				}
			  };
			  xhttp.open("GET", "developer.xml", true);
			  xhttp.send();
			  
}


function XMLToHTML(xml, str) {
	var xmlDoc = xml.responseXML;
	var x = xmlDoc.getElementsByTagName("page_name")[0].childNodes[0];
	document.getElementById("page_title").innerHTML = x.nodeValue;
	var firstname="";
	var lastname="";
	var job="";
	var school="";
	var major="";
	
	
	if(str.localeCompare("Ayub")==0)
	{
		var y = xmlDoc.getElementsByTagName("firstname")[0].childNodes[0];
		document.getElementById("firstname").innerHTML = y.nodeValue;
		var z = xmlDoc.getElementsByTagName("lastname")[0].childNodes[0];
		document.getElementById("lastname").innerHTML = z.nodeValue;
		var w = xmlDoc.getElementsByTagName("job")[0].childNodes[0];
		document.getElementById("job").innerHTML = w.nodeValue;
		var x = xmlDoc.getElementsByTagName("school")[0].childNodes[0];
		document.getElementById("school").innerHTML = x.nodeValue;
		var v = xmlDoc.getElementsByTagName("major")[0].childNodes[0];
		document.getElementById("major").innerHTML = v.nodeValue;
	
	
	}
	else if(str.localeCompare("Joshua")==0)
	{
	
		var y = xmlDoc.getElementsByTagName("firstname")[1].childNodes[0];
		document.getElementById("firstname").innerHTML = y.nodeValue;
		var z = xmlDoc.getElementsByTagName("lastname")[1].childNodes[0];
		document.getElementById("lastname").innerHTML = z.nodeValue;
		var w = xmlDoc.getElementsByTagName("job")[1].childNodes[0];
		document.getElementById("job").innerHTML = w.nodeValue;
		var x = xmlDoc.getElementsByTagName("school")[1].childNodes[0];
		document.getElementById("school").innerHTML = x.nodeValue;
		var v = xmlDoc.getElementsByTagName("major")[1].childNodes[0];
		document.getElementById("major").innerHTML = v.nodeValue;
	
	}
	else if(str.localeCompare("Lavanya")==0)
	{
		var y = xmlDoc.getElementsByTagName("firstname")[2].childNodes[0];
		document.getElementById("firstname").innerHTML = y.nodeValue;
		var z = xmlDoc.getElementsByTagName("lastname")[2].childNodes[0];
		document.getElementById("lastname").innerHTML = z.nodeValue;
		var w = xmlDoc.getElementsByTagName("job")[2].childNodes[0];
		document.getElementById("job").innerHTML = w.nodeValue;
		var x = xmlDoc.getElementsByTagName("school")[2].childNodes[0];
		document.getElementById("school").innerHTML = x.nodeValue;
		var v = xmlDoc.getElementsByTagName("major")[2].childNodes[0];
		document.getElementById("major").innerHTML = v.nodeValue;
	
	
	}
	else if(str.localeCompare("Viraaj")==0)
	{
		var y = xmlDoc.getElementsByTagName("firstname")[3].childNodes[0];
		document.getElementById("firstname").innerHTML = y.nodeValue;
		var z = xmlDoc.getElementsByTagName("lastname")[3].childNodes[0];
		document.getElementById("lastname").innerHTML = z.nodeValue;
		var w = xmlDoc.getElementsByTagName("job")[3].childNodes[0];
		document.getElementById("job").innerHTML = w.nodeValue;
		var x = xmlDoc.getElementsByTagName("school")[3].childNodes[0];
		document.getElementById("school").innerHTML = x.nodeValue;
		var v = xmlDoc.getElementsByTagName("major")[3].childNodes[0];
		document.getElementById("major").innerHTML = v.nodeValue;
	
	
	}
	else 
	{
		document.getElementById("firstname").innerHTML = "";
		document.getElementById("lastname").innerHTML = "";
		document.getElementById("job").innerHTML = "";
		document.getElementById("school").innerHTML = "";
		document.getElementById("major").innerHTML = "";
	
	}
	
}
