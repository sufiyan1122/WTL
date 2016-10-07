var rollno=document.getElementById("roll_no");
var sname=document.getElementById("sname");
var addr=document.getElementById("address");

rollno.addEventListener('blur',checkRollNo,false);
sname.addEventListener('blur',checkName,false);
addr.addEventListener('blur',checkAddress,false);

function checkRollNo(e)
{
	var element=e.target;
	if(/[^a-zA-Z0-9]/.test(element.value))
	{
		alert("your rollno contain value except a-z,A-Z,0-9");
		element.value="";
		return false;
	}

	if(!/[a-zA-Z]/.test(element.value))
	{
		alert("your rollno must contain value a-z,A-Z");
		element.value="";
		return false;
	}

	if(!/[0-9]/.test(element.value))
	{
		alert("your rollno must contain value 0-9");
		element.value="";
		return false;
	}

	if(element.value.length>8 || element.value.length<6)
		{
			alert("too short or long roll no");
			element.value="";
			return false;
		}

	return true;
		
}
function checkAddress(e)
{
	var element=e.target;
	if(element.value.length<=20)
	{
		alert("your address is too short");
		element.value="";
		return false;
	}
	return true;
}

function checkName(e)
{
	var element=e.target;
	if(/[^a-zA-Z ]/.test(element.value))
	{
		alert("your name contail value except a-z,A-Z");
		element.value="";
		return false;
	}
	return true;
}