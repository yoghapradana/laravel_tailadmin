# 🚀 TailAdmin Laravel Port  
[![Laravel](https://img.shields.io/badge/Laravel-11.x-red.svg?logo=laravel)](https://laravel.com)  
[![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-38B2AC.svg?logo=tailwind-css)](https://tailwindcss.com)  
[![Webpack](https://img.shields.io/badge/Webpack-Laravel%20Mix-1C78C0.svg?logo=webpack)](https://laravel-mix.com)  
[![License](https://img.shields.io/badge/license-MIT-green.svg)](#-license)

> A Laravel port of the **TailAdmin HTML Template**, using the **same Tailwind CSS system**, rebuilt with **Blade templating** and **Laravel Mix (Webpack)** for modern, maintainable admin dashboards.

---

## 🧱 Overview

This project adapts the **TailAdmin HTML template** into a fully functional **Laravel** application structure.  
It reuses the TailAdmin design system and transforms static HTML into reusable Blade components and layouts — perfect for developers who want a ready-to-use Laravel admin base.

---

## 📂 Project Structure

```
project/
├── app/
│   └── ...
├── resources/
│   ├── views/
│   │   ├── layouts/          # Master layout (header, sidebar, footer)
│   │   ├── components/       # Reusable Blade components
│   │   ├── pages/            # Ported HTML pages
│   │   └── welcome.blade.php # Example entry page
│   ├── css/
│   └── js/
├── public/
│   └── assets/               # Compiled CSS & JS (Webpack output)
├── webpack.mix.js
└── package.json
```

---

## ⚙️ Installation

### 1. Clone Repository
```bash
git clone https://github.com/yoghapradana/laravel_tailadmin.git
cd laravel_tailadmin
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Build Frontend Assets
Development build:
```bash
npm run dev
```
Production build:
```bash
npm run build
```

### 5. Serve the Application
```bash
php artisan serve
```

Now visit [http://localhost:8000](http://localhost:8000) 🎉

---

## 🧩 Features

✅ **TailAdmin UI** integrated with Laravel  
✅ Clean **Blade layouts & components**  
✅ **Laravel Mix (Webpack)** asset bundling  
✅ Ready-to-use **dashboard structure**  
✅ Simple to **extend and customize**  

---

## 🛠️ Customization Guide

- **CSS / JS:** Edit files in `resources/css` and `resources/js`.  
- **Layouts:** Modify `resources/views/layouts/app.blade.php`.  
- **Components:** Add UI fragments under `resources/views/components/`.  
- **New Pages:**  

  ```blade
  @extends('layouts.app')

  @section('content')
      <h1 class="text-xl font-bold">My New Page</h1>
  @endsection
  ```

---

## 🧾 License

This project inherits the license terms of the original **TailAdmin HTML Template**.  
Please refer to [TailAdmin License](https://tailadmin.com/license) for details.

---

## 👨‍💻 Author

**Your Name**  
Laravel + Tailwind Developer  
📧 [youremail@example.com]  
🌐 [yourwebsite.com]  

---

## ⭐ Contributing

Contributions, bug reports, and feature suggestions are welcome!  
Feel free to open an issue or submit a pull request.
