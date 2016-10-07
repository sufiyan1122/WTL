function setActive(e){
	var element=e.target;
	var previousElement=document.getElementsByClassName("active");
	if(previousElement.length==1)
		previousElement[0].setAttribute('class',' ');
	element.setAttribute('class','active');

}

var element=document.getElementsByTagName('input');
for(var i=0;i<element.length;i++){
	if(element[i].type!='submit'&&element[i].type!='reset'){
		element[i].addEventListener('focus',setActive,false);
	}
}
var usern=document.getElementById("user");
var username_allot=["abc","def","sufiyan","zeshan"];
usern.addEventListener('blur',checkUsername,false);

function checkUsername(e){
var error=document.getElementById("usererr");
var username=e.target;
	var flag=0;
	for(var i=0;i<username_allot.length;i++)
	{
		if(username.value==username_allot[i])
		{
			error.textContent="username not available";
			flag=1;
			break;
		}
	}

	if(flag==0&&error.value!="")
		error.textContent="username available";
}
