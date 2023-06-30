// for nav items and menu

      const menuIcon = document.querySelector(".menu-icon");
      const menuItems = document.querySelector(".menu-items");

      menuIcon.addEventListener("click", function () {
        menuItems.classList.toggle("show");
      });

      //forms
     /* const contactForm = document.getElementById("contactForm");
      contactForm.addEventListener("submit", function (event) {
        event.preventDefault();*/

        // Get the form data
        /*const formData = new FormData(contactForm);
        const name = formData.get("name");
        const email = formData.get("email");
        const message = formData.get("message");*/

        
       /*if (name === '' || email === '' || message === '') {
                alert('Please fill in all fields');
            } else {
                alert(`Thank you ${name} for contacting us. 😊 We will reach out to you via your email.`);
                
            }



        // Reset the form
        contactForm.reset();
      });*/

      //  social media JavaScript code here
      const socialIcons = document.querySelectorAll(".social-icons a");

      socialIcons.forEach((icon) => {
        icon.addEventListener("click", () => {
          //  actions when a social media icon is clicked
          console.log("Icon clicked:", icon.getAttribute("href"));
        });
      });

      //Back to top button
      function scrollToTop() {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      }

      window.onscroll = function () {
        showBackToTopButton();
      };

      function showBackToTopButton() {
        const backToTopButton = document.querySelector(".back-to-top");
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          backToTopButton.style.display = "block";
        } else {
          backToTopButton.style.display = "none";
        }
      }