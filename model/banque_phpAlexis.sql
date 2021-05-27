DROP DATABASE IF EXISTS banque_php2;

CREATE DATABASE banque_php2 CHARACTER SET 'utf8';
USE banque_php2;

DROP USER IF EXISTS 'banquePHP'@'Localhost';

CREATE USER 'banquePHP'@'Localhost';

GRANT CREATE, SELECT, INSERT, UPDATE, DELETE ON banque_php. * TO 'banquePHP';

CREATE TABLE Users (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,  
  adress VARCHAR(100) NOT NULL,
  city VARCHAR(50) NOT NULL,
  postal_code INT(10) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

CREATE TABLE Accounts (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  account_type VARCHAR(100) NOT NULL,
  account_number VARCHAR(100) NOT NULL,
  amount INT(10) NOT NULL,
  opening_date TIMESTAMP NOT NULL,
  user_id INT UNSIGNED,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES Users(id)
) ENGINE=InnoDB;

CREATE TABLE Operation(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  operation_type VARCHAR(30) NOT NULL,
  amount DECIMAL(11,2) NOT NULL,
  registered TIMESTAMP NOT NULL,
  label VARCHAR(50) NULL,
  account_id INT UNSIGNED,
  PRIMARY KEY (id),
  FOREIGN KEY (account_id) REFERENCES Accounts(id)
)
ENGINE=InnoDB;

INSERT INTO Users (firstname, lastname, email, password, adress, city, postal_code) VALUES
('Bleh', 'Michel', 'michelbleh@hotmail.fr' , "salutcpasmoi" ,'8 rue de la poutre', 'Paris', 75000),
('Jean', 'Michel', 'micheljean@gmail.com', 'salutcmoi' ,'8 rue de la poutrelle', 'Lille', 59000),
( 'Toto', 'Coca', 'Totocmoi@gmail.com', 'jenpeuxplus' ,'2 route des canards', 'Pracjzkpoefjz', 64578);

INSERT INTO Accounts (account_type, account_number, amount, opening_date, user_id) VALUES
('Compte courant', 'N:8973225 fr 2', 2548, NOW(), 1),
( "Livret A", "N:0132520024 fr 45", 1500, NOW(), 2),
( "PEL", "N:0132520024 fr 45", 480, NOW(), 3);

INSERT INTO Operation(operation_type, amount, registered, label, account_id)
VALUES
("débit", -15.60, NOW(), "Essence carrefour", 1),
("vente", 500, NOW(), "vente décoration", 2),
("achat", -7.62, NOW(), "Amazon", 2),
("débit", -50, NOW(), "Courses", 3);

