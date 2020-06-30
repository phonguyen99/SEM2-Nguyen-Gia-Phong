CREATE DATABASE publications;
USE publications;

CREATE TABLE classics(
    author VARCHAR (128),
    title VARCHAR (128),
    category VARCHAR(16),
    year SMALLINT ,
    isbn CHAR(13),
    INDEX(author(20)),
    INDEX(title(20)),
    INDEX(category(4)),
    INDEX(year),
    PRIMARY KEY(isbn)) ENGINE INNODB;
ALTER TABLE classics ADD FULLTEXT(author,title);

INSERT INTO classics (author, title, category, year, isbn)
VALUES('Charles Dickens','Little Dorrit','Fiction', '1857', '9780141439969');
INSERT INTO classics (author, title, category, year, isbn)
VALUES('Mark Twain', 'The Adventures of Tom Sawyer','Fiction','1876','97815981844891');
INSERT INTO classics (author, title, category, year, isbn)
VALUES('Jame Austen', 'Pride and Prejudice','Fiction','1811','9780582506286');
INSERT INTO classics (author, title, category, year, isbn)
VALUES('Charles', 'The Old Curiosity','Fiction','1841','97815981844234');

CREATE TABLE customers(
    name VARCHAR(128),
    isbn VARCHAR(13),
    PRIMARY KEY(isbn)) ENGINE INNODB;

INSERT INTO customers(name,isbn)
    VALUES('Joe Bloggs','9780099533474');
INSERT INTO customer(name,isbn)
    VALUES('Mary Smith','9780582586206');
INSERT INTO customer(name,isbn)
    VALUES('Jack & Wilson','9780517123201');

SELECT * FROM customers;

