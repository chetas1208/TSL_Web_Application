
# TSL: Web Application

## Description

TSL is a web application designed for planning and booking travel packages. It allows users to register, log in, select recommended packages, customize their own trips, and process payments for various destinations.

## Features

- **User Registration and Login:** Secure user authentication system.
- **Package Selection:** Choose from recommended travel packages or customize your own.
- **Payment Processing:** Handle payments for multiple destinations including Delhi, Mumbai, Kolkata, Chennai, Bhavnagar, and Kutch.
- **Password Reset:** Easily reset forgotten passwords.
- **Project Information:** Detailed information about the project and its objectives.

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/yourusername/de-project.git
   ```

2. **Set Up the Database:**
   - Install XAMPP or any PHP server with MySQL.
   - Create a database named `de_project`.
   - Import the necessary tables by uncommenting the CREATE TABLE queries in the PHP files or manually executing them.

3. **Configure Database Connection:**
   - Ensure the database connection parameters in the PHP files (`successful.php`, `Register.php`, `Login.php`, etc.) match your local setup.

4. **Run the Application:**
   - Place the project in the `htdocs` folder if using XAMPP.
   - Start Apache and MySQL services.
   - Access the application via `http://localhost/de-project/homePage.html`.

## Usage

1. **Register:**
   - Navigate to the home page.
   - Click on the "Register" button and fill in your email and password.

2. **Login:**
   - Click on the "Log In" button.
   - Enter your registered email and password to access your account.

3. **Select Package:**
   - After logging in, go to the "Select Package" page.
   - Choose between customizing your own package or selecting from recommended packages.

4. **Payment:**
   - Proceed to payment for your selected destination.
   - Complete the payment process to finalize your booking.

## Project Structure

- `homePage.html` - Landing page with options to register or log in.
- `Register.php` - Handles user registration.
- `Login.php` - Handles user login.
- `Packages.php` - Allows users to select or customize travel packages.
- `recommend_pack.html` - Page to select recommended packages.
- `custom_pack.html` - Page to customize travel packages.
- `Payment.php` - Redirects to specific payment pages based on destination.
- `successful.php` - Processes successful payments.
- **Payment Pages:**
  - `delhiPay.php`
  - `mumbaiPay.php`
  - `kolkataPay.php`
  - `chennaiPay.php`
  - `bhavnagarPay.php`
  - `kutchPay.php`
- `Project Info.html` - Provides information about the project.
- `demo.html` - Placeholder for future features or demonstrations.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.

## License

This project is licensed under the MIT License.
