function vale(){
	if(form2.un.value == "")
	{
	form2.un.placeholder = "This Feild Cannot Be Empty"; 
	form2.un.style.backgroundColor = "red";
	form2.un.style.width = 420; 
	
	
	return false;

	}
	else
	{

	form2.un.style.backgroundColor = "green";
	form2.un.style.width = 420;
	}
}

function valpass(){
	if(form2.pas.value == "")
	{
	form2.pas.placeholder = "This Feild Cannot Be Empty"; 
	form2.pas.style.backgroundColor = "red";
	form2.pas.style.width = 420; 
	
	
	return false;

	}
	else
	{

	form2.pas.style.backgroundColor = "green";
	form2.pas.style.width = 420;
	}
}
