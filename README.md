# 🚀 Laravel CRUD Application

## 📖 About

This project is a simple **CRUD (Create, Read, Update, Delete)** application built using the **Laravel framework**. It demonstrates basic database operations with a clean and structured MVC architecture.

This project is ideal for beginners who want to understand how Laravel handles data management and routing.

---

## ✨ Features

* ➕ Create new records
* 📄 Read / display records
* ✏️ Update existing data
* ❌ Delete records
* ✅ Form validation
* 🔁 RESTful routing
* 🧩 MVC architecture

---

## 🛠️ Tech Stack

* **Backend:** Laravel (PHP)
* **Frontend:** Blade, HTML, Bootstrap, JavaScript
* **Database:** MySQL

---

## 📂 Project Structure

```
app/                # Application logic (Models, Controllers)
routes/             # Web routes
resources/views/    # Blade templates (UI)
public/             # Public assets (CSS, JS, Images)
database/           # Migrations & seeders
```

---

## ⚙️ Installation & Setup

### 1. Clone the repository

```
git clone https://github.com/coolprasad15/laravel_crud.git
```

### 2. Navigate to project folder

```
cd laravel_crud
```

### 3. Install dependencies

```
composer install
```

### 4. Setup environment file

```
cp .env.example .env
php artisan key:generate
```

### 5. Configure database

Update `.env` file with your database credentials:

```
DB_DATABASE=laravel_crud
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Run migrations

```
php artisan migrate
```

### 7. Start development server

```
php artisan serve
```

---

## 📸 Screenshots

*Add screenshots of your project here*

---

## 🙌 Author

**Prasad Guhagarkar**

---

## 📄 License

This project is open-source.
