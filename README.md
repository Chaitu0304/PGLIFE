# 🏠 PG Life — Student Housing Web Application

PG Life is a full-stack web application built as a hands-on project to demonstrate practical skills in web development using HTML, CSS, JavaScript, PHP, and MySQL. It provides a user-friendly platform for students to explore and express interest in PG accommodations based on location and preferences.

## 🚀 Features

- ✅ Student Login & Signup
- 🏢 List of PG Properties by City
- 📄 Detailed View for Each Property
- 💖 "Interested" Toggle Feature
- 🧑‍💻 Admin Dashboard for Property Management (WIP)
- 🎨 Fully Responsive UI using Bootstrap
- 🔐 Secure Login using Hashed Passwords

## 🛠️ Tech Stack

**Frontend**
- HTML5, CSS3
- Bootstrap
- JavaScript

**Backend**
- PHP
- MySQL

**Database**
- MySQL (with sample data)

## 📂 Project Structure
PGLife/<br>
├── api/ # Backend APIs (Login, Signup, Toggle Interested)<br>
├── css/ # Stylesheets (Bootstrap, Custom Styles)<br>
├── js/ # JavaScript files<br>
├── img/ # Static Images<br>
├── includes/ # Common codes to include in files (Headerlinks,modals) <br>
├── dashboard.php # Admin/User Dashboard<br>
├── home.php # Main Landing Page<br>
├── logout.php # To logout<br>
├── property_list.php # List PGs based on location<br>
├── property_detail.php # Detailed PG View<br>
└── ...

## Screenshots
<img src="https://github.com/user-attachments/assets/30b4d7f9-4544-4433-bb1b-d75e55b6267d" title="HomePage" width="300" />
<img src="https://github.com/user-attachments/assets/246f818c-c386-47a7-8c72-65f362df764f" title="Login" width="300" />
<img src="https://github.com/user-attachments/assets/72d259ef-bf66-498f-a55c-d9c6b9de8ab1" title="SignUp" width="300" />
<img src="https://github.com/user-attachments/assets/09b4fdd3-f019-4499-8c98-d8a81fce0a0b" title="PropertyList" width="300" />
<img src="https://github.com/user-attachments/assets/9d81789b-6f44-4573-a492-bf107ba083ae" title="PropertyDetail" width="300" />


## 📦 How to Run Locally

1. **Clone the repository**

   ```bash
   git clone https://github.com/yourusername/PGLife.git
   cd PGLife
   ```

2. **Setup Local Server**
   - Use XAMPP or WAMP to run Apache & MySQL.
   - Place the project inside the `htdocs/` folder (for XAMPP).

3. **Import the Database**
   - Create a database `pglife` in phpMyAdmin.
   - Import the provided SQL file `pglife.sql`.

4. **Start Server**
   - Navigate to `http://localhost/PGLife/home.php`


## 📃 License

This project is for educational purposes only.

