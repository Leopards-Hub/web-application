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


