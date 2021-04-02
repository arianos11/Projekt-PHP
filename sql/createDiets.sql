CREATE TABLE diets(
    diet_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    diet_name VARCHAR(255) NOT NULL,
    diet_price FLOAT NOT NULL,
    diet_photo VARCHAR(255),
    diet_description VARCHAR(4000),
    diet_create_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    diet_status BOOLEAN NOT NULL DEFAULT TRUE
);