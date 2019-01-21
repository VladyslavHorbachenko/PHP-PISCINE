create table ft_table(
   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   login VARCHAR(8) NOT NULL DEFAULT 'toto',
   `group` enum('staff', 'student','other') NOT NULL,
   creation_date DATE NOT NULL);
