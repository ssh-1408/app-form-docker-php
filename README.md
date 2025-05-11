# 🐳 User Info App – PHP + MySQL + phpMyAdmin (Dockerized)

A simple web application to collect user information (name, email, hobby) using a Bootstrap form, with PHP backend and MySQL database — all fully containerized using Docker.

## 🚀 Features

- Responsive form built with Bootstrap 5
- PHP backend to store user data
- MySQL 8.0 database with init script
- phpMyAdmin interface for database management
- Dockerized with `docker-compose` for easy setup

---

## 📂 Project Structure

├── php/ # PHP backend (index.php, db.php)

├── html/ # HTML form (Bootstrap-styled)

├── mysql/init.sql # DB schema for users table

├── Dockerfile # Builds the PHP image

├── docker-compose.yml # Orchestrates services


---

## 📦 Prerequisites

- [Docker](https://www.docker.com/products/docker-desktop/)
- [Git](https://git-scm.com/)

---

## 🛠️ Getting Started

### 1. Clone the repository

git clone https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
cd YOUR_REPO_NAME

### 2. Run the App

docker compose up --build

### 3. Access the app

📝 Form: http://localhost:8080/html

🛠️ phpMyAdmin: http://localhost:8081

Login for phpMyAdmin:

Server: db

Username: user

Password: userpass



