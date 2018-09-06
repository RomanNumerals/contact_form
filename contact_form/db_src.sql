CREATE DATABASE user_submissions;

USE user_submissions;

/* creating table with appropriate fields
  -to prevent multiple submissions must add UNIQUE contstraint to ID
*/
CREATE TABLE contact_info (
  id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  first_name VARCHAR(20) NOT NULL,
  last_name VARCHAR(20) NOT NULL,
  zip_code INT(5) NOT NULL,
  email VARCHAR(30) NOT NULL,
  comments VARCHAR(150)
);

INSERT INTO contact_info (first_name, last_name, zip_code, email, comments) VALUES (':first_name', ':last_name', ':zip_code', ':email', ':comments');
