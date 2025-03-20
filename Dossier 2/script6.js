
  document.getElementById("togglePassword").addEventListener("click", function() {
      var passwordField = document.getElementById("MDP");
      var icon = this.querySelector("i");
      if (passwordField.type === "password") {
          passwordField.type = "text"; 
          icon.classList.replace("bi-eye", "bi-eye-slash"); // Change l'icône
      } else {
          passwordField.type = "password";
          icon.classList.replace("bi-eye-slash", "bi-eye");
      }
  });
