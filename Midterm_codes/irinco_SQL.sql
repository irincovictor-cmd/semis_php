CREATE DATABASE mw1_irinco;
USE mw1_irinco;
CREATE TABLE Drivers (
    driverId int NOT NULL PRIMARY KEY,
    driverName varchar(255),
    commision varchar(255)
);
INSERT INTO Drivers (driverId, driverName, commision)
values
(2, "victor james", "35.00"),
(3, "asd", "35.00"),
(4, "victor james", "35.00");
CREATE TABLE Cars (
    cardId int NOT NULL PRIMARY KEY,
    carNumber varchar(255),
    carModel varchar(255),
    carStatus varchar(255),
    rentPrice decimal(10,2),
    driverId int NOT NULL,
    FOREIGN KEY (driverId) REFERENCES Drivers(driverId)
);
INSERT INTO Cars (cardId, carNumber, carModel, carStatus, rentPrice, driverId)
values
(1, 202501, "Toyota camry", "good", "800.00",1),
(2, 202502, "Honda Civic type-R", "good", "1000.00", 2),
(3, 202503, "Suzuki Espresso", "good", "400.00", 4),
(4, 202504, "Mitsubishi Mirage", "bad", "500.00", 3);

CREATE TABLE Customer (
    customerId int NOT NULL PRIMARY KEY auto_increment,
    lastname varchar(255),
    firstname varchar(255),
    gender varchar(255),
    age int(11),
    contact_no int NOT NULL,
    email varchar (255),
    customer_password varchar (255)
);
INSERT INTO Customers (lastname, firstname, gender, age, contact_no, email, customer_password)
values
("irinco", "victor", 7, 20, 123, "irinco.victor@Cec.edu.ph", "pogiako123");

CREATE TABLE Rentals (
    rentalsId int NOT NULL PRIMARY KEY auto_increment,
    rentalNumber int (11),
    date_rent date,
    time_depart timestamp,
    time_arrive timestamp,
    destination varchar(255),
    date_return datetime,
    payment decimal (10,2)
);
CREATE TABLE Transactions (
    transactionId int NOT NULL PRIMARY KEY auto_increment,
    transactionName varchar (255),
    rental_Id int NOT NULL,
    car_Id int NOT NULL,
    customer_Id int NOT NULL,
    transaction_date timestamp,
    FOREIGN KEY (rental_Id) REFERENCES Rentals(rentalsId),
    FOREIGN KEY (car_Id) REFERENCES Cars(cardId),
    FOREIGN KEY (customer_Id) REFERENCES Customers(customersId)
);
CREATE TABLE Reports (
    reportId int NOT NULL PRIMARY KEY auto_increment,
    transaction_Id int NOT NULL,
    rental_Id int NOT NULL,
	report_date timestamp,
	FOREIGN KEY (rental_Id) REFERENCES Rentals(rentalsId),
    FOREIGN KEY (transaction_Id) REFERENCES Transactions(transactionId)
);

