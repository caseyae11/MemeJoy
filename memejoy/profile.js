// profile.js
function hideForms() {
    document.getElementById("usernameForm").style.display = "none";
    document.getElementById("passwordForm").style.display = "none";
    document.getElementById("deleteForm").style.display = "none";
}

// Call the function to hide forms on page load
window.onload = function() {
    hideForms();
};

function editUsername() {
    document.getElementById("usernameForm").style.display = "block";
    document.getElementById("passwordForm").style.display = "none";
    document.getElementById("deleteForm").style.display = "none";
}

function changePassword() {
    document.getElementById("usernameForm").style.display = "none";
    document.getElementById("passwordForm").style.display = "block";
    document.getElementById("deleteForm").style.display = "none";
}

function deleteAccount() {
    document.getElementById("usernameForm").style.display = "none";
    document.getElementById("passwordForm").style.display = "none";
    document.getElementById("deleteForm").style.display = "block";
}
