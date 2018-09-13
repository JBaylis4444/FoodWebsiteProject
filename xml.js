
function termsDisplay(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				myFunction(this);
			}
		};
		xhttp.open("GET", "terms_and_conditions.xml", true);
		xhttp.send();
		
}
		function myFunction(xml) {
			var i=0;
			var xmlDoc = xml.responseXML;
			var x = xmlDoc.getElementsByTagName("page_name")[0].childNodes[0];
			document.getElementById("page_title").innerHTML = x.nodeValue;
			
			var str1 ="term";
			var str2="rules";
			
			for (i=0; i<8; i++)
			{
				var title = str1.concat(i.toString());
				var rules = str2.concat(i.toString());
				var y = xmlDoc.getElementsByTagName("title")[i].childNodes[0];
				document.getElementById(title).innerHTML = y.nodeValue;
				var z = xmlDoc.getElementsByTagName("rules")[i].childNodes[0];
				document.getElementById(rules).innerHTML = z.nodeValue;
			}
		}
		
		
		function Back() {
			window.history.back();
		}