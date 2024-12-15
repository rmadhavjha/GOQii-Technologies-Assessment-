# GOQii-Technologies-Assessment-
Demo Link: www.madhavjha.in/goqii-technologies-assessment

github URL: https://github.com/rmadhavjha/GOQii-Technologies-Assessment-

## Installation and Usage Guide for PHP Backend and React Frontend

### Prerequisites

Before installing and running the project, ensure you have the following installed on your system:

1. **PHP:** Version 7.4 or later.
2. **MySQL:** Any version compatible with your PHP setup.
3. **Node.js and npm:** Node.js version 14+ is recommended.
4. **XAMPP or WAMP:** (Optional) For setting up a local PHP server and MySQL.

---

### 1. Installation of PHP Backend

#### Steps:

1. **Clone the Repository:**
   ```bash
   git clone <repository-link>
   cd <repository-folder>/backend-php
   ```

2. **Setup Database:**
   - Create a new MySQL database (e.g., `users`).
   - Import the provided SQL file into your database:
    -CREATE TABLE users (
    -id INT AUTO_INCREMENT PRIMARY KEY,
    -name VARCHAR(100) NOT NULL,
    -email VARCHAR(150) UNIQUE NOT NULL,
    -password VARCHAR(255) NOT NULL,
    -dob DATE NOT NULL,
    -created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
    
     ```
   - Ensure your database contains a `users` table with columns: `id`, `name`, `email`, `password`, and `dob`.

3. **Configure Database Connection:**
   - Open `config.php` in the `backend-php` directory.
   - Update the database credentials:
     ```php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $dbname = "users_db";
     ```

4. **Start PHP Server:**
   - Navigate to the `backend-php` folder and start a PHP server:
     ```bash
      localhost
     ```
   - Your backend API will be available at `http://localhost/`.

---

### 2. Installation of React Frontend

#### Steps:

1. **Navigate to the Frontend Folder:**
   ```bash
   cd <repository-folder>/frontend-react
   ```

2. **Install Dependencies:**
   ```bash
   npm install
   ```

3. **Start the Development Server:**
   ```bash
   npm start
   ```



---

### 3. Usage Instructions

#### Features:
- **View All Users:**
  - Navigate to the home page to view all users in a table format.
- **Add User:**
  - Click on the "Add User" button to open the form.
  - Fill in the user details and click "Submit" to add a user.
- **Edit User:**
  - Click on the "Edit" button next to a user to update their information.
  - Submit the form to save changes.
- **Delete User:**
  - Click on the "Delete" button to remove a user from the database.

---

### Troubleshooting

1. **CORS Issues:**
   - Ensure your PHP backend has CORS headers enabled in the response. Add the following to the top of your PHP files:
     ```php
     header("Access-Control-Allow-Origin: *");
     header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
     header("Access-Control-Allow-Headers: Content-Type");
     ```

2. **Database Errors:**
   - Check your database connection settings in `db.php`.
   - Verify that the database and `users` table are correctly set up.

3. **React Errors:**
   - Ensure the `API_URL` in `Api.js` points to your PHP server's correct URL.
   - Run `npm install` again if dependencies are missing.

---

### Directory Structure

```
<repository-folder>/
  |- backend-php/
      |- db.php
      |- index.php
      |- user_controller.php
      |- users.sql
  |- frontend-react/
      |- src/
          |- components/
              |- AddUser.js
              |- UpdateUser.js
              |- AllUsers.js
          |- Api.js
          |- app.js
```

---

### Future Enhancements
- Implement authentication for the API.
- Add pagination and search functionality to the frontend.
---

Feel free to reach out if you encounter any issues! Happy coding!
