# Forex Website with Laravel & Livewire

A full-featured Forex website built with **Laravel** and **Livewire**, offering both public pages and a secure user panel. This project is designed to provide real-time data, account management, and interactive UI for a better trading experience.

## 🧹 Features

- 🔓 **Authentication** (Register/Login with email & mobile verification)
- 🧑‍💼 **User Dashboard** (Account summary, profile, transactions)
- 🌐 **Public Pages** (Landing page, about us, contact, services)
- 📊 **Real-time Forex Data Integration** *(optional external API)*
- 📩 **Contact Form** with email notifications
- 📟 **KYC/Document Upload** functionality *(optional)*
- 🌙 Light/Dark mode toggle *(if applicable)*
- 📱 Fully responsive (TailwindCSS)
- 🔐 Role-based authorization (admin / user)
- 📌 Admin panel (Manage users, KYC, site content)

## 🚀 Technologies

- Laravel 10+
- Livewire 3+
- TailwindCSS
- Alpine.js
- MySQL / PostgreSQL
- Redis (optional)
- Laravel Sanctum (for secure API/auth)

## 🛠️ Installation

```bash
git clone https://github.com/yourusername/forex-site.git
cd forex-site
composer install
cp .env.example .env
php artisan key:generate
```

### 📦 Setup Environment

Edit `.env` and set the following:

```env
APP_NAME="Forex Site"
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_user
DB_PASSWORD=your_password

MAIL_MAILER=smtp
MAIL_HOST=mailtrap.io (or your SMTP provider)
...
```

### 🧬 Run Migrations & Seeders

```bash
php artisan migrate --seed
```

### 🌐 Run the Application

```bash
php artisan serve
```

If you're using Vite for frontend assets:

```bash
npm install && npm run dev
```

## 🔐 Admin Panel Access

After running seeders, you can login with:

```
Email: admin@example.com
Password: password
```

Change credentials after first login!

## ✅ TODOs

- [ ] Integrate real-time Forex API
- [ ] Add notification system (e.g., for KYC status)
- [ ] Complete user activity logs
- [ ] Add unit & feature tests
- [ ] Add localization (multi-language support)

## 🧪 Tests

```bash
php artisan test
```

## 📂 Folder Structure Highlights

- `app/Http/Livewire` – Livewire components (frontend/backend)
- `resources/views` – Blade views (user, admin, public)
- `routes/web.php` – Main routes
- `routes/admin.php` – Admin-specific routes (optional)

## 🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you’d like to change.

## 📜 License

[MIT](LICENSE)

---

Built with ❤️ using Laravel & Livewire
