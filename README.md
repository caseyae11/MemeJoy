# MemeJoy

**MemeJoy** is a vibrant platform dedicated to meme enthusiasts who enjoy creating, sharing, and exploring humorous content. It offers an interactive environment that supports user-generated content, allowing users to contribute, share, and rate memes.

## Introduction

MemeJoy aims to enhance community engagement by allowing users to upload, download, like, favorite, and share memes. The platform uses modern web technologies to provide a seamless and responsive user experience.

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- SQL

## Features

- **Custom Meme Uploading and Downloading Tools**: Users can upload their memes and download others' creations.
- **Community-driven Content Rating Systems**: Memes can be rated by the community, influencing their visibility and popularity.
- **Extensive Meme Categorization for Easy Browsing**: Memes are categorized to facilitate easy discovery and browsing based on user preferences.

## Setup and Configuration

To set up the MemeJoy platform, follow these steps:

1. **Clone the repository**:
   ```
   git clone https://github.com/caseyae11/memejoy.git
   ```
2. **Navigate to the project directory**:
   ```
   cd memejoy
   ```
3. **Install dependencies**:
   ```
   Ensure PHP and MySQL are installed on your system. Configure the web server to serve the project directory.
   ```
4. **Database setup**:
   ```
   Import the provided SQL schema into your MySQL database to set up the necessary tables.
   ```

## Security Measures

- **Password Hashing**: Passwords are hashed using PHP's built-in functions to enhance security.
- **File Validation**: Checks are in place to ensure that only valid image files (JPEG, PNG) can be uploaded.

## Future Roadmap

- **UI Improvements**: Enhancements in responsiveness and accessibility.
- **Admin Setup**: A backend for administrators to manage content and verify uploads.
- **Cloud Storage Integration**: Transition from local storage to cloud storage for scalability and reliability.

## API Documentation

**Endpoints**:
- **Upload Meme**: `POST /upload_process.php` Handles meme uploads.
- **Like Meme**: `POST /likeMeme.php` Allows users to like a meme.
- **Fetch Liked Memes**: `GET /getLikedMemes.php` Retrieves a user's liked memes.

**Example Request**:
```
POST /upload_process.php
Content-Type: multipart/form-data
{
  "memeFile": "file",
  "memeTitle": "Example Meme",
  "memeCategory": "Funny"
}
```

## Contributing

Contributions are welcome! Please fork the repository and submit pull requests for any enhancements. Follow the coding standards specified in the project documentation for consistency.

## License

This project is licensed under the MIT License - see the LICENSE.md file for details.

