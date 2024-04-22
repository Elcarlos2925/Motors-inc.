Create database `Motors-inc`;
Use `Motors-inc`;

CREATE TABLE events (
  `idEvent` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descriptionEvent` text NOT NULL,
  `startEvent` datetime NOT NULL,
  `endEvent` datetime NOT NULL,
  `textColor` varchar(7) NOT NULL,
  `backgroundColor` varchar(7) NOT NULL
);


CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(99) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subarea` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL
);

ALTER TABLE events ADD PRIMARY KEY (`idEvent`);
ALTER TABLE `user` ADD PRIMARY KEY (`idUser`);


ALTER TABLE events MODIFY idEvent int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO events (idEvent, title, descriptionEvent, startEvent, endEvent, textColor, backgroundColor) VALUES
(1, 'Odette Franco', 'Desarrollar casos de uso', '2024-04-01 01:00:00', '2024-04-01 23:59:59', '#ffffff', '#17FF81'),
(2, 'Karla Trillo', 'Revisar documentación', '2024-04-02 00:00:01', '2024-04-03 23:59:59', '#ffffff', '#9B00FF');

INSERT INTO user(idUser, username, name, subarea, role, phone) VALUES (1, 'OdetteF', 'Odette Franco', 'Tics', 'Scrum Master', '6641234567');
INSERT INTO user(idUser, username, name, subarea, role, phone) VALUES (2, 'KarlaT', 'Karla Trillo', 'Tics', 'Product Owner', '6642345678');
INSERT INTO user(idUser, username, name, subarea, role, phone) VALUES (3, 'CarlosL', 'Carlos Lozoya', 'Tics', 'Backend', '6643456789');
INSERT INTO user(idUser, username, name, subarea, role, phone) VALUES (4, 'AlexisM', 'Alexis Martinez', 'Tics', 'Backend', '6644567890');
INSERT INTO user(idUser, username, name, subarea, role, phone) VALUES (5, 'OmarM', 'Omar Mendez', 'Tics', 'Frontend', '6645678901');
INSERT INTO user(idUser, username, name, subarea, role, phone) VALUES (6, 'JulioM', 'Julio Martinez', 'Tics', 'Frontend', '6646789012');
INSERT INTO user(idUser, username, name, subarea, role, phone) VALUES (7, 'ReneB', 'Rene Beltran', 'Tics', 'Frontend', '6647890123');
