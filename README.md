# Web Programming Assignments 6

Welcome to my web programming assignments 6 repository!

![Banner](https://c.tenor.com/bCfpwMjfAi0AAAAC/tenor.gif)

## Personal Information
- **Name**: Wilson Angelie Tan
- **NPM**: 140810230024
- **Class**: B
- **University**: Universitas Padjadjaran
- **Department**: Informatics Engineering

---

## Project Description

This project demonstrates a login system utilizing **cookies** and **sessions** in **PHP**. The application allows users to authenticate themselves and access protected resources.

### Authentication Mechanism

To manage user authentication, the project employs both **cookies** and **sessions**:

- **Cookies**: 
  - Upon successful login, a cookie is created to store the username and a flag indicating the user's logged-in status. This cookie lasts for 30 minutes and helps in verifying if the user is authorized to access the application.

- **Sessions**: 
  - Sessions are used to maintain the user's login state throughout their interaction with the application. When a user logs in, a session variable is established to store the username and their login status, ensuring they remain authenticated as they navigate the application.

### How It Works

1. **Login Process**:
   - Users enter their credentials (username and password) on the login page.
   - Upon successful authentication, a cookie is set or a session variable is created to store the user's information.

2. **Session or Cookie Management**:
   - Each page that requires authentication checks the session variable to confirm the user is logged in.
   - If the session variable or cookie variable is not set or indicates the user is not logged in, they are redirected to the login page.

3. **Logout Process**:
   - Users can log out, which clears the session or deletes the authentication cookie, ensuring secure access to the application.

