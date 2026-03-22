# 📩 WordPress Quote Request Plugin

A custom **WordPress Quote Request Plugin** that allows users to submit quote requests through a frontend form. The plugin securely processes user input and stores submissions using Custom Post Types.

---

# 🚀 Features

- Frontend quote request form using shortcode  
- Secure form handling with nonce verification  
- Input validation and sanitization  
- Custom Post Type (CPT) for storing quote requests  
- Email storage and structured data handling  
- Dynamic display of submitted quotes using WP_Query  

---

# 🛠 Technologies Used

### Backend
- PHP  
- WordPress Plugin API  
- Custom Post Types (CPT)  
- WP_Query  

### Frontend
- HTML  
- CSS (Bootstrap)  

---

# 📸 Screenshots

![Form](https://github.com/hamza-naeem-dev/WordPress-Quote-Request-Plugin/blob/main/assets/CQR%20Form.png)  
![Display](https://github.com/hamza-naeem-dev/WordPress-Quote-Request-Plugin/blob/main/assets/CQR%20List.png)

---

# 📦 Installation

1. Download or clone the repository:
   ```bash
   git clone https://github.com/hamza-naeem-dev/WordPress-Quote-Request-Plugin.git

Move the plugin folder to:

wp-content/plugins/
Activate the plugin from WordPress admin panel
🧩 Usage
Display Quote Request Form
[cqr_quote_form]
Display Submitted Requests
[cqr_display_quotes]
⚙️ How It Works
User submits the quote request form
Data is validated and sanitized
A new post is created using Custom Post Type
Data is stored securely in WordPress database
Submissions are displayed dynamically using WP_Query
🧠 Learning Highlights
Secure form handling using WordPress nonces
Working with Custom Post Types
Using WP_Query to fetch dynamic data
Structuring WordPress plugins using OOP
⚠️ Future Improvements
Add email notifications using wp_mail()
Add AJAX form submission
Improve UI design
Add admin dashboard filters
📌 Author

Hamza Naeem

📄 License

GPL2
