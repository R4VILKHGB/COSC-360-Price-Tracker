SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE Users (
    `username` VARCHAR(50) NOT NULL,
    `Email` VARCHAR(100) NOT NULL UNIQUE,
    `password` VARCHAR(100) NOT NULL,
    `acctType` INT
);

-- Passwords are all password1, password2, password3, etc. They have been hashed for security.
INSERT INTO `Users` (`username`, `Email`, `password`) VALUES
    ('user1', 'user1@gmail.com', '7c6a180b36896a0a8c02787eeafb0e4c');
INSERT INTO `Users` (`username`, `Email`, `password`) VALUES
    ('user2', 'user2@gmail.com', '6cb75f652a9b52798eb6cf2201057c73');
INSERT INTO `Users` (`username`, `Email`, `password`) VALUES
    ('user3', 'user3@gmail.com', '819b0643d6b89dc9b579fdfc9094f28e');
INSERT INTO `Users` (`username`, `Email`, `password`) VALUES
    ('user4', 'user4@outlook.com', '34cc93ece0ba9e3f6f235d4af979b16c');
INSERT INTO `Users` (`username`, `Email`, `password`, `acctType`) VALUES
    ('user5', 'user5@yahoo.com', 'db0edd04aaac4506f7edab03ac855d56', 1);

