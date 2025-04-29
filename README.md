# PHP User Authentication System (Without Database)

This is a basic **User Login, Registration, and Password Recovery system** built using **raw PHP** without a database. It uses simple file handling to store user credentials in `users.txt`.

✅ This project was developed using **XAMPP** as the local server and successfully **deployed live on InfinityFree**.

---

## ✅ Features

- User Registration
- User Login
- Password Recovery
- Session-based login system
- File-based storage (`users.txt`) instead of database

---

## 🧱 Technologies Used

- PHP (Core scripting)
- HTML (Basic forms)
- File Handling for storing user data
- XAMPP (Local development environment)
- InfinityFree (Live deployment hosting)

---

## 📁 File Structure

```
/php-auth/
├── users.txt              # Stores user data (username|email|password)
├── register.php           # User registration form
├── login.php              # Login form
├── recover.php            # Password recovery page
├── dashboard.php          # Protected dashboard
├── logout.php             # Ends session
```

---

## 👤 Sample User Data (`users.txt`)

```
fuad|fuad@gmail.com|12345
razzak|razzak@gmail.com|bhondo
jahid|jahid@gmail.com|jahiddss
siyam|siyam@gmail.com|siyamsmall
monsur|monsur@gmail.com|monsur2025
```

---

## 🚀 How to Run Locally (Using XAMPP)

1. Install [XAMPP](https://www.apachefriends.org/)
2. Copy project folder into `htdocs/`
3. Start Apache server from XAMPP Control Panel
4. Visit in browser: [http://localhost/php-auth/login.php](http://localhost/php-auth/login.php)

---

## 🌐 Live Deployment (InfinityFree)

The project is deployed live at:

👉 **[https://your-subdomain.infinityfreeapp.com](https://your-subdomain.infinityfreeapp.com)**  
*(Replace with your actual subdomain)*

---

## 📦 Push to GitHub (Optional)

```bash
git init
git add .
git commit -m "Initial commit - PHP auth system"
git remote add origin https://github.com/yourusername/php-auth.git
git push -u origin master
```

---

## ❗ Security Notice

This project is intended for **learning/demo purposes** only.

- Passwords stored in plain text (⚠️ Insecure)
- No CSRF, email validation, or hashing
- Not production-ready

---

## 📚 License

Free to use under the [MIT License](LICENSE).
