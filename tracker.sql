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
    Name VARCHAR(50),
    Surname VARCHAR(50),
    Address VARCHAR(255),
    City VARCHAR(100),
    State VARCHAR(100),
    Country VARCHAR(100),
    PostalCode VARCHAR(20),
    PhoneNumber VARCHAR(20),
    DoB DATE,
    ProfilePictureURL VARCHAR(255)
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


INSERT INTO Users (Username, Email, Password, Name, Surname, Address, City, State, Country, PostalCode, PhoneNumber, DoB, ProfilePictureURL) VALUES
    ('user1', 'user1@gmail.com', 'password1', 'Johnny', 'Bravo', '123 Main St', 'San Francisco', 'California', 'US', '12345', '111-111-1111', '1990-01-01', 'https://example.com/profile1.jpg'),
    ('user2', 'user2@gmail.com', 'password2', 'Ben', 'Tennyson', '678 Oak St', 'San Francisco', 'California', 'US', '54321', '222-222-2222', '1985-05-15', 'https://example.com/profile2.jpg'),
    ('user3', 'user3@gmail.com', 'password3', 'Alice', 'Wonder', '678 Oak St', 'Barcelona', 'No State', 'Spain', '67890', '333-333-3333', '2001-07-20', 'https://example.com/profile3.jpg'),
    ('user4', 'user4@outlook.com', 'password4', 'Bob', 'Burger', '678 Oak St', 'Los Angeles', 'California', 'US', '45678', '444-444-4444', '2002-03-10', 'https://example.com/profile4.jpg'),
    ('user5', 'user5@yahoo.com', 'password5', 'Michael', 'Brown', '678 Cedar St', 'Sacramento', 'California', 'US', '98765', '555-555-5555', '2000-11-28', 'https://example.com/profile5.jpg'),
    ('user6', 'user6@outlook.com', 'password6', 'Michael', 'Lee', '321 Maple St', 'Kelowna', 'British Columbia', 'Canada', '56789', '666-666-6666', '2000-09-03', 'https://example.com/profile6.jpg'),
    ('user7', 'user7@outlook.com', 'password7', 'Emma', 'Taylor', '123 Birch St', 'Kelowna', 'British Columbia', 'Canada', '34567', '777-777-7777', '1976-12-15', 'https://example.com/profile7.jpg'),
    ('user8', 'user8@gmail.com', 'password8', 'Jodie', 'Comer', '444 Spruce St', 'Vancouver', 'british Columbia', 'Canada', '23456', '888-888-8888', '2003-08-20', 'https://example.com/profile8.jpg'),
    ('user9', 'user9@gmail.com', 'password9', 'Zendaya', 'Garcia', '555 Walnut St', 'Vernon', 'British Columbia', 'Canada', '78901', '999-999-9999', '1980-04-02', 'https://example.com/profile9.jpg'),
    ('user10', 'user10@outlook.com', 'password10', 'Tom', 'Holland', '888 Cherry St', 'Milan', 'No State', 'Italy', '89012', '121-121-1122', '2002-06-18', 'https://example.com/profile10.jpg');
    
INSERT INTO Comments (UserID, ProductID, Comment) VALUES 
    (1, 5, 'This is a great product.'),
    (2, 7, 'What\s the max capacity?'),
    (3, 4, 'I\'m really impressed with this item.. gotta buy it.'),
    (1, 10, 'Not bad looking. Any chargers with it?'),
    (5, 8, 'Decent packaging.');


INSERT INTO Reviews (UserID, ProductID, Rating, Review) VALUES
    (1, 5, 8, 'This product exceeded my expectations.'),
    (4, 6, 10, 'Excellent quality.. My husband loves it! Highly recommend to everyone.'),
    (2, 6, 3, 'This was horrible and the product came late.'),
    (1, 8, 7, 'Given the price, it was alright.'),
    (6, 9, 9, 'Worth every penny!!!');

INSERT INTO Products (ProductName, ASIN, Brand, Category, Description, ImageURL) VALUES 
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


INSERT INTO PriceHistory (ProductID, Price, Currency) VALUES 
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


INSERT INTO SavedProducts (UserID, ProductID) VALUES 
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
