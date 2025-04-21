# Online Citizen Service Portal

## Overview
A web platform for citizens to request and track government services such as ID applications, permits, and certificates. Includes user authentication, dashboards, admin panel, notifications, and feedback.

## Directory Structure
- `config/` – Database configuration
- `includes/` – Header/footer and reusable PHP includes
- `public/` – CSS, JS, images
- `templates/` – HTML templates for pages
- `admin/` – Admin panel scripts
- `user/` – User dashboard scripts

## Setup Instructions
1. Import the provided SQL schema into your MySQL database.
2. Update `config/db.php` with your database credentials if needed.
3. Place the project folder in your XAMPP `htdocs` directory.
4. Start Apache and MySQL from XAMPP control panel.
5. Visit `http://localhost/Online_Citizen_Service_Portal/` in your browser.

## Features
- User registration, login, password recovery
- Submit and track service requests (permits, certificates)
- Admin panel for managing applications
- Email/SMS notifications (placeholder)
- Feedback system

## To Do
- Implement backend PHP scripts for authentication and service requests
- Add notification and feedback functionality
- Polish UI and add validations

---

## Documentation
- User manual and technical report templates will be provided in `/docs` folder.
