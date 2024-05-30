CREATE TABLE clients (
                    id int NOT NULL AUTO_INCREMENT,
                    username varchar(255),
                    password varchar(255),
                    email varchar(255),
                    name varchar(255),
                    age integer,
                    gender varchar(255),
                    dateOfBirth varchar(255),
                    credits integer,
                    membershipExpires DATE,
    PRIMARY KEY (id)
);