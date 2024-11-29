import { validateInput, confirmPasswordMatch } from "./validation.js";

// get form fields
const signUpButton = document.getElementById("signUpButton");

const username = document.getElementById("userName");
const emailAddress = document.getElementById("emailAddress");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("confirmPassword");

// get error fields
const usernameErr = document.getElementById("usernameErr");
const emailErr = document.getElementById("emailErr");
const passErr = document.getElementById("passErr");
const confirmPassErr = document.getElementById("confirmPassErr");

function validateAllFields() {
  let isValid = true;

  // Check each field only if it exists
  if (username && usernameErr) {
    isValid =
      validateInput(
        /^[a-zA-Z0-9_]{3,16}$/,
        username.value,
        usernameErr,
        "Enter a valid username (3-16 characters, letters, numbers, underscores)"
      ) && isValid;
  }

  if (emailAddress && emailErr) {
    isValid =
      validateInput(
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
        emailAddress.value,
        emailErr,
        "Enter a valid email address"
      ) && isValid;
  }

  if (password && passErr) {
    isValid =
      validateInput(
        /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/,
        password.value,
        passErr,
        "Password must be at least 8 characters and contain letters and numbers"
      ) && isValid;
  }

  if (password && confirmPassword && confirmPassErr) {
    isValid =
      confirmPasswordMatch(password, confirmPassword, confirmPassErr) &&
      isValid;
  }

  return isValid;
}

// send ajax request to php backend
function registerUser() {
  const ajax = new XMLHttpRequest();
  ajax.open("POST", "../actions/registerAction.php", true);
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.onreadystatechange = function () {
    if (ajax.readyState === XMLHttpRequest.DONE && ajax.status === 200) {
      // alert user of account creation success
      if (!ajax.responseText) {
        alert("Failed to create account. Please try again!");
        return;
      }
      alert(ajax.responseText);
      document.location.href = "../auth/login.php";
    }
  };

  ajax.send(
    "userName=" +
      username.value +
      "&emailAddress=" +
      emailAddress.value +
      "&password=" +
      password.value +
      "&confirmPassword=" +
      confirmPassword.value +
      "&signUpButton="
  );
}

// validate on button click
signUpButton.addEventListener("click", function (e) {
  if (validateAllFields()) {
    registerUser();
    // return true;
  } else {
    e.preventDefault();
    console.log("validation failed");
  }
});
