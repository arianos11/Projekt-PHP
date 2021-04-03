CREATE TABLE admins(
    admin_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    admin_first_name VARCHAR(255) NOT NULL,
    admin_last_name VARCHAR(255) NOT NULL,
    admin_email VARCHAR(255) NOT NULL UNIQUE,
    admin_password VARCHAR(255) NOT NULL,
    admin_create_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    admin_update_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE diets(
    diet_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    diet_name VARCHAR(255) NOT NULL,
    diet_price FLOAT NOT NULL,
    diet_photo VARCHAR(255),
    diet_description VARCHAR(4000),
    diet_create_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    diet_status BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE orders(
    order_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    diet_ID INT NOT NULL
);

CREATE TABLE users (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_first_name VARCHAR(255) NOT NULL,
    user_last_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL UNIQUE,
    user_password VARCHAR(255) NOT NULL,
    user_create_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_update_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_city varchar(50),
    user_postal_code varchar(10),
    user_adress varchar(255),
    user_image varchar(255)
);
