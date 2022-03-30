// Generate Password
function random_code_generate(max, min) {
    const codeChars =
      "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^*_";
    const CharMath = Math.floor(Math.random() * (max - min + 1)) + min;
    const randCode = Array(CharMath)
      .fill(codeChars)
      .map(function(x) {
        return x[Math.floor(Math.random() * x.length)];
      })
  
      .join("");
    return randCode;
  }
  
  // Display
  
  document.getElementById("generateCode").addEventListener("click", function() {
    // Start get ID of user and display it
    const getUserID =
      document.getElementById("UserName").value +
      "<br>" +
      document.getElementById("UserEmail").value;
    const DisplayUserID = (document.getElementById(
      "DisplayUserName"
    ).innerHTML = getUserID);
  
    // End get ID of user and display it
  
    // Display request code
    random_code = random_code_generate(10, 5);
    // get request code field from the DOM
    const displayCodeContainer = document.getElementById("requestCode_container");
  
    const requestCode = document.getElementById("requestCode");
    requestCode.value = random_code;
  
    const newPassword = document.getElementById("newPassword");
  
    const userName = document.getElementById("UserName");
    const userEmail = document.getElementById("UserEmail");
    if (userName.value === "" || userEmail.value === "") {
      newPassword.style.display = "none";
      displayCodeContainer.style.display = "none";
    } else {
      // display Code Container
      displayCodeContainer.style.display = "block";
      // Clear User Name and Email Fields
      userName.value = "";
      userEmail.value = "";
      // Display the New Password Form
      newPassword.style.display = "block";
    }
  });
  // Display hidden password
  const x = document.getElementById("NewPassword-1");
  const y = document.getElementById("NewPassword-2");
  
  function ShowPassword() {
    if (x.type === "password" && y.type === "password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password";
    }
  }
  document.querySelector("#ShowPassword").addEventListener("click", ShowPassword);
  // Start Check if fields are not empty and if Password Mach
  const VerifyRequestCode = document.getElementById("VerifyRequestCode");
  const RequestCode = document.getElementById("requestCode");
  function resetPassword() {
    //  Check if all fields are completed
    if (x.value !== y.value || (x.value == "" && y.value == "")) {
      alert("Place check if: Passwords Mach and All fields are completed ");
    }
    // Check if reset Code matches
    else if (VerifyRequestCode.value !== RequestCode.value) {
      alert("Verification Code is Not Correct ");
    } else {
      alert("Password Reset Successful");
    }
  }
  
  // Call the  resetPassword function
  document
    .getElementById("resetPassword")
    .addEventListener("click", resetPassword);