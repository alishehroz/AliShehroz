
 function valfname()
{
	if(form.fname.value == "")
	{
	form.fname.placeholder = "This Feild Cannot Be Empty"; 
	form.fname.style.backgroundColor = "red";
	form.fname.style.width = 420; 
	
	
	return false;

	}
	else
	{

	form.fname.style.backgroundColor = "green";
	form.fname.style.width = 420;
	}
	
	
	
	
	
}


 function vallname()
{
	if(form.lname.value == "")
	{
	form.lname.placeholder = "This Feild Cannot Be Empty"; 
	form.lname.style.backgroundColor = "red";
	form.lname.style.width = 420; 
	
	return false;

	}
	else
	{

	form.lname.style.backgroundColor = "green";
	form.lname.style.width = 420;
	}
}
	
	 function valpass()
{
	if(form.password.value == "")
	{
	form.password.placeholder = "This Feild Cannot Be Empty"; 
	form.password.style.backgroundColor = "red";
	form.password.style.width = 420; 
	
	return false;

	}
	else
	{

	
	form.password.style.width = 420;
	}
}

 function valpass2()
{
	if(form.password1.value == "")
	{
	form.password1.placeholder = "This Feild Cannot Be Empty"; 
	
	form.password1.style.width = 420; 
	
	return false;

	}
	
	if(form.password.value!=form.password1.value)
	{
		form.password1.value = null; 
		form.password.value = null;
		form.password1.placeholder = "Passwords Do Not Match"; 
		form.password.placeholder = "Passwords Do Not Match"; 
		form.password1.style.backgroundColor = "red";
		form.password.style.backgroundColor = "red";
		form.password1.style.width = 420;
	
	
}	
	
	
	else
	{
		
	form.password1.style.backgroundColor = "green";
	form.password.style.backgroundColor = "green";
	form.password1.style.width = 420;
	
}
	
	

}

function valadd()
{
	if(form.add1.value == "")
	{
	form.add1.placeholder = "This Feild Cannot Be Empty"; 
	form.add1.style.backgroundColor = "red";
	form.add1.style.width = 420; 
	
	return false;

	}
	else
	{

	form.add1.style.backgroundColor = "green";
	form.add1.style.width = 420;
	}
	
	
	
	
	
}


function valcoun()
{
	if(form.country.value == "")
	{
	form.country.placeholder = "This Feild Cannot Be Empty"; 
	form.country.style.backgroundColor = "red";
	form.country.style.width = 420; 
	
	return false;

	}
	else
	{

	form.country.style.backgroundColor = "green";
	form.country.style.width = 420;
	}
	
	
	
	
	
}

function valcity()
{
	if(form.city.value == "")
	{
	form.city.placeholder = "This Feild Cannot Be Empty"; 
	form.city.style.backgroundColor = "red";
	form.city.style.width = 420; 
	
	return false;

	}
	else
	{

	form.city.style.backgroundColor = "green";
	form.city.style.width = 420;
	}
	
	
	
	
	
}


function valcn()
{
	if(form.cnumber.value == "")
	{
	form.cnumber.placeholder = "This Feild Cannot Be Empty"; 
	form.cnumber.style.backgroundColor = "red";
	form.cnumber.style.width = 420; 
	
	return false;

	}
	else
	{

	form.cnumber.style.backgroundColor = "green";
	form.cnumber.style.width = 420;
	}
	
		
}

function valcsc()
{
	if(form.csc.value == "")
	{
	form.csc.placeholder = "This Feild Cannot Be Empty"; 
	form.csc.style.backgroundColor = "red";
	form.csc.style.width = 420; 
	
	return false;

	}
	else
	{

	form.csc.style.backgroundColor = "green";
	form.csc.style.width = 420;
	}
	
		
}



	






