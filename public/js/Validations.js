const form = document.getElementById("#form");
const fullname = document.getElementById("fname_id");
const username1 = document.getElementById("uname_id");
const email = document.querySelector("#email_id");
const password = document.getElementById("password_id");
const password2 = document.getElementById("password2_id");
const submitBtn = document.querySelector("#submitBtn");
const phone = document.getElementById("phone");
const address = document.getElementById("address_id");
const birthDate = document.getElementById("bd_id");
const image = document.getElementById("img_id");
// [Client-side VALIDATIONs
var NameCheck;
var usernameCheck;
var emailCheck;
var password_Check;
var password2_check;
var phoneCheck;
var addressCheck;
var birthdayCheck;
var imageCheck;

// Tooltip for title
var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

function submit() {
  fullname.addEventListener("keyup", function () {
    nameValidation();
  });
  email.addEventListener("keyup", function () {
    emailValidation();
  });
  phone.addEventListener("keyup", function () {
    phoneValidation();
  });
  password.addEventListener("keyup", function () {
    passwordValidation();
  });
  password2.addEventListener("keyup", function () {
    passwordConfirmation();
  });
  address.addEventListener("keyup", function () {
    addressValidation();
  });

  image.addEventListener("change", function () {
    validateImage();
  });
  birthDate.addEventListener("blur", function(){
    birthDateValidation();

  });
  birthDate.addEventListener("change", function(){
    birthDateValidation();
  });
  username1.addEventListener("keyup", function(){
    usernameValidation();
  });

}

submit();


function nameValidation() {
  var fnameValid = /^[a-zA-Z]+(?:\s[a-zA-Z]+)*$/;
  // ^ : start of the string
  // [a-zA-Z] : any letter from a to z or A to Z
  // + : one or more
  // (?:) : non-capturing group
  // \s : space
  // [a-zA-Z] : any letter from a to z or A to Z
  // * : zero or more
  // $ : end of the string
  if (fnameValid.test(fullname.value)) {
    document.querySelector("#fname_id").classList.add("is-valid");
    document.querySelector("#fname_id").classList.remove("is-invalid");
    NameCheck=true;
  } else {
    document.querySelector("#fname_id").classList.add("is-invalid");
    document.querySelector("#fname_id").classList.remove("is-valid");
    NameCheck=false;
  }
}
function emailValidation() {
  var emailValid =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    // The email validation regex is taken from https://emailregex.com/
  if (emailValid.test(email.value)) {
    email.classList.add("is-valid");
    email.classList.remove("is-invalid");
    emailCheck=true;
  } else {
    email.classList.add("is-invalid");
    email.classList.remove("is-valid");
    emailCheck=false;
  }
}
function phoneValidation() {
  var phonevalid = /^(01[0125]|0100|0101)\d{8}$/;
  //^ : start of the string
  //01[0125] : 0100, 0101 to be 12 digits instead of 11
  // \d : any digit
  // {8} : 8 times
  // $ : end of the string
  if (phonevalid.test(phone.value)) {
    phone.classList.add("is-valid");
    phone.classList.remove("is-invalid");
    phoneCheck=true;
  } else {
    phone.classList.add("is-invalid");
    phone.classList.remove("is-valid");
    phoneCheck=false;
  }
}
function passwordValidation() {
  passwordValid =
    /^(?=.*\d)(?=.*[!@#$%^&*()_+={}\[\]|\\:;'"<>,.?/-])(?=.*[a-zA-Z]).{8,}$/;
  if (passwordValid.test(password.value)) {
    password.classList.add("is-valid");
    password.classList.remove("is-invalid");
    password_Check=true;
  } else {
    password.classList.add("is-invalid");
    password.classList.remove("is-valid");
    password_Check=false;
  }
}

function passwordConfirmation() {
  if( password.value === password2.value && password2.value.length > 0) {
    password2.classList.add("is-valid");
    password2.classList.remove("is-invalid");
    password2_check=true;
  } else {
    password2.classList.add("is-invalid");
    password2.classList.remove("is-valid");
    password2_check=false;
  }
}
function addressValidation() {
  addressValue = document.getElementById("address_id").value;
  if (addressValue.length > 0) {
    address.classList.add("is-valid");
    address.classList.remove("is-invalid");
    addressCheck=true;
  } else {
    address.classList.remove("is-valid");
    address.classList.add("is-invalid");
    addressCheck=false;
  }
}

function birthDateValidation() {
  const birthDate = document.getElementById("bd_id");
  const birthDateValue = birthDate.value;

  if (birthDateValue === "") {
    birthDate.classList.add("is-invalid");
    birthDate.classList.remove("is-valid");
    birthdayCheck=false;
  } else {
    const selectedDate = new Date(birthDateValue);
    if (
      selectedDate.getFullYear() < 1900 ||
      selectedDate.getFullYear() > 2024
      ) {
        birthDate.classList.remove("is-valid");
        birthDate.classList.add("is-invalid");
        birthdayCheck=false;
      } else {
        birthDate.classList.remove("is-invalid");
        birthDate.classList.add("is-valid");
        birthdayCheck=true;
    }
  }
}

function validateImage() {
  const imageValue = image.value;

  if (imageValue === "") {
    // If the value is empty, display an error message
    image.classList.add("is-invalid");
    image.classList.remove("is-valid");
    imageCheck=false;
  } else {
    // If a file is selected, remove the error message
    image.classList.add("is-valid");
    image.classList.remove("is-invalid");
    imageCheck=true;
  }
}
function usernameValidation(){
  var usernameValid = /^[a-zA-Z0-9]+$/;
  if (usernameValid.test(username1.value)) {
    username1.classList.add("is-valid");
    username1.classList.remove("is-invalid");
    usernameCheck=true;
  } else {
    username1.classList.add("is-invalid");
    username1.classList.remove("is-valid");
    usernameCheck=false;
  }
}