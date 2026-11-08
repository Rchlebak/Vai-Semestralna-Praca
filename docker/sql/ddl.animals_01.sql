SET NAMES utf8mb4;

DROP TABLE IF EXISTS `animals`;
CREATE TABLE `animals` (
                           `id` int(11) NOT NULL AUTO_INCREMENT,
                           `name` varchar(100) NOT NULL,
                           `species` varchar(50) NOT NULL,
                           `age` int(11) NOT NULL,
                           `location` varchar(100) NOT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `animals` (`name`, `species`, `age`, `location`)
VALUES ('Luna', 'pes', 2, 'Bratislava'),
       ('Miko', 'pes', 1, 'Žilina'),
       ('Sofi', 'mačka', 3, 'Košice'),
       ('Bela', 'mačka', 4, 'Nitra');
