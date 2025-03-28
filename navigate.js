// Function to toggle mobile menu
function toggleMenu() {
  let menu = document.querySelector(".nav-links");
  menu.classList.toggle("show");
}

document.addEventListener("DOMContentLoaded", function () {
  // Filter functionality
  const filterButtons = document.querySelectorAll(".filter-btn");
  const imageCards = document.querySelectorAll(".image-card");

  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const filter = button.getAttribute("data-filter");

      imageCards.forEach((card) => {
        if (filter === "all" || card.classList.contains(filter)) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });

  // Search functionality
  const searchBox = document.getElementById("searchBox");
  searchBox.addEventListener("keyup", function () {
    const searchTerm = searchBox.value.toLowerCase();
    imageCards.forEach((card) => {
      const caption = card.querySelector(".caption").textContent.toLowerCase();
      if (caption.includes(searchTerm)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });

  // Lightbox functionality
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightboxImg");
  const lightboxCaption = document.getElementById("lightboxCaption");

  imageCards.forEach((card) => {
    card.addEventListener("click", function () {
      lightbox.style.display = "flex";
      lightboxImg.src = card.querySelector("img").src;
      lightboxCaption.innerText = card.querySelector(".caption").innerText;
    });
  });

  document.querySelector(".close").addEventListener("click", function () {
    lightbox.style.display = "none";
  });
});

// Add a location
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("placeForm");
  const placesContainer = document.getElementById("placesContainer");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    // Get form values
    const imageInput = document.getElementById("placeImage");
    const name = document.getElementById("placeName").value;
    const location = document.getElementById("googleLocation").value;
    const description = document.getElementById("placeDescription").value;

    if (imageInput.files.length === 0) {
      alert("Please upload an image!");
      return;
    }

    // Create file reader to convert image to base64
    const reader = new FileReader();
    reader.readAsDataURL(imageInput.files[0]);

    reader.onload = function (e) {
      const imageUrl = e.target.result;

      // Create a new place card
      const placeCard = document.createElement("div");
      placeCard.classList.add("place-card");

      placeCard.innerHTML = `
                <img src="${imageUrl}" alt="${name}">
                <h3>${name}</h3>
                <p>${description}</p>
                <a href="${location}" target="_blank">View on Google Maps</a>
                <button class="delete-btn">Delete</button>
            `;

      // Add delete functionality
      const deleteButton = placeCard.querySelector(".delete-btn");
      deleteButton.addEventListener("click", function () {
        placesContainer.removeChild(placeCard);
      });

      // Add the place to the container
      placesContainer.appendChild(placeCard);

      // Reset the form
      form.reset();
    };
  });
});

// Sign In Modal
document.addEventListener("DOMContentLoaded", function () {
  const postPlaceBtn = document.getElementById("postPlaceBtn");
  const loginModal = document.getElementById("loginModal");
  const signInBtn = document.getElementById("signInBtn");

  // Check if user is signed in before posting
  postPlaceBtn.addEventListener("click", function () {
    const isLoggedIn = localStorage.getItem("loggedIn");

    if (!isLoggedIn) {
      loginModal.style.display = "flex"; // Show the modal
    } else {
      alert("You can now post a place!");
      // Redirect to the post form page (replace 'post.html' with your actual page)
      window.location.href = "post.html";
    }
  });

  // Redirect to Sign In page when user clicks "Sign In"
  signInBtn.addEventListener("click", function () {
    window.location.href = "signup.html"; // Redirect to the signup page
  });

  // Close modal when clicking outside of it
  window.addEventListener("click", function (event) {
    if (event.target === loginModal) {
      loginModal.style.display = "none";
    }
  });
});
