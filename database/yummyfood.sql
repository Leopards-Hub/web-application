create database yummyfood;
go
use yummyfood;
go

-- Create the User table
CREATE TABLE IF NOT EXISTS User (
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
    `Number of chair` INT,
    status VARCHAR(50)
);

-- Create the Dish table
CREATE TABLE IF NOT EXISTS Dish (
    Dish_id INT AUTO_INCREMENT PRIMARY KEY,
    Disk_name VARCHAR(255) NOT NULL,
    Detail TEXT,
    price DECIMAL(10, 2)
);

-- Create the Booktable table
CREATE TABLE IF NOT EXISTS Booktable (
    Book_id INT AUTO_INCREMENT PRIMARY KEY,
    User_id INT,
    Table_id INT,
    time DATETIME,
    FOREIGN KEY (User_id) REFERENCES User(user_id),
    FOREIGN KEY (Table_id) REFERENCES `Table`(table_id)
);

-- Create the Orders table
CREATE TABLE IF NOT EXISTS Orders (
    Order_id INT AUTO_INCREMENT PRIMARY KEY,
    Table_id INT,
    User_id INT,
    time DATETIME,
    FOREIGN KEY (Table_id) REFERENCES `Table`(table_id),
    FOREIGN KEY (User_id) REFERENCES User(user_id)
);

-- Create the Order_detail table
CREATE TABLE IF NOT EXISTS Order_detail (
    Order_detail_id INT AUTO_INCREMENT PRIMARY KEY,
    Order_id INT,
    Quantity INT,
    Dish_id INT,
    total_price DECIMAL(10, 2),
    FOREIGN KEY (Order_id) REFERENCES Orders(Order_id),
    FOREIGN KEY (Dish_id) REFERENCES Dish(Dish_id)
);
