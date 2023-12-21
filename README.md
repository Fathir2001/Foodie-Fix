
# Foodie Fix Platform

Welcome to our Foodie Fix Platform project! This modern e-commerce platform allows users to browse and order a variety of trendy food items and drinks online.

## Overview

This project consists of both frontend and backend components developed using HTML, CSS, JavaScript, PHP, and MySQL. It provides a user-friendly interface for customers to view, select, and order items from our trendy restaurant.

## Prerequisites

- Download and install [WampServer](https://www.wampserver.com/en/) for Windows or [MAMP](https://www.mamp.info/en/downloads/) for macOS.
- Download and install [Visual Studio Code](https://code.visualstudio.com/download) or any other code editor of your choice.

## Installing
1. Clone the repository to your local machine using the following command:

```bash
git clone https://github.com/Fathir2001/Foodie-Fix.git
```
### Running the Application

- Open the application you installed wampserver and start the server.
- Go to your browser and type `localhost` in the address bar.
- Select phpMyAdmin and Create a new database named `foodiefix`.
- Create the table name users and add the following columns:
        - `full_name` VARCHAR(255) 
        - `phone_number` VARCHAR(15) 
        - `address` VARCHAR(255)
        - `email` VARCHAR(255) 
        - `password` VARCHAR(255)

- Create the table name booking and add the following columns:

        - `people` INT(6) 
        - `time` VARCHAR(50) 
        - `phone` VARCHAR(20) 
        - `date` DATE 
        - `name` VARCHAR(50)
        - `email` VARCHAR(100)

2. Open the application in your browser at `localhost/navbar/config.php` to connect the database.
3. After connecting the database, open the application in your browser at `localhost/navbar/index.html` to view the application.


## Features

- **Homepage**: Visually appealing showcase of featured items.
- **Product Catalog**: Detailed descriptions and visuals for each item.
- **Shopping Cart**: Sleek design for managing selected items, allowing users to adjust quantities and review selections before checkout.
- **Checkout Process**: Streamlined multi-step checkout for order placement.
- **User Authentication**: Secure login and registration system for users, ensuring authenticated access to shopping carts and order history.
- **Online Ordering and Delivery**: System for choosing delivery options and entering delivery details during checkout.
- **Security Measures**: Implementation of secure practices like password hashing for user authentication.

## Setup Instructions

1. **Clone the Repository**: Clone this repository to your local machine.
   ```
   git clone https://github.com/fathir2001/#.git
   ```

2. **Database Setup**: Set up the MySQL database using the provided SQL file.
   ```
   mysql -u username -p database_name < database.sql
   ```

3. **Run the Application**: Start the backend server and open the frontend on your browser.

4. **Configure Backend**: Update the database connection details in the PHP files for proper functionality.

5. **Usage**: Navigate through the website to explore the features and functionalities. You can register, browse items, add them to the cart, and proceed to checkout.

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL


## License

This project is licensed under the [MIT License](LICENSE).

Feel free to contribute, provide feedback, or report issues. We appreciate your interest in our Foodie Fix Platform!
