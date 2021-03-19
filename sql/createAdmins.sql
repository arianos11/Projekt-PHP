CREATE TABLE admins(
    admin_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    admin_first_name VARCHAR(255) NOT NULL,
    admin_last_name VARCHAR(255) NOT NULL,
    admin_email VARCHAR(255) NOT NULL UNIQUE,
    admin_password VARCHAR(255) NOT NULL,
    admin_create_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    admin_update_date DATETIME DEFAULT CURRENT_TIMESTAMP
);