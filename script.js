document.getElementById('reportForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const incident = document.getElementById('incident').value;
    if (incident) {
        fetch('report_incident.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `incident=${encodeURIComponent(incident)}`,
        })
        .then(response => response.text())
        .then(data => alert(data))
        .catch(error => console.error('Error:', error));
    } else {
        alert('Please fill in the incident description.');
    }
});
