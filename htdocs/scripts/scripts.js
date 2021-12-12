document.getElementById("submit").addEventListener("click", function(event){

let isValid = true;
let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
let user = document.getElementById("fname");
let userCheck = document.getElementById("nameCheck");
let email = document.getElementById("email");
let emailCheck = document.getElementById("emailCheck");
let comments = document.getElementById("comments");
let commentsCheck = document.getElementById("commentsCheck");

function validCheck()
{


	if(user.value == "")
	{


		isValid = false;
		userCheck.style.color = "red";

	}
	else
	{
		userCheck.style.color = "black";
	}

	if(comments.value == "")
	{
		isValid = false;
		commentsCheck.style.color = "red";
	}
	else
	{
		commentsCheck.style.color = "black";
	}


	if(!emailRegex.test(email.value))
	{
		isValid = false;
		emailCheck.style.color = "red";
	}
	else
	{
		emailCheck.style.color = "black";
	}

if(isValid == true)
{
	isValid = true;
}

return isValid;




}

if(validCheck() == false)
{
	event.preventDefault();


}


});
