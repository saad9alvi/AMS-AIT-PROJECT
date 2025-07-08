function submitAnnouncement() {
    const announcementText = document.getElementById('announcementText').value.trim();
    if (announcementText !== "") {
        const formData = new FormData();
        formData.append('text', announcementText);

        fetch('submit_announcement.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                document.getElementById('announcementText').value = '';
                alert('Announcement submitted!');
                return response.text();
            } else {
                throw new Error('Failed to submit announcement');
            }
        })
        .then(data => console.log(data))
        .catch(error => {
            console.error(error);
            alert('Failed to submit announcement. Please try again later.');
        });
    } else {
        alert('Please write an announcement before submitting.');
    }
}
