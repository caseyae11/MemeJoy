document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#uploadForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = new FormData(form);
        
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Assuming the response text contains the upload status message
                    if (xhr.responseText === 'memes was posted') {
                        // Display success message (You might want to use a function like showPopup here)
                        alert('Meme uploaded successfully!');
                    } else {
                        // Display error message (You might want to use a function like showPopup here)
                        alert('Failed to upload the meme.');
                    }
                } else {
                    // Handle HTTP error
                    alert('An error occurred while uploading the meme.');
                }
            }
        };

        xhr.open('POST', 'upload_process.php', true);

        xhr.send(formData);
    });
});
