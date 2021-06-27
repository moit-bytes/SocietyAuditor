var left_nav_1 = document.getElementById('left_nav_1');
var left_nav_2 = document.getElementById('left_nav_2');
var left_nav_3 = document.getElementById('left_nav_3');
var left_nav_4 = document.getElementById('left_nav_4');
var left_nav_5 = document.getElementById('left_nav_5');
var left_nav_6 = document.getElementById('left_nav_6');
var left_nav_7 = document.getElementById('left_nav_7');
var left_nav_8 = document.getElementById('left_nav_8');
var left_nav_9 = document.getElementById('left_nav_9');

var dash_1 = document.getElementById('dash_1');
var dash_2 = document.getElementById('dash_2');
var dash_3 = document.getElementById('dash_3');
var dash_4 = document.getElementById('dash_4');
var dash_5 = document.getElementById('dash_5');
var dash_6 = document.getElementById('dash_6');
var dash_7 = document.getElementById('dash_7');
var dash_8 = document.getElementById('dash_8');
var dash_9 = document.getElementById('dash_9');

left_nav_1.addEventListener("click", func_1);
left_nav_2.addEventListener("click", func_2);
left_nav_3.addEventListener("click", func_3);
left_nav_4.addEventListener("click", func_4);
left_nav_5.addEventListener("click", func_5);
left_nav_6.addEventListener("click", func_6);
left_nav_7.addEventListener("click", func_7);
left_nav_8.addEventListener("click", func_8);
left_nav_9.addEventListener("click", func_9);


function make_nav_active(elem)
{
  elem.classList.add('has-background-primary');
  elem.classList.add('is-active');
}

function remove_nav_active()
{
  left_nav_1.classList.remove('is-active');
  left_nav_2.classList.remove('is-active');
  left_nav_3.classList.remove('is-active');
  left_nav_4.classList.remove('is-active');
  left_nav_5.classList.remove('is-active');
  left_nav_6.classList.remove('is-active');
  left_nav_7.classList.remove('is-active');
  left_nav_8.classList.remove('is-active');
  left_nav_9.classList.remove('is-active');
  

  left_nav_1.classList.remove('has-background-primary');
  left_nav_2.classList.remove('has-background-primary');
  left_nav_3.classList.remove('has-background-primary');
  left_nav_4.classList.remove('has-background-primary');
  left_nav_5.classList.remove('has-background-primary');
  left_nav_6.classList.remove('has-background-primary');
  left_nav_7.classList.remove('has-background-primary');
  left_nav_8.classList.remove('has-background-primary');
  left_nav_9.classList.remove('has-background-primary');

}

function func_1()
{
  remove_nav_active();
  make_nav_active(left_nav_1);
  dash_1.style.display = "block";
  dash_3.style.display = "none";
  dash_2.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
  dash_7.style.display = "none";
  dash_8.style.display = "none";
  dash_9.style.display = "none";

}

function func_2()
{
  remove_nav_active();
  make_nav_active(left_nav_2);
  dash_2.style.display = "block";
  dash_1.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
  dash_7.style.display = "none";
  dash_8.style.display = "none";
  dash_9.style.display = "none";
}
function func_3()
{
  remove_nav_active();
  make_nav_active(left_nav_3);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "block";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
  dash_7.style.display = "none";
  dash_8.style.display = "none";
  dash_9.style.display = "none";
}

function func_4()
{
  remove_nav_active();
  make_nav_active(left_nav_4);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "block";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
  dash_7.style.display = "none";
  dash_8.style.display = "none";
  dash_9.style.display = "none";
}

function func_5()
{
  remove_nav_active();
  make_nav_active(left_nav_5);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "block";
  dash_6.style.display = "none";
  dash_7.style.display = "none";
  dash_8.style.display = "none";
  dash_9.style.display = "none";
}

function func_6()
{
  remove_nav_active();
  make_nav_active(left_nav_6);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "block";
  dash_7.style.display = "none";
  dash_8.style.display = "none";
  dash_9.style.display = "none";
}

function func_7()
{
  remove_nav_active();
  make_nav_active(left_nav_7);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
  dash_7.style.display = "block";
  dash_8.style.display = "none";
  dash_9.style.display = "none";
}

function func_8()
{
  remove_nav_active();
  make_nav_active(left_nav_8);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
  dash_7.style.display = "none";
  dash_8.style.display = "block";
  dash_9.style.display = "none";
}

function func_9()
{
  remove_nav_active();
  make_nav_active(left_nav_9);
  dash_1.style.display = "none";
  dash_2.style.display = "none";
  dash_3.style.display = "none";
  dash_4.style.display = "none";
  dash_5.style.display = "none";
  dash_6.style.display = "none";
  dash_7.style.display = "none";
  dash_8.style.display = "none";
  dash_9.style.display = "block";
}

// Handling Profile Data

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



// Handling Guests Forms

var guest_edits = document.getElementsByClassName('guest-edit');
    Array.from(guest_edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        t1 = tr.getElementsByTagName("td")[1].innerText;
        t2 = tr.getElementsByTagName("td")[2].innerText;
        t3 = tr.getElementsByTagName("td")[3].innerText;
        t4 = tr.getElementsByTagName("td")[4].innerText;
        guestEdit.value = e.target.id;
        guest_edit_name.value = t1;
        guest_edit_flat.value = parseInt(t2);
        guest_edit_phone.value = parseInt(t3);
        guest_edit_arrival.value = t4;
      })
    })

var guest_deletes = document.getElementsByClassName('guest-delete');
    Array.from(guest_deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("delete ");
        sno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this guest?")) {
          console.log("yes");
          window.location = `/Society_Auditor/user_dashboard.php?delete=${sno}`;
        }
        else {
          console.log("no");
        }
      })
    })

//Handling Notice Board

var view_notices = document.getElementsByClassName('view-notice');
    Array.from(view_notices).forEach((element) => {
      element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        t1 = tr.getElementsByTagName("td")[1].innerText;
        t2 = tr.getElementsByTagName("td")[2].innerText;
        t3 = tr.getElementsByTagName("td")[3].innerText;
        console.log(t1, t2, t3);
        notice_date.value = t3;
        notice_desc.value = t2;
        notice_title.value = t1;
      })
    })

//Handling Amenity Payments

var amenity_type = document.getElementById('amenity_type');
amenity_type.addEventListener('click', () => 
{
  if(amenity_type.value == 'Housekeeper')
{
  document.getElementById('amenity_pay').value = 700;
}
else if(amenity_type.value == 'Carpenter')
{
  document.getElementById('amenity_pay').value = 1000;
}
else if(amenity_type.value == 'Repair')
{
  amenity_pay.value = 900;
}
else if(amenity_type.value == 'Festival')
{
  amenity_pay.value = 500;
}

})


