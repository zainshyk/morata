const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});







// Validation Form 

function seterror(id, error) {
  element = document.getElementById(id);
  element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function clearErrors() {
  errors = document.getElementsByClassName('formerror');
  for (let item of errors) {
      item.innerHTML = " ";
  }
}

function validateForm() {
  var returnval = true;
  clearErrors();


  
  let email = document.forms['myform']["email"].value;
  if (email.length < 13) {
      seterror("emails", "*Enter your valid email address!");
      returnval = false;
  }


  let password = document.forms['myform']["password"].value;
  if (password.length < 6) {
      seterror("pass", "*Password should be atleast 6 characters!");
      returnval = false;
  }

  return returnval;
}



// Validation Form 

function seterrors(id, error) {
  element = document.getElementById(id);
  element.getElementsByClassName('formerrors')[0].innerHTML = error;
}

function clearErrors() {
  errors = document.getElementsByClassName('formerrors');
  for (let item of errors) {
      item.innerHTML = " ";
  }
}

function validateForms() {
  var returnval = true;
  clearErrors();


  
  let name = document.forms['myforms']["name"].value;
  if (name.length < 3) {
      seterrors("fullname", "*Enter your full name");
      returnval = false;
  }


  let useremail = document.forms['myforms']["useremail"].value;
  if (useremail.length < 10) {
      seterrors("emailerror", "*Enter your valid email address!");
      returnval = false;
  }


  let pass = document.forms['myforms']["pass"].value;
  if (pass.length < 6) {
      seterrors("passerror", "*Password should be atleast 6 characters!");
      returnval = false;
  }


  let cpassword = document.forms['myforms']["Cpassword"].value;
  if (cpassword !== pass) {
      seterrors("cpass", "*Please enter the same password!");
      returnval = false;
  }


  return returnval;
}