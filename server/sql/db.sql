DROP DATABASE marketplace;

CREATE DATABASE marketplace CHARACTER SET utf8 COLLATE utf8_spanish_ci;

CREATE TABLE users(
    id_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    names VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(50),
    birthdate DATE,
    phone VARCHAR(11),
    street VARCHAR(40),
    external_number INT(5),
    address_1 VARCHAR(40),
    address_2 VARCHAR(40),
    zip_code VARCHAR(6),
    state VARCHAR(40),
    picture VARCHAR(250),
    password VARCHAR(16),
    UNIQUE KEY(email),
    INDEX (email)
)ENGINE=innoDB CHARACTER SET utf8 COLLATE utf8_spanish_ci;

CREATE TABLE products(
    id_product INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_user INT NOT NULL,
    name VARCHAR(50),
    description VARCHAR(250),
    price FLOAT(8,2),
    type VARCHAR(30),
    picture VARCHAR(250),
    available TINYINT,
    INDEX (id_user)
)ENGINE=innoDB CHARACTER SET utf8 COLLATE utf8_spanish_ci;

CREATE TABLE sales(
    id_user INT NOT NULL,
    id_product INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id_user),
    FOREIGN KEY (id_product) REFERENCES products(id_product)
);
