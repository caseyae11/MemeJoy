function showPopup(message) {
    const popup = document.getElementById('popup');
    const popupMessage = document.getElementById('popup-message');
    const popupTitle = document.getElementById('popup-title'); // Assuming you have a title in your popup

    popupTitle.textContent = "Upload Status"; // Customize the title
    popupMessage.textContent = message; // Set the message dynamically

    // You can add styles or classes to customize the appearance
    popup.style.display = 'block';
    popup.style.backgroundColor = 'lightblue';
    // Adjust other CSS properties as needed
}
