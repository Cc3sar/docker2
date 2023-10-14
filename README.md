# Register Form

This project contains a simple HTML form that allows users to register their information and stores it in a MySQL database using PHP.

## Project Structure

The project has the following file structure:

```
register-form
├── css
│   └── style.css
├── js
│   └── script.js
├── index.php
├── register.php
├── dbconfig.php
└── README.md
```

- `css/style.css`: This file contains the CSS styles for the HTML form.
- `js/script.js`: This file contains the JavaScript code for the HTML form. It validates the form inputs before submitting the form to the server.
- `index.php`: This file contains the HTML code for the registration form. It includes the CSS and JavaScript files and sets up the form inputs and submit button.
- `register.php`: This file contains the PHP code for handling the form submission. It connects to the MySQL database using the `dbconfig.php` file, validates the form inputs, and inserts the data into the database.
- `dbconfig.php`: This file contains the PHP code for connecting to the MySQL database. It exports a `mysqli` object that can be used to execute SQL queries.
- `README.md`: This file contains the documentation for the project.

## Usage

To use this project, you need to have a web server with PHP and MySQL installed. You can then copy the project files to your web server and access the `index.php` file in your web browser.

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.

This file is intentionally left blank.