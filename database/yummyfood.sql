-- create database yummyfood;
-- go
use yummyfood;
-- go

-- Create the User table
CREATE TABLE IF NOT EXISTS Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    Name VARCHAR(255) NOT NULL,
    Phone VARCHAR(15),
    Email VARCHAR(255),
    role VARCHAR(50)
);

-- Create the Table table
CREATE TABLE IF NOT EXISTS `Table` (
    table_id INT AUTO_INCREMENT PRIMARY KEY,
    Tablename VARCHAR(255) NOT NULL,
    numberchair INT,
    status VARCHAR(50)
);

-- Create the Dish table
CREATE TABLE IF NOT EXISTS Dish (
    dish_id INT AUTO_INCREMENT PRIMARY KEY,
    Dish_name VARCHAR(255) NOT NULL,
    Image_dish VARCHAR(50) NOT NULL,
    Detail TEXT,
    Price DECIMAL(10, 2) NOT NULL default 0,
);
-- Create the Booktable table
CREATE TABLE IF NOT EXISTS Booktable (
    Book_id INT AUTO_INCREMENT PRIMARY KEY,
    User_id INT,
    Table_id INT,
    time DATETIME,
    FOREIGN KEY (User_id) REFERENCES Users(user_id),
    FOREIGN KEY (Table_id) REFERENCES `Table`(table_id)
);
-- Create the Orders table
-- Create the updated Orders table
CREATE TABLE IF NOT EXISTS Orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    order_date DATETIME,
    status VARCHAR(50),
    delivery_date DATETIME,
    user_id INT,
    discount DECIMAL(5, 2),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Create the Order_detail table
CREATE TABLE IF NOT EXISTS Order_detail (
    order_id INT,
    dish_id INT,
    dish_name VARCHAR(255),
    price DECIMAL(10, 2),
    quantity INT,
    total_price DECIMAL(10, 2),
    PRIMARY KEY (order_id, dish_id),
    FOREIGN KEY (order_id) REFERENCES Orders(order_id),
    FOREIGN KEY (dish_id) REFERENCES Dish(Dish_id)
);

CREATE TABLE IF NOT EXISTS contacts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    subject VARCHAR(255),
    message TEXT
);

CREATE TABLE if not EXISTS `cart` (
  cart_id INT AUTO_INCREMENT PRIMARY KEY NOT Null,
  dish_id INT NOT null ,
  user_id INT not null,
  dish_name VARCHAR(255) not null ,
  image VARCHAR(255) not null,
  quantity INT not null DEFAULT 1,
  price DECIMAL(10, 2) not null
);

-- Thêm dữ liệu mẫu vào bảng contacts
INSERT INTO contacts (name, email, subject, message) VALUES
('Nguyen Van A', 'nguyenvana@example.com', 'Question 1', 'This is the first message.'),
('Tran Thi B', 'tranthib@example.com', 'Feedback', 'Thank you for your service.'),
('Le Van C', 'levanc@example.com', 'Inquiry', 'I would like to inquire about your products.');

-- Bạn có thể thêm nhiều bản ghi khác nếu cần thiết.



ALTER TABLE `order_detail` ADD `address` VARCHAR(250) NOT NULL AFTER `total_price`, ADD `phone` VARCHAR(50) NOT NULL AFTER `address`, ADD `payment` VARCHAR(250) NOT NULL AFTER `phone`;