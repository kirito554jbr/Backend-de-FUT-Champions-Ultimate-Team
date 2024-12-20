SHOW DATABASES;

CREATE DATABASE Shimatch;

USE Shimatch;


CREATE Table nationalities (
    id INT PRIMARY key AUTO_INCREMENT,
    nom VARCHAR(100),
    continant VARCHAR(100)
);


CREATE TABLE clubs (
    id_club INT PRIMARY key AUTO_INCREMENT,
    nom VARCHAR(100),
    logo VARCHAR(100),
    date_create DATE
);

CREATE TABLE players (
    id INT PRIMARY key AUTO_INCREMENT,
    nom VARCHAR(100) ,
    img VARCHAR(100) ,
    position VARCHAR(100),
    rating INT CHECK(rating >= 1 AND rating < 100),
    pace INT CHECK(pace >= 1 AND pace < 100),
    shooting INT CHECK(shooting >= 1 AND shooting < 100),
    passing INT CHECK(passing >= 1 AND passing < 100),
    dribbling INT CHECK(dribbling >= 1 AND dribbling < 100),
    defending INT CHECK(defending >= 1 AND defending < 100),
    physicality INT CHECK(physicality >= 1 AND physicality < 100),
    diving INT CHECK(diving >= 1 AND diving < 100),
    handling INT CHECK(handling >= 1 AND handling < 100),
    kicking INT CHECK(kicking >= 1 AND kicking < 100),
    reflexes INT CHECK(reflexes >= 1 AND reflexes < 100),
    speed INT CHECK(speed >= 1 AND speed  < 100),
    positioning INT CHECK(positioning >= 1 AND positioning < 100),
    id_club INT,
    id_nationalities INT,
    Foreign Key (id_club) REFERENCES clubs(id_club),
    Foreign Key (id_nationalities) REFERENCES nationalities(id)
);


SELECT * FROM clubs;
SELECT * FROM players;
SELECT * FROM nationalities;

INSERT INTO nationalities (nom, continant) VALUES 
('France', 'Europe'),
('Brazil', 'South America'),
('Germany', 'Europe'),
('Argentina', 'South America'),
('Spain', 'Europe'),
('Portugal', 'Europe'),
('Italy', 'Europe'),
('England', 'Europe'),
('Netherlands', 'Europe'),
('Belgium', 'Europe');


INSERT INTO clubs (nom, logo, date_create) VALUES 
('Paris Saint-Germain', 'psg_logo.png', '1970-08-12'),
('Real Madrid', 'real_madrid_logo.png', '1902-03-06'),
('Barcelona', 'barcelona_logo.png', '1899-11-29'),
('Bayern Munich', 'bayern_logo.png', '1900-02-27'),
('Manchester United', 'manutd_logo.png', '1878-03-05'),
('Juventus', 'juventus_logo.png', '1897-11-01'),
('Chelsea', 'chelsea_logo.png', '1905-03-10'),
('Ajax', 'ajax_logo.png', '1900-03-18'),
('Liverpool', 'liverpool_logo.png', '1892-06-03'),
('Manchester City', 'mancity_logo.png', '1880-11-23');

INSERT INTO players (nom, img, position, rating, pace, shooting, passing, dribbling, defending, physicality, diving, handling, kicking, reflexes, speed, positioning, id_club, id_nationalities) VALUES
('Lionel Messi', 'messi_img.png', 'RW', 95, 85, 92, 91, 96, 40, 65, 10, 10, 10, 10, 80, 85, 1, 2),
('Cristiano Ronaldo', 'ronaldo_img.png', 'ST', 94, 89, 93, 85, 88, 42, 78, 10, 10, 10, 10, 85, 88, 2, 6),
('Neymar Jr', 'neymar_img.png', 'LW', 92, 90, 87, 85, 95, 38, 58, 10, 10, 10, 10, 75, 82, 1, 2),
('Kylian Mbappé', 'mbappe_img.png', 'ST', 93, 97, 90, 81, 92, 36, 72, 10, 10, 10, 10, 98, 88, 1, 1),
('Kevin De Bruyne', 'de_bruyne_img.png', 'CM', 91, 75, 84, 93, 88, 62, 78, 10, 10, 10, 10, 72, 88, 10, 10),
('Robert Lewandowski', 'lewandowski_img.png', 'ST', 92, 77, 92, 82, 80, 46, 78, 10, 10, 10, 10, 66, 83, 4, 3),
('Virgil van Dijk', 'vandijk_img.png', 'CB', 91, 75, 60, 75, 70, 92, 84, 10, 10, 10, 10, 58, 88, 9, 9),
('Manuel Neuer', 'neuer_img.png', 'GK', 90, 40, 20, 50, 60, 92, 85, 90, 91, 85, 89, 42, 88, 4, 3),
('Sadio Mané', 'mane_img.png', 'LW', 89, 93, 82, 77, 88, 42, 76, 10, 10, 10, 10, 88, 88, 10, 9),
('Sergio Ramos', 'ramos_img.png', 'CB', 89, 71, 71, 75, 72, 88, 84, 10, 10, 10, 10, 60, 84, 2, 5);



select players.nom, players.position FROM players, nationalities
WHERE nationalities.nom = "Brazil"
AND players.id_nationalities = nationalities.id;



select nationalities.nom FROM nationalities
WHERE nationalities.continant = "Europe" ;


      