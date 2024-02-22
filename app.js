function sendEmail(event) {
    event.preventDefault();
    
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const subject = document.getElementById("subject").value;
    const message = document.getElementById("message").value;
    
    const emailData = {
      from_name: name,
      from_email: email,
      message: message,
      subject: subject
    };
    
    const serviceID = "YOUR_SERVICE_ID"; // Replace with your own service ID
    const templateID = "YOUR_TEMPLATE_ID"; // Replace with your own template ID
    
    emailjs.send(serviceID, templateID, emailData)
      .then(() => alert("Your message has been sent."))
      .catch(error => alert(`Error: ${error}`));
  }
  
  document.getElementById("contact-form").addEventListener("submit", sendEmail);
  