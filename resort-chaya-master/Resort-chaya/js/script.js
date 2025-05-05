document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username && password) {
        alert(Welcome, ${username}!);
        // Implement your authentication logic here
    } else {
        alert("Please enter both username and password.");
    }
});