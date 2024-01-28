document.addEventListener('DOMContentLoaded', function() {
  fetch('fetchData.php')
    .then(response => response.json())
    .then(data => {
      data.forEach(meme => {
        const memeContainer = document.createElement('div');
        memeContainer.classList.add('meme-item');

        const imageContainer = document.createElement('div');
        imageContainer.classList.add('image-container');

        const image = document.createElement('img');
        image.src = meme.image_path;
        image.alt = 'meme';

        // Create the like button (Font Awesome heart icon)
        const likeButton = document.createElement('i');
        likeButton.classList.add('like-icon', 'fas', 'fa-heart');
        likeButton.setAttribute('data-meme-id', meme.meme_id); // Set meme ID attribute

        // Append elements to the image container
        imageContainer.appendChild(image);
        imageContainer.appendChild(likeButton);
        memeContainer.appendChild(imageContainer);

        document.getElementById('meme-gallery').appendChild(memeContainer);

        // Add event listener for like button
        likeButton.addEventListener('click', function(event) {
          event.stopPropagation();
          this.classList.toggle('clicked');
          this.classList.toggle('liked');

          const memeId = this.getAttribute('data-meme-id');

          console.log('Meme ID:', memeId);

          fetch('likeMeme.php', {
            method: 'POST',
            body: JSON.stringify({ meme_id: memeId }), // Send the meme ID to the server  //formURL encoded
            headers: {
              'Content-Type': 'application/json'
            }
          })
            .then(response => response.text())
            .then(data => {
              console.log(data); // Log the response from the server
              // Handle any further actions or UI updates here
            })
            .catch(error => {
              console.error('Error liking/unliking meme:', error);
              // Handle error if the request fails
            });
        });
      });
    })
    .catch(error => {
      console.error('Error fetching meme data:', error);
    });
});


















// // Fetch data from the backend PHP script
// fetch('fetchData.php')
//   .then(response => response.json())
//   .then(data => {
//     // Process the retrieved meme data
//     data.forEach(meme => {
//       // Create HTML elements to display the memes
//       const memeContainer = document.createElement('div');
//       memeContainer.classList.add('meme-item');

//       const image = document.createElement('img');
//       image.src = meme.image_path;
//       image.alt = 'meme';

//     //   const title = document.createElement('h3');
//     //   title.textContent = meme.title;

//     //   const category = document.createElement('p');
//     //   category.textContent = meme.category;

//       // Append elements to the DOM
//       memeContainer.appendChild(image);
//     //   memeContainer.appendChild(title);
//     //   memeContainer.appendChild(category);

//       document.getElementById('meme-gallery').appendChild(memeContainer);
//     });
//   })
//   .catch(error => {
//     console.error('Error fetching meme data:', error);
//   });








// document.addEventListener('DOMContentLoaded', function() {
//   fetch('fetchData.php')
//     .then(response => response.json())
//     .then(data => {
//       data.forEach(meme => {
//         const memeContainer = document.createElement('div');
//         memeContainer.classList.add('meme-item');

//         const imageContainer = document.createElement('div');
//         imageContainer.classList.add('image-container');

//         const image = document.createElement('img');
//         image.src = meme.image_path;
//         image.alt = 'meme';

//         // Create the like button (Font Awesome heart icon)
//         const likeButton = document.createElement('i');
//         likeButton.classList.add('like-icon', 'fas', 'fa-heart');
//         likeButton.setAttribute('data-meme-id', meme.meme_id); // Set meme ID attribute

//         // Append elements to the image container
//         imageContainer.appendChild(image);
//         imageContainer.appendChild(likeButton);
//         memeContainer.appendChild(imageContainer);

//         document.getElementById('meme-gallery').appendChild(memeContainer);

//         // Add event listener for like button
//         likeButton.addEventListener('click', function(event) {
//           event.stopPropagation();
//           this.classList.toggle('clicked');
//           this.classList.toggle('liked');

//           const memeId = this.getAttribute('data-meme-id');
//           fetch('likeMeme.php', {
//             method: 'POST',
//             body: JSON.stringify({ meme_id: memeId }), // Send the meme ID to the server
//             headers: {
//               'Content-Type': 'application/json'
//             }
//           })
//             .then(response => response.text())
//             .then(data => {
//               console.log(data); // Log the response from the server
//               // Handle any further actions or UI updates here
//             })
//             .catch(error => {
//               console.error('Error liking/unliking meme:', error);
//               // Handle error if the request fails
//             });
//         });
//       });
//     })
//     .catch(error => {
//       console.error('Error fetching meme data:', error);
//     });
// });