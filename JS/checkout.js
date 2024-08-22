/// Validation Form 

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

  let name = document.forms['myform']["name"].value;
  if (name.length < 3) {
      seterror("fullname", "*Enter your full name!");
      returnval = false;
  }
  
  let email = document.forms['myform']["email"].value;
  if (email.length < 13) {
      seterror("emails", "*Email length is too short!");
      returnval = false;
  }

  let address = document.forms['myform']["address"].value;
  if (address.length < 5) {
      seterror("adress", "*Please provide full address for safe shipping!");
      returnval = false;
  }

  let city = document.forms['myform']["city"].value;
  if (city.length < 3) {
      seterror("cityerror", "*Please enter shipping area city!");
      returnval = false;
  }

  let state = document.forms['myform']["state"].value;
  if (state.length < 3) {
      seterror("states", "*Please enter correct state!");
      returnval = false
  }

  let zip = document.forms['myform']["zip"].value;
  if (zip.length < 5) {
      seterror("zips", "*Please enter zip number!");
      returnval = false
  }

  let cardname = document.forms['myform']["cardname"].value;
  if (cardname.length < 3) {
      seterror("cardfullname", "*Enter your full name written on card!");
      returnval = false
  }

  let cardnumber = document.forms['myform']["cardnumber"].value;
  if (cardnumber.length < 10) {
      seterror("cardnum", "*Enter your complete credit card number!");
      returnval = false
  }

  let expmonth = document.forms['myform']["expmonth"].value;
  if (expmonth.length < 4) {
      seterror("monthexp", "*Enter the month in which your card has been expired!");
      returnval = false
  }

  let expyear = document.forms['myform']["expyear"].value;
  if (expyear.length < 4) {
      seterror("yearexp", "*Enter card expire year!");
      returnval = false
  }

  let cvv = document.forms['myform']["cvv"].value;
  if (cvv.length < 3) {
      seterror("cvverror", "*Enter your cvv number!");
      returnval = false
  }


  return returnval;
}