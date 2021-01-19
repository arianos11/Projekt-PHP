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