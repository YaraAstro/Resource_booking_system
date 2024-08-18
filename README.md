# Resource Booking System

<div align="center">
    <a href="https://developer.mozilla.org/en-US/docs/Web/HTML">
        <img src="https://img.shields.io/badge/-HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML">
    </a>
    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS">
        <img src="https://img.shields.io/badge/-CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS">
    </a>
    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript">
        <img src="https://img.shields.io/badge/-JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
    </a>
    <a href="https://www.php.net/">
        <img src="https://img.shields.io/badge/-PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
    </a>
    <a href="https://www.apachefriends.org/index.html">
        <img src="https://img.shields.io/badge/-XAMPP-FE7A16?style=for-the-badge&logo=xampp&logoColor=white" alt="XAMPP">
    </a>
</div>

### [Visit Ascepius Healthcare Resource Booking System](http://ascepiushealthcare.infinityfreeapp.com/)
> **Note:** You may encounter security warnings due to the free hosting platform, but rest assured, it is safe to proceed.

---

## Installation Guide

### Hosting the Project Locally with XAMPP

#### 1. **Prerequisites**

- **Download & Install XAMPP:**
   - Visit the [XAMPP website](https://www.apachefriends.org/index.html) and download the installer for your OS.
   - Complete the installation following the on-screen instructions.

- **Start XAMPP:**
   - Launch the XAMPP Control Panel and start the **Apache** and **MySQL** services.

#### 2. **Setting Up Your Project**

- **Copy Project Files to `htdocs`:**
   - Navigate to the XAMPP directory (e.g., `C:\xampp` on Windows or `/Applications/XAMPP` on macOS).
   - Place your project folder in the `htdocs` directory.

- **Access Your Project:**
   - Open your browser and visit `http://localhost/your-project-folder`.

#### Troubleshooting

- **Port Conflicts:** Check if other applications are using the same ports as XAMPP. Adjust the ports if needed.
- **File Not Found:** Ensure the project is in the correct directory (`htdocs`).

For more details, refer to the [XAMPP documentation](https://www.apachefriends.org/faq_en.html).

---

## Setting Up the `ascepiushealthcare` Database

### Prerequisites

- Ensure XAMPP is running with Apache and MySQL services active.

### Steps

#### 1. **Open phpMyAdmin:**

- Visit `http://localhost/phpmyadmin`.

#### 2. **Create the Database:**

- **Navigate to the “Databases” Tab.**
- **Enter Database Name:** `ascepiushealthcare`.
- **Click “Create.”**

#### 3. **Import SQL Code:**

- **Select the `ascepiushealthcare` Database.**
- **Go to the “SQL” Tab.**
- **Open the SQL File:** [Click here to open `create_tables.sql` in a new tab](./database/final%20creation/create_tables.sql).
- **Paste & Execute SQL Code:** Copy the code from the SQL file and paste it into the query area in phpMyAdmin, then click "Go."

#### 4. **Verify Setup:**

- **Check Tables:** Ensure the correct tables have been created.
- **Review Data:** Inspect each table to confirm proper setup.

#### Troubleshooting

- **File Size Issues:** Adjust `upload_max_filesize` and `post_max_size` in `php.ini` if needed.
- **Error Handling:** Check error messages for details on any issues.

---

## Screenshots

### Home
![Home Page](screenshots/WhatsApp%20Image%202024-08-18%20at%2017.00.41_73ad94b1.jpg)

### Laboratories
![Laboratories Page](screenshots/WhatsApp%20Image%202024-08-18%20at%2017.00.48_be2a1665.jpg)

### About
![About Page](screenshots/WhatsApp%20Image%202024-08-18%20at%2017.01.45_26b53ac3.jpg)

### Contact Us
![Contact Us Page](screenshots/WhatsApp%20Image%202024-08-18%20at%2017.02.24_5326d862.jpg)

### Sign In
![Sign In Page](screenshots/WhatsApp%20Image%202024-08-18%20at%2017.03.55_f7a2a495.jpg)

### Sign Up
![Sign Up Page](screenshots/WhatsApp%20Image%202024-08-18%20at%2017.03.57_7ff6eae0.jpg)

#### Sign Up as Patient
![Sign Up as Patient](screenshots/WhatsApp%20Image%202024-08-18%20at%2017.03.59_8d0e9a37.jpg)

#### Sign Up as Staff
![Sign Up as Staff](screenshots/WhatsApp%20Image%202024-08-18%20at%2017.04.00_8aed065d.jpg)

#### Sign Up as Third Party
![Sign Up as Third Party](screenshots/WhatsApp%20Image%202024-08-18%20at%2017.04.02_b80ff8dc.jpg)
