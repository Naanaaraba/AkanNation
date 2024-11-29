// function to validate fields on frontend
export function validateInput(regex = "", value, errElement, errMsg) {
  // check empty field
  if (!value) {
    errElement.classList.add("show");
    errElement.innerText = "Field cannot be empty";
    return false;
  }

  // test value against regex
  if (!regex.test(value)) {
    errElement.classList.add("show");
    errElement.innerText = errMsg;
    return false;
  }

  errElement.classList.remove("show");
  errElement.innerText = "";
  return true;
}

export function confirmPasswordMatch(password, confirmPassword, errElement) {
  if (password.value !== confirmPassword.value) {
    errElement.classList.add("show");
    errElement.innerText = "Passwords do not match";
    return false;
  }
  errElement.classList.remove("show");
  errElement.innerText = "";
  return true;
}

