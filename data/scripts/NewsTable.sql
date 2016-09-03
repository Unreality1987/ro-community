CREATE TABLE news (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`title` varchar(255) not null,
`content` text ,
`author` varchar(255) not null,
`datetime` DateTime not null
)ENGINE=InnoDB;
