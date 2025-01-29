// Client-side validation function
function validateForm() {
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let subject = document.getElementById("subject").value;
    let message = document.getElementById("message").value;
  
    // Check if all fields are filled
    if (
      fullname == "" ||
      email == "" ||
      phone == "" ||
      subject == "" ||
      message == ""
    ) {
      alert("All fields are required.");
      return false;
    }
  
    // Check if the email is valid
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
      alert("Please enter a valid email.");
      return false;
    }
  
    // If all validations pass
    return true;
  }
  