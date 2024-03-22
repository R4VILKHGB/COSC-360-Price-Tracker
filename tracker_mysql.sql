SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE Users (
    `username` VARCHAR(50) NOT NULL,
    `Email` VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(100) NOT NULL,
    `ProfilePictureURL` VARCHAR(255)
);

-- Passwords are all password1, password2, password3, etc. They have been hashed for security.
INSERT INTO `Users` (`username`, `Email`, `password`, `firstName`, `lastName`, `Address`, `City`, `State`, `Country`, `PostalCode`, `PhoneNumber`, `DoB`, `ProfilePictureURL`) VALUES
    ('user1', 'user1@gmail.com', '7c6a180b36896a0a8c02787eeafb0e4c', 'Johnny', 'Bravo', '123 Main St', 'San Francisco', 'California', 'US', '12345', '111-111-1111', '1990-01-01', 'https://example.com/profile1.jpg');
INSERT INTO `Users` (`username`, `Email`, `password`, `firstName`, `lastName`, `Address`, `City`, `State`, `Country`, `PostalCode`, `PhoneNumber`, `DoB`, `ProfilePictureURL`) VALUES
    ('user2', 'user2@gmail.com', '6cb75f652a9b52798eb6cf2201057c73', 'Ben', 'Tennyson', '678 Oak St', 'San Francisco', 'California', 'US', '54321', '222-222-2222', '1985-05-15', 'https://example.com/profile2.jpg');
INSERT INTO `Users` (`username`, `Email`, `password`, `firstName`, `lastName`, `Address`, `City`, `State`, `Country`, `PostalCode`, `PhoneNumber`, `DoB`, `ProfilePictureURL`) VALUES
    ('user3', 'user3@gmail.com', '819b0643d6b89dc9b579fdfc9094f28e', 'Alice', 'Wonder', '678 Oak St', 'Barcelona', 'No State', 'Spain', '67890', '333-333-3333', '2001-07-20', 'https://example.com/profile3.jpg');
INSERT INTO `Users` (`username`, `Email`, `password`, `firstName`, `lastName`, `Address`, `City`, `State`, `Country`, `PostalCode`, `PhoneNumber`, `DoB`, `ProfilePictureURL`) VALUES
    ('user4', 'user4@outlook.com', '34cc93ece0ba9e3f6f235d4af979b16c', 'Bob', 'Burger', '678 Oak St', 'Los Angeles', 'California', 'US', '45678', '444-444-4444', '2002-03-10', 'https://example.com/profile4.jpg');
INSERT INTO `Users` (`username`, `Email`, `password`, `firstName`, `lastName`, `Address`, `City`, `State`, `Country`, `PostalCode`, `PhoneNumber`, `DoB`, `ProfilePictureURL`) VALUES
    ('user5', 'user5@yahoo.com', 'db0edd04aaac4506f7edab03ac855d56', 'Michael', 'Brown', '678 Cedar St', 'Sacramento', 'California', 'US', '98765', '555-555-5555', '2000-11-28', 'https://example.com/profile5.jpg');

