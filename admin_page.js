document.getElementById("uploadForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form from reloading the page

    let formData = new FormData();
    formData.append("file", document.getElementById("file").files[0]);
    formData.append("name", document.getElementById("placeName").value);
    formData.append("location", document.getElementById("googleLocation").value);
    formData.append("description", document.getElementById("placeDescription").value);

    // Send data using AJAX
    fetch("upload.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) // Expect JSON response
    .then(data => {
        document.getElementById("responseMessage").innerHTML = `<p>${data.message}</p>`;
        if (data.success) {
            document.getElementById("uploadForm").reset();
        }
    })
    .catch(error => console.error("Error:", error));
});
