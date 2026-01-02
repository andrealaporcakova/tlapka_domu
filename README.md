# 🐾 Tlapka domů (Paws Home)

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Alpine.js](https://img.shields.io/badge/Alpine.js-8BC0D0?style=for-the-badge&logo=alpine.js&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

**A comprehensive web application connecting lost pets with their owners.**

> This project was developed as a final capstone project for an IT retraining course. It demonstrates a full-stack development approach using the modern Laravel ecosystem.

---

## 📖 About the Project

**Tlapka domů** is a database for lost and found animals. The main goal of the application is to simplify the process of searching for missing pets by aggregating listings in one place with advanced filtering options.

### Key Features
* **🐶 Public & User Listings:** Both registered users and guests can view listings. Only registered users can post and manage their own ads.
* **🔍 Advanced Search:** Filter animals by type (dog, cat, etc.), location, or status (lost/found).
* **📱 Fully Responsive:** Mobile-first design using **Tailwind CSS**. Custom-built mobile navigation and search implementation.
* **🔐 Authentication & Authorization:** Secure login system (Laravel Breeze) with Role-Based Access Control (Admin/User).
* **🖼️ Image Management:** Users can upload photos of animals.
* **✉️ Contact Form:** Integrated contact form for user support.
* **🛠️ Admin Panel:** Special section for administrators to manage all listings and users.

---

## 📸 Screenshots

Here is a glimpse of the application's design and functionality.

<img width="1920" height="4090" alt="homepage" src="https://github.com/user-attachments/assets/0b267dd2-1887-45a0-a972-b594b6e77221" />
<img width="1920" height="4204" alt="animal_database" src="https://github.com/user-attachments/assets/bd27dea1-4822-45cd-ac9b-d95614b88267" />
<img width="1920" height="2499" alt="community" src="https://github.com/user-attachments/assets/8d6b4321-a0b5-401c-8326-d810d6ff2cbd" />
<img width="1920" height="2023" alt="admin_1" src="https://github.com/user-attachments/assets/7e6c2bfa-d3b7-4aab-8255-f80446d4e2a8" />
<img width="1362" height="811" alt="admin_2" src="https://github.com/user-attachments/assets/1bf2b093-162c-4202-bc1e-ca4649a68514" />
<img width="1920" height="911" alt="login" src="https://github.com/user-attachments/assets/cb1de569-ebaa-4546-adf4-d72856635c0e" />
<img width="1920" height="1119" alt="login_2" src="https://github.com/user-attachments/assets/bea2645e-7d75-426f-bb73-85d2270152a9" />

---

## 🛠️ Tech Stack

This project leverages modern web technologies to ensure performance, security, and scalability.

* **Backend:** PHP 8.2, **Laravel 11** framework.
* **Frontend:** Blade Templates, **Tailwind CSS**, **Alpine.js** (for interactivity like dropdowns, modals, and mobile menu).
* **Database:** MySQL (Relational database design with Foreign Keys and Indexes).
* **Tools:** Git & GitHub, Composer, NPM/Vite.

---

## 🚀 How to Run Locally

If you want to test this project on your local machine, follow these steps:

1.  **Clone the repository**
    ```bash
    git clone [https://github.com/YOUR_USERNAME/tlapka-domu.git](https://github.com/YOUR_USERNAME/tlapka-domu.git)
    cd tlapka-domu
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3.  **Environment Setup**
    Copy the example env file and configure your database credentials.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Database Migration & Seeding**
    Create the database tables and fill them with dummy data.
    ```bash
    php artisan migrate --seed
    ```

5.  **Run the Application**
    ```bash
    npm run dev
    php artisan serve
    ```
    Visit `http://localhost:8000` in your browser.


