document.getElementById('send_message').addEventListener('click', function() {
    fetch('send_email.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'subject': 'თქვენი პროექტი',
            'body': 'თქვენი შეტყობინება here'
        })
    })
    .then(response => response.text())
    .then(data => alert('Email sent successfully'))
    .catch(error => alert('Failed to send email'));
});