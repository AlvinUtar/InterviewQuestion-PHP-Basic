document.addEventListener('DOMContentLoaded', function() {
    const submitBtn = document.getElementById('submit-btn');
    const usernameInput = document.getElementById('username');
    const resultDiv = document.getElementById('result');

    submitBtn.addEventListener('click', function() {
        const username = usernameInput.value.trim();

        // Clear any previous result message
        resultDiv.textContent = '';

        // Check if the username input is empty
        if (username === '') {
            resultDiv.textContent = 'key in username and click submit';
            resultDiv.style.color = 'green';
            return;
        }

        // Create a new XMLHttpRequest object
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'info.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        // Define what happens on successful data submission
        xhr.onload = function() {
            if (xhr.status === 200) {
                // If the username is verified, show a success message
                if (xhr.responseText === 'Verified') {
                    resultDiv.textContent = 'Verified';
                    resultDiv.style.color = 'green';
                } else {
                    // Otherwise, show an error message
                    resultDiv.textContent = 'Error: Username is not abc';
                    resultDiv.style.color = 'red';
                }
            } else {
                // If there is an error with the request
                resultDiv.textContent = 'Error: Unable to verify username';
                resultDiv.style.color = 'red';
            }
        };

        // Send the request with the username parameter
        xhr.send('username=' + encodeURIComponent(username));
    });
});
