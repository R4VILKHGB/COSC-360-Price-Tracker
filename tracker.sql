CREATE DATABASE IF NOT EXISTS tracker;

USE tracker;

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS Users;
DROP TABLE IF EXISTS Comments;
DROP TABLE IF EXISTS Reviews;
DROP TABLE IF EXISTS Products;
DROP TABLE IF EXISTS PriceHistory;
DROP TABLE IF EXISTS TopPriceDrops;
DROP TABLE IF EXISTS SavedProducts;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE Users (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    Username VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Password VARCHAR(100) NOT NULL,
    RegistrationDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Comments (
    CommentID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    ProductID INT,
    Comment TEXT NOT NULL,
    CommentDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

CREATE TABLE Reviews (
    ReviewID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    ProductID INT,
    Rating INT NOT NULL,
    Review TEXT,
    ReviewDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

CREATE TABLE Products (
    ProductID INT PRIMARY KEY AUTO_INCREMENT,
    ProductName VARCHAR(255) NOT NULL,
    ASIN VARCHAR(20) NOT NULL UNIQUE,
    Brand VARCHAR(100),
    Category VARCHAR(100),
    Description TEXT,
    ImageURL VARCHAR(255),
    LastUpdated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE PriceHistory (
    PriceID INT PRIMARY KEY AUTO_INCREMENT,
    ProductID INT,
    Price DECIMAL(10, 2) NOT NULL,
    Currency VARCHAR(3) NOT NULL,
    Timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

CREATE TABLE TopPriceDrops(
    ProductID INT PRIMARY KEY,
    PriceDrop DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
)

CREATE TABLE SavedProducts (
    SavedProductID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    ProductID INT,
    FOREIGN KEY (UserID) REFERENCES Users(UserID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);


INSERT INTO Users VALUES 
    (1, 'user1', 'user1@gmail.com', 'password1', '2024-01-11 09:00:00'), 
    (2, 'user2', 'user2@gmail.com', 'password2', '2024-01-12 10:00:00'),
    (3, 'user3', 'user3@gmail.com', 'password3', '2024-01-30 11:00:00'),
    (4, 'user4', 'user4@outlook.com', 'password4', '2024-02-14 12:00:00'),
    (5, 'user5', 'user5@yahoo.com', 'password5', '2024-02-17 13:00:00'),
    (6, 'user6', 'user6@outlook.com', 'password6', '2024-02-18 14:00:00'),
    (7, 'user7', 'user7@outlook.com', 'password7', '2024-02-22 15:00:00'),
    (8, 'user8', 'user8@gmail.com', 'password8', '2024-03-01 16:00:00'),
    (9, 'user9', 'user9@gmail.com', 'password9', '2024-03-05 17:00:00'),
    (10, 'user10', 'user10@outlook.com', 'password10', '2024-03-15 18:00:00');
    
INSERT INTO Comments (UserID, ProductID, Comment) VALUES (
    (1, 5, 'This is a great product.'),
    (2, 7, 'What\s the max capacity?'),
    (3, 4, 'I\'m really impressed with this item.. gotta buy it.'),
    (1, 10, 'Not bad looking. Any chargers with it?'),
    (5, 8, 'Decent packaging.');
)

INSERT INTO Reviews (UserID, ProductID, Rating, Review) VALUES ()
    VALUES (1, 5, 8, 'This product exceeded my expectations.'),
    VALUES (4, 6, 10, 'Excellent quality.. My husband loves it! Highly recommend to everyone.'),
    VALUES (2, 6, 3, 'This was horrible and the product came late.'),
    VALUES (1, 8, 7, 'Given the price, it was alright.'),
    VALUES (6, 9, 9, 'Worth every penny!!!');

INSERT INTO Products (ProductName, ASIN, Brand, Category, Description, ImageURL) VALUES (
    ('Computer', 'VZ7Y23CRZY', 'ASUS', 'Electronics', 'Best gaming PC', 'https://example.com/image1.jpg'),
    ('Smartphone', '385HR7YO8Q', 'Samsung', 'Electronics', 'Latest smartphone with new features', 'https://example.com/image2.jpg'),
    ('Smartphone', 'S7AZV123T6', 'Samsung', 'Electronics', 'The best smartphone for digital artists', 'https://example.com/image3.jpg'),
    ('Smartphone', 'B07XABCRZY', 'Apple', 'Electronics', 'Latest smartphone with new features', 'https://example.com/image4.jpg'),
    ('Laptop', 'Q08P631234', 'HP', 'Electronics', 'Powerful laptop for work and gaming', 'https://example.com/image5.jpg'),
    ('Shirt', 'B08B234ZB3', 'Zara', 'Clothing', 'High-quality trimmer for close shave', 'https://example.com/image6.jpg'),
    ('Shirt', 'A2RB134ZB3', 'Zara', 'Clothing', 'High-quality fabric', 'https://example.com/image7.jpg'),
    ('Shoes', 'C48B23FFB3', 'Mavi', 'Clothing', 'High-quality fabric', 'https://example.com/image8.jpg'),
    ('Pants', 'Y08B671ZB3', 'Mavi', 'Clothing', 'High-quality fabric', 'https://example.com/image9.jpg'),
    ('Protein Powder', 'B08B234ZB3', 'BioSteel', 'Fitness', 'High-quality ingredients', 'https://example.com/image10.jpg');
)

INSERT INTO PriceHistory (ProductID, Price, Currency) VALUES (
    (1, 799.99, 'CAD'),
    (2, 1299.99, 'USD'),
    (3, 249.99, 'CAD'),
    (4, 59.99, 'USD'),
    (5, 19.99, 'USD'),
    (6, 48.95, 'CAD'),
    (7, 49.50, 'EUR'),
    (8, 29.99, 'USD'),
    (9, 13.25, 'EUR'),
    (10, 13.25, 'CAD');
)

INSERT INTO SavedProducts (UserID, ProductID) VALUES (
    (1, 1),
    (2, 2),
    (3, 2),
    (4, 3),
    (5, 6),
    (6, 2),
    (7, 8),
    (8, 4),
    (9, 1),
    (10, 2);
)