Create database Calendar;
Use Calendar;

CREATE TABLE events (
  idEvent int(11) NOT NULL,
  tittle varchar(255) NOT NULL,
  descriptionEvent text NOT NULL,
  startEvent datetime NOT NULL,
  endEvent datetime NOT NULL,
  textColor varchar(7) NOT NULL,
  backgroundColor varchar(7) NOT NULL
)

ALTER TABLE events ADD PRIMARY KEY (idEvent);

ALTER TABLE events MODIFY idEvent int(11) NOT NULL AUTO_INCREMENT;
