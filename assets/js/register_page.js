const form = document.getElementById('sub');
const username = document.getElementById('username');
const name_user = document.getElementById('name');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const flat = document.getElementById('flat');
const phoneNumber = document.getElementById('phoneNumber');
const phoneNumber2 = document.getElementById('phoneNumber2');

form.addEventListener('click', e => {
	e.preventDefault();
	if(checkInputs())
	{
		document.getElementById("form").submit();
	}
	else
	{
		//Do Nothing
	}
});

function checkInputs() 
{
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
	const nameValue = name_user.value.trim();
	const flatValue = flat.value.trim();
	const phone = phoneNumber.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	var flag = true;
	
	if(usernameValue === '') 
	{
		setErrorFor(username, 'Username cannot be blank');
		flag = false;
	} else 
	{
		setSuccessFor(username);
	}
	
	if(nameValue === '') {
		flag = false;
		setErrorFor(name_user, 'Name cannot be blank');
	}
    else 
	{
		setSuccessFor(name_user);
	}

	if(flatValue === '') {
		flag = false;
		setErrorFor(flat, 'Flat Number cannot be blank');
	}
    else 
	{
		setSuccessFor(flat);
	}

	if(phone === '') {
		flag = false;
		setErrorFor(phoneNumber, 'Phone Number cannot be blank');
	}
	else if(phone.length != 10)
	{
		flag = false;
		setErrorFor(phoneNumber, 'Enter Valid 10 digit Phone Number');
	}
    else 
	{
		setSuccessFor(phoneNumber);
	}
	
	if(passwordValue === '') {
		flag = false;
		setErrorFor(password, 'Password cannot be blank');
	} else {
		setSuccessFor(password);
	}
	
	if(password2Value === '') {
		flag = false;
		setErrorFor(password2, 'Password2 cannot be blank');
	} else if(passwordValue !== password2Value) {
		flag = false;
		setErrorFor(password2, 'Passwords does not match');
	} else{
		setSuccessFor(password2);
	}

	return flag;


}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	

const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});