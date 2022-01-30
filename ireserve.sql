<<<<<<< HEAD



=======
CREATE TABLE FORM
(
    User_fname varchar(30) NOT NULL,
    User_lname varchar(30) NOT NULL,
    User_email varchar(30) NOT NULL,
    User_matric int(10) NOT NULL,
    User_phone int(10) NOT NULL,
    User_advisor int(10),
    User_address varchar(30) NOT NULL,
    User_org varchar(30),
    Prog_name varchar(30) NOT NULL,
    Prog_type varchar(30),
    part_tot int(10) NOT NULL,
    Prog_cat varchar(30),
    CONSTRAINT User_matric_pk PRIMARY KEY(User_matric)
);


INSERT INTO Customer
VALUES('amir', 'izzat', 'amir12@gmail.com',1812031,0102010582 ,'azli','taman perdana,johor','sig','sigg','evet',20,'event' );
>>>>>>> d8885423570e832a18b088347d287541efddae6d

CREATE TABLE FORM
(
    User_fname varchar(30) NOT NULL,
    User_lname varchar(30) NOT NULL,
    User_email varchar(30) NOT NULL,
    User_matric int(10) NOT NULL,
    User_phone int(10) NOT NULL,
    User_advisor int(10),
    User_address varchar(30) NOT NULL,
    User_org varchar(30),
    Prog_name varchar(30) NOT NULL,
    Prog_type varchar(30),
    part_tot int(10) NOT NULL,
    Prog_cat varchar(30),
    CONSTRAINT User_matric_pk PRIMARY KEY(User_matric)
);

CREATE TABLE userlogin
(
    matricno int(7) NOT NULL,
    password varchar(30) NOT NULL,
    cpassword varchar(255) NOT NULL,
    verify_token varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    phone int(255) NOT NULL,
    CONSTRAINT matricno_pk PRIMARY KEY(matricno)
);
<<<<<<< HEAD

CREATE TABLE pdf_file
(
    pdf varchar(300) NOT NULL

)

CREATE TABLE pdf_file 
(id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL, 
name VARCHAR(255) NOT NULL, 
mime varchar(255) NOT NULL, 
data BLOB NOT NULL); 
=======
>>>>>>> d8885423570e832a18b088347d287541efddae6d
