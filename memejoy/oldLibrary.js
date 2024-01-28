document.addEventListener('DOMContentLoaded', function() {
    fetch('fetchData.php')
      .then(response => response.json())
      .then(data => {
        data.forEach(meme => {
          const memeContainer = document.createElement('div');
          memeContainer.classList.add('meme-item');
  
          const image = document.createElement('img');
          image.src = meme.image_path;
          image.alt = 'meme';
  
          // Create the like button (Font Awesome heart icon)
          const likeButton = document.createElement('i');
          likeButton.classList.add('like-icon', 'fas', 'fa-heart');
          likeButton.setAttribute('data-meme-id', meme.id); // Set meme ID attribute
  
          // Append elements to the meme container
          memeContainer.appendChild(image);
          memeContainer.appendChild(likeButton);
  
          document.getElementById('meme-gallery').appendChild(memeContainer);
  
          // Add event listener for like button
          likeButton.addEventListener('click', function(event) {
            event.stopPropagation();
            this.classList.toggle('clicked');
            this.classList.toggle('liked');
  
            const memeId = this.getAttribute('data-meme-id');
            // Logic for liking/unliking goes here (AJAX or backend logic)
          });
        });
      })
      .catch(error => {
        console.error('Error fetching meme data:', error);
      });
  });
  