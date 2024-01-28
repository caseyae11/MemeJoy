document.addEventListener('DOMContentLoaded', function() {
    const likeButtons = document.querySelectorAll('.like-icon');

    likeButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.stopPropagation();

            const memeId = this.getAttribute('data-meme-id');

            // Toggle the 'clicked' class to trigger the size change
            this.classList.toggle('clicked');

            // Toggle the 'liked' class to change the color (liked/unliked state)
            this.classList.toggle('liked');

            // AJAX request to likeMeme.php
            fetch('likeMeme.php', {
                method: 'POST',
                body: JSON.stringify({ meme_id: memeId }),
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
                console.error('Error liking meme:', error);
                // Handle error if the request fails
            });
        });
    });
});









// document.addEventListener('DOMContentLoaded', function() {
//     const likeButton = document.getElementById('likeButton');
  
//     likeButton.addEventListener('click', function(event) {
//       // Toggle the 'clicked' class to trigger the size change
//       this.classList.toggle('clicked');
  
//       // Toggle the 'liked' class to change the color (liked/unliked state)
//       this.classList.toggle('liked');
  
//       const memeId = this.getAttribute('data-meme-id');
//       // Logic for liking/unliking goes here (AJAX or backend logic)
//     });
//   });



// document.addEventListener('DOMContentLoaded', function() {
//     // Function to fetch liked meme IDs for the logged-in user
//     function fetchLikedMemes() {
//         // Make a fetch request to your backend PHP script that fetches liked memes
//         fetch('fetchLikedMemes.php')
//             .then(response => response.json())
//             .then(data => {
//                 const likedMemeIds = data.likedMemeIds || []; // Extract liked meme IDs from the response

//                 // Select all like buttons
//                 const likeButtons = document.querySelectorAll('.like-icon');

//                 // Loop through each like button and update its status based on likedMemeIds
//                 likeButtons.forEach(button => {
//                     const memeId = button.getAttribute('data-meme-id');

//                     if (likedMemeIds.includes(memeId)) {
//                         button.classList.add('liked');
//                     } else {
//                         button.classList.remove('liked');
//                     }
//                 });
//             })
//             .catch(error => {
//                 console.error('Error fetching liked memes:', error);
//             });
//     }

//     // Execute fetchLikedMemes function to update like button statuses on page load
//     fetchLikedMemes();

//     // Add event listener to like buttons for toggling like status
//     const likeButtons = document.querySelectorAll('.like-icon');

//     likeButtons.forEach(button => {
//         button.addEventListener('click', function(event) {
//             event.stopPropagation();

//             // Toggle the 'clicked' class to trigger the size change
//             this.classList.toggle('clicked');

//             // Toggle the 'liked' class to change the color (liked/unliked state)
//             this.classList.toggle('liked');

//             const memeId = this.getAttribute('data-meme-id');
//             // Logic for liking/unliking goes here (AJAX or backend logic)
//         });
//     });
// });




// const likeButton = document.getElementById('likeButton');

// likeButton.addEventListener('click', function() {
//     if (likeButton.classList.contains('liked')) {
//         likeButton.classList.remove('liked');
//         // Remove from the database (user_likes table) since it's unliked
//         // AJAX or backend logic here
//     } else {
//         likeButton.classList.add('liked');
//         // Add to the database (user_likes table) since it's liked
//         // AJAX or backend logic here
//     }
// });

// document.addEventListener('DOMContentLoaded', function() {
//     const likeButton = document.getElementById('likeButton');
  
//     likeButton.addEventListener('click', function(event) {
//       // Toggle the 'clicked' class to trigger the size change
//       this.classList.toggle('clicked');
  
//       // Add logic here for liking/unliking
//       const memeId = this.getAttribute('data-meme-id');
//       // ... rest of the logic for liking/unliking
//     });
//   });
  




// // Find all like icons
// const likeIcons = document.querySelectorAll('.like-icon');

// // Add click event listener to each like icon
// likeIcons.forEach((icon) => {
//     icon.addEventListener('click', function() {
//         // Toggle the color or style
//         if (icon.classList.contains('liked')) {
//             icon.classList.remove('liked');
//             // Remove from the database (user_likes table) since it's unliked
//             // Your AJAX request or form submission logic here
//         } else {
//             icon.classList.add('liked');
//             // Add to the database (user_likes table) since it's liked
//             // Your AJAX request or form submission logic here
//         }
//     });
// });
