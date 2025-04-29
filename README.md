# Internet_Programming_Assignment_3
# Simple PHP User Authentication System (Without Database)

This is a basic **user login, registration, and password recovery system** built using **raw PHP and file handling**, without any database (like MySQL). It uses a simple text file (`users.txt`) to store user data.

---

## ✅ Features

- User Registration
- User Login
- Password Recovery
- Session-based Login State
- Uses `users.txt` for storage (no database)

---

## 📁 File Structure

```
/simple-auth/
├── users.txt              # Stores user data
├── register.php           # Registration form
├── login.php              # Login form
├── recover.php            # Password recovery
├── dashboard.php          # Protected user dashboard
├── logout.php             # Logout and destroy session
```

---

## 🧑‍💻 Example User Data (`users.txt`)

```
john|john@example.com|12345
alice|alice@example.com|alicepass
bob|bob@example.com|bob123
eva|eva@example.com|evapass
mike|mike@example.com|mike2025
```

Format:
```
username|email|password
```

> ⚠️ Passwords are stored as **plain text** for simplicity (not secure for production use).

---

## 🚀 How to Run Locally

1. Install **XAMPP**, **WAMP**, or any PHP server.
2. Place the project folder inside the `htdocs` directory (for XAMPP).
3. Start Apache server.
4. Visit: [http://localhost/simple-auth/login.php](http://localhost/simple-auth/login.php)

---

## 🌍 How to Deploy Live

1. Use a hosting service (e.g., InfinityFree, Hostinger).
2. Upload all files via **File Manager** or **FTP**.
3. Make sure `users.txt` is writable.
4. Access your domain: `https://yourdomain.com/login.php`

---

## 📦 Git Commands to Push to GitHub

```bash
git init
git add .
git commit -m "Initial commit - PHP auth system"
git remote add origin https://github.com/yourusername/php-auth.git
git push -u origin master
```

---

## ❗ Security Notes

- This project is for learning/demo only.
- Do not use it in production.
- No password hashing
- No CSRF protection
- No email verification

---

## 📚 License

This project is open-source and free to use under the [MIT License](LICENSE).
