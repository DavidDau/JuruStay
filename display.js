document.addEventListener("DOMContentLoaded", function () {
    // Handle star rating clicks
    document.querySelectorAll(".star").forEach(star => {
        star.addEventListener("click", function () {
            const placeId = this.parentElement.getAttribute("data-place-id");
            const ratingValue = this.getAttribute("data-value");
            
            fetch("rate.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `place_id=${placeId}&rating=${ratingValue}`
            }).then(() => {
                alert("Rating submitted!");
                updateStars(this.parentElement, ratingValue);
            });
        });
    });
});

// Function to update star display
function updateStars(ratingContainer, ratingValue) {
    ratingContainer.querySelectorAll(".star").forEach(star => {
        star.classList.remove("active");
        if (star.getAttribute("data-value") <= ratingValue) {
            star.classList.add("active");
        }
    });
}

// Submit comment function
function submitComment(placeId) {
    const commentBox = document.getElementById(`comment-${placeId}`);
    const commentText = commentBox.value.trim();
    
    if (commentText === "") return;

    fetch("comment.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `place_id=${placeId}&comment=${encodeURIComponent(commentText)}`
    }).then(() => {
        loadComments(placeId);
        commentBox.value = "";
    });
}

// Load comments via AJAX
function loadComments(placeId) {
    fetch(`get_comments.php?place_id=${placeId}`)
        .then(response => response.text())
        .then(data => {
            document.getElementById(`comments-${placeId}`).innerHTML = data;
        });
}
