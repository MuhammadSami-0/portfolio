document.getElementById("sendBtn").addEventListener("click", function () {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    // Create a JSON object
    const data = { name, email, message };

    // Send data to the backend endpoint
    fetch("sendemail.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
    })
    .then(response => response.text())
    .then(result => alert(result))
    .catch(error => alert("Error sending message: " + error));
});
