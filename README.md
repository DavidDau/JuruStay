## JuruStay - Explore & Share New Places  

JuruStay is a social media-style platform where users can **post places**, **leave reviews**, and **explore new locations**. The platform enables users to **upload images or videos**, provide a description, and link the location using **Google Maps**. Other users can **comment and rate** places using a star rating system.  

---

## Features  
✅ **User-Generated Posts** - Users can upload **images or videos** of places.  
✅ **Interactive Reviews** - Leave **comments** and **rate places** with ⭐⭐⭐⭐⭐ stars.  
✅ **Google Maps Integration** - Easily navigate posted locations.  
✅ **Responsive Design** - Fully optimized for **mobile** and **desktop**.  
✅ **Secure Login System** - Users must sign in before posting.  
✅ **Dynamic Content** - Posts and reviews are stored in a database and fetched dynamically.  

---

## Technologies Used  

### 🔹 **Frontend (Client Side)**
- **HTML** - Structure of the web pages  
- **CSS** - Styling and responsiveness  
- **JavaScript** - Form handling, filters, and UI interactions  

### 🔹 **Backend (Server Side)**
- **PHP** - Handles user authentication, form submissions, and database operations  
- **MySQL** - Stores user accounts, places, and reviews  

### 🔹 **Hosting & Deployment**
- **GitHub Pages** - Frontend is hosted on GitHub  
- **XAMPP (Localhost Testing)** - Backend and database run locally  

---

## Installation Guide  

### 1️**Clone the Repository**  
```sh
git clone https://github.com/DavidDau/JuruStay.git
cd JuruStay
```

### 2️⃣ **Set Up the Database**
1. Open **phpMyAdmin** (localhost/phpmyadmin).  
2. Create a database named **places_db**.  
3. Import the provided `places_db.sql` file.  

### 3️⃣ **Run the Backend (PHP & MySQL)**
1. Start **XAMPP** (Apache & MySQL).  
2. Move the project folder to `htdocs`.  
3. Open a browser and go to:  
   ```
   http://localhost/JuruStay/home.php
   ```

---

## Project Structure  
```
/JuruStay
│── assets/               # Images, videos, and icons  
│── css/                  # Stylesheets  
│── js/                   # JavaScript files  
│── includes/             # PHP functions and database connection  
│── home.php              # Homepage  
│── post.php              # Post a new place  
│── signup.php            # User registration  
│── login.php             # User login  
│── logout.php            # User logout  
│── submit_review.php     # Handles review submissions  
│── places_db.sql         # Database structure  
│── README.md             # Documentation  
```

---

## How It Works  

### ** Posting a Place**
1. User logs in (or is prompted to sign in).  
2. They fill in details (**name, image/video, location, description**).  
3. The post is saved in the database and appears on the homepage.  

### ** Reviewing a Place**
1. Other users can leave a comment & **rate the place** (1-5 stars).  
2. Reviews are stored in the `reviews` table and displayed below each post.  

###  User Authentication**
- **Session-based login/logout** ensures security.  
- Users must **sign in before posting** or reviewing.  

---

## Future Improvements  
✔️ User profile system  
✔️ Like & share functionality  
✔️ Advanced filtering & search  

---

## Contributing  
Contributions are welcome! Feel free to fork the repository and submit a **pull request**.  

---

## License  
This project is **open-source** under the MIT License.  

---

🔗 **Live Demo:** [GitHub Pages](https://github.com/DavidDau/JuruStay.git)  

**Contact:** d.cyubahiro1@alustudent.com
