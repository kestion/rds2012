function display(i)
{
	if(document.getElementById("cahier_charges") != null)
	{
		document.getElementById("cahier_charges").style.display = "none";
	}
	if(document.getElementById("objectifs") != null)
	{
		document.getElementById("objectifs").style.display = "none";
	}
	if(document.getElementById("mission") != null)
	{
		document.getElementById("mission").style.display = "none";
	}

	if(document.getElementById("travail") != null)
	{
		document.getElementById("travail").style.display = "none";
	}
	if(document.getElementById("contribution") != null)
	{
		document.getElementById("contribution").style.display = "none";
	}
	if(document.getElementById("bilan") != null)
	{
		document.getElementById("bilan").style.display = "none";
	}
	
	if(document.getElementById("school") != null)
	{
		document.getElementById("school").style.display = "none";
	}
	if(document.getElementById("work") != null)
	{
		document.getElementById("work").style.display = "none";
	}
	if(document.getElementById("skills") != null)
	{
		document.getElementById("skills").style.display = "none";
	}
	if(document.getElementById("others") != null)
	{
		document.getElementById("others").style.display = "none";
	}
	
	document.getElementById(i).style.display = "block";
}

function show()
{
	document.getElementById("me_plus").style.display="block";
	document.getElementById("cv_nav").style.display="none";
	document.getElementById("others").style.display="none";
	document.getElementById("skills").style.display="none";
	document.getElementById("school").style.display="none";
	document.getElementById("work").style.display="none";
}

function shown()
{
	document.getElementById("me_plus").style.display="none";
	document.getElementById("cv_nav").style.display="block";
}
