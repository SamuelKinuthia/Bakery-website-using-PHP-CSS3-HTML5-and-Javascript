const fname = document.querySelector('#fname');
const lname = document.querySelector('#lname');
const email = document.querySelector('#email');
const phone = document.querySelector('#phone');
const mess = document.querySelector('#mess');
const form = document.querySelector('#form');
const submit = document.querySelector('.submit');

function validateData(){
  if(fname.value === "" || fname.value == null){
  	fname.style.border = "red";
  	return;
  }
  if(lname.value === "" || lname.value == null){
  	lname.style.border = "red";
  	return;
  }
  if(fname.value.length < 3 || lname.value.length < 3){
  	lname.style.border = "red";
  	fname.style.border = "red";
  	return;
  }
  if(email.value == ""){
  	email.style.border = "red";
  	return;
  }
  var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(pattern.test(email.value!==true)){
  	email.style.border = "red";
  }
  if(phone.value === ""){
    phone.style.border = "red";
    return;
  }
  if(phone.value.length < 12){
    phone.style.border = "red";
    return;
  }
  if(mess.value.length < 500){
     mess.style.border = "red";
     return;
  }
submit.innerText = "Form submitted successfully";
submit.style.color = "green";

}
function checkData(e){
  e.preventDefault();

validateData();
}

form.addEventListener('submit',checkData);