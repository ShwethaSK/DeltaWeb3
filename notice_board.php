<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	body{
		background-color: lightgreen;
	    }
	h1{
		color: brown;
	  }
	#div{
		background:#eee;
		border: 1px dotted #ccc;
		margin: 1em;
	   }
</style>
<script type="text/javascript">
var x1=0;
var z=getParameterByName('id');

      if(z!=null)
        { 
        	test();        }

<?php
include("session.php");
$var=$login_session;
?>
    var s="<?php echo $var; ?>";
	function add_text()
	{
	  x1++;
      DIV=document.createElement("LI");
      DIV.setAttribute("id", x1);
      x=document.getElementById("input").value;
      textnode1=document.createTextNode(x);
      textnode2=document.createTextNode("Published by-");
      textnode3=document.createTextNode(s+"   ");
      DIV.appendChild(textnode2);
      DIV.appendChild(textnode3);
      DIV.appendChild(textnode1);
      node=document.getElementById("div");
      node.appendChild(DIV);
      document.getElementById("input").value="";
	}
		function checkEdits()
    {
	     if(localStorage.userEdits!=null)
	document.getElementById("div").innerHTML=localStorage.userEdits;
      }
        function save_notes()
		{
 	     editElem=document.getElementById("div");
     	 editElem.contentEditable="false";
	     userVersion=editElem.innerHTML;
	     localStorage.userEdits=userVersion;
	     alert("Changes saved");
	     document.getElementById("div").innerHTML;
		}
        function getParameterByName(name,url)
        {
        	if(!url)url=window.location.href;
        	name=name.replace(/[\[\]]/g,"\\$&");
        	var regex=new RegExp("[?&]"+name+"(=([^&#]*)|&|#|$)"),results=regex.exec(url);
        	if(!results) return null;
        	if(!results[2]) return '';
        	return decodeURIComponent(results[2].replace(/\+/g," "));
        }
       function test()
     {
        window.location.replace("test.php");
       }
        </script>
	<title>
		Snippet sharing forum
	</title>
</head>
<body onload="checkEdits()">
<h1 >Share your code snippets here...
</h1>
<h3 >
Paste your snippets here...
</h3> <br />
<textarea id="input" cols="50" rows="20">
</textarea>
<input type="button" name="submit" value="Submit" onclick="add_text()" />
<input type="button" name="save" value="Save edits" onclick="save_notes()" />
<div id="div" class="code">
</div>
</body>
</html>
