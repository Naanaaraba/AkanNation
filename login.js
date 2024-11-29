import { validateInput } from "./validation.js";

// get form fields
const loginButton = document.getElementById("loginButton");

const emailAddress = document.getElementById("emailAddress");
const password = document.getElementById("password");

// get error fields
const emailErr = document.getElementById("emailErr");
const passErr = document.getElementById("passErr");

function validateAllFields() {
  let isValid = true;

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

  return isValid;
}

// send ajax request to php backend
function loginUser() {
  const ajax = new XMLHttpRequest();
  ajax.open("POST", "../actions/loginAction.php", true);
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.onreadystatechange = function () {
    if (ajax.readyState === XMLHttpRequest.DONE && ajax.status === 200) {
      // alert user of account creation success
      if (ajax.responseText != "1") {
        // redirect based on role
        document.location.href = "../views/home.php";
      } else {
        document.location.href = "../admin/add_movies.php";
      }
    }
  };

  ajax.send(
    "&emailAddress=" +
      emailAddress.value +
      "&password=" +
      password.value +
      "&loginButton="
  );
}

// validate on button click
loginButton.addEventListener("click", function (e) {
  if (validateAllFields()) {
    loginUser();
  } else {
    e.preventDefault();
    console.log("validation failed");
  }
});
