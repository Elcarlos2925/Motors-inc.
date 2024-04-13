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

