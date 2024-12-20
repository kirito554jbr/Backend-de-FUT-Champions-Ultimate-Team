-- Active: 1734081685166@@127.0.0.1@3306@FUT_CHAMP

SHOW DATABASES;


CREATE DATABASE FUT_CHAMP;

use FUT_CHAMP;

CREATE TABLE players (
    id INT PRIMARY key AUTO_INCREMENT,
    name VARCHAR(50),
    photo VARCHAR(200),
    position_p VARCHAR(3),
    id_nation INT,
    id_club INT,
    id_stats INT,
    id_keeper_stats INT,
    Foreign Key (id_nation) REFERENCES nations (id),
    Foreign Key (id_club) REFERENCES club (id),
    Foreign Key (id_stats) REFERENCES stats (id),
    Foreign Key (id_keeper_stats) REFERENCES keeper_stats (id)
);
select * from keeper_stats;

CREATE TABLE nations (
    id INT PRIMARY key AUTO_INCREMENT,
    country VARCHAR(200),
    photo VARCHAR(200)
);

SELECT * FROM nations;

CREATE TABLE club (
    id INT PRIMARY key AUTO_INCREMENT,
    name VARCHAR(50),
    photo VARCHAR(200)
);

CREATE TABLE stats (
    id INT PRIMARY key AUTO_INCREMENT,
    pace VARCHAR(50),
    shooting VARCHAR(50),
    passing VARCHAR(50),
    dribbling VARCHAR(50),
    defending VARCHAR(50),
    physicality VARCHAR(50)
);

CREATE TABLE keeper_stats (
    id INT PRIMARY key AUTO_INCREMENT,
    pace VARCHAR(50),
    shooting VARCHAR(50),
    passing VARCHAR(50),
    dribbling VARCHAR(50),
    defending VARCHAR(50),
    physicality VARCHAR(50)
);

DROP TABLE players;

SHOW TABLES;

COMMIT;

SELECT * from players;

INSERT INTO
    `players` (`name`, `photo`)
VALUES (
        "Lionel Messi",
        "https://cdn.sofifa.net/players/158/023/25_120.png"
    ),
    (
        "Cristiano Ronaldo",
        "https://cdn.sofifa.net/players/020/801/25_120.png"
    ),
    (
        "Kevin De Bruyne",
        "https://cdn.sofifa.net/players/192/985/25_120.png"
    ),
    (
        "Kylian Mbappé",
        "https://cdn.sofifa.net/players/231/747/25_120.png"
    ),
    (
        "Virgil van Dijk",
        "https://cdn.sofifa.net/players/203/376/25_120.png"
    ),
    (
        "Antonio Rudiger",
        "https://cdn.sofifa.net/players/205/452/25_120.png"
    ),
    (
        "Neymar Jr",
        "https://cdn.sofifa.net/players/190/871/25_120.png"
    ),
    (
        "Mohamed Salah",
        "https://cdn.sofifa.net/players/209/331/25_120.png"
    ),
    (
        "Joshua Kimmich",
        "https://cdn.sofifa.net/players/212/622/25_120.png"
    ),
    (
        "Jan Oblak",
        "https://cdn.sofifa.net/players/200/389/25_120.png"
    ),
    (
        "Luka Modrić",
        "https://cdn.sofifa.net/players/177/003/25_120.png"
    ),
    (
        "Vinicius Junior",
        "https://cdn.sofifa.net/players/238/794/25_120.png"
    ),
    (
        "Brahim Diáz",
        "https://cdn.sofifa.net/players/231/410/25_120.png"
    ),
    (
        "Karim Benzema",
        "https://cdn.sofifa.net/players/165/153/25_120.png"
    ),
    (
        "Erling Haaland",
        "https://cdn.sofifa.net/players/239/085/25_120.png"
    ),
    (
        "N'Golo Kanté",
        "https://cdn.sofifa.net/players/215/914/25_120.png"
    ),
    (
        "Alphonso Davies",
        "https://cdn.sofifa.net/players/234/396/25_120.png"
    ),
    (
        "Yassine Bounou",
        "https://cdn.sofifa.net/players/209/981/25_120.png"
    ),
    (
        "Bruno Fernandes",
        "https://cdn.sofifa.net/players/212/198/25_120.png"
    ),
    (
        "Jadon Sancho",
        "https://cdn.sofifa.net/players/233/049/25_120.png"
    ),
    (
        "Alexander-Arnold",
        "https://cdn.sofifa.net/players/231/281/25_120.png"
    ),
    (
        "Achraf Hakimi",
        "https://cdn.sofifa.net/players/235/212/25_120.png"
    ),
    (
        "Youssef En-Nesyri",
        "https://cdn.sofifa.net/players/235/410/25_120.png"
    ),
    (
        "Noussair Mazraoui",
        "https://cdn.sofifa.net/players/236/401/25_120.png"
    ),
    (
        "Ismael Saibari",
        "https://cdn.sofifa.net/players/259/480/25_120.png"
    ),
    (
        "Donnarumma",
        "https://cdn.sofifa.net/players/230/621/25_120.png"
    );

ALTER TABLE keeper_stats ADD rating VARCHAR(3);

ALTER TABLE keeper_stats RENAME COLUMN physicality to positioning;

UPDATE players set position_p = "RW" WHERE id = 1;



SELECT s.roll_no, s.name, s.address, s.phone, s.age, sc.course_id
FROM Student s
JOIN StudentCourse sc ON s.roll_no = sc.roll_no;



SELECT table1.column1,table1.column2,table2.column1,....
FROM table1 
INNER JOIN table2
ON  table1.matching_column = table2.matching_column;

SELECT * FROM players;

SELECT  players.photo, players.name, players.position_p, players.id_nation , nations.id, nations.country
FROM players
RIGHT JOIN nations
ON nations.id = id_nation;

SELECT 
    id AS player_id, 
    players.name AS player_name, 
    players.photo AS player_photo, 
    players.position_p, 
    players.id_club, 
    club.id AS club_id, 
    club.name AS club_name, 
    club.photo AS club_photo
FROM 
    players
RIGHT JOIN 
    club
ON 
    players.id_club = club.id;

SELECT * from players;
    UPDATE players set position_p = "GK" WHERE id = 26;

INSERT INTO
    `players` (`id_nation`, `id_club`, `id_stats`, `id_keeper_stats`)
VALUES  ("1","1","1",NULL),
        ("2","2","2",NULL),
        ("3","3","3",NULL),
        ("4","4","4",NULL),
        ("5","5","5",NULL),
        ("6","6","6",NULL),
        ("7","7","7",NULL),
        ("8","8","8",NULL),
        ("9","9","9",NULL),
        ("10","10",NULL,"1"),
        ("11","11","10",NULL),
        ("12","12","11",NULL),
        ("13","13","12",NULL),
        ("14","14","13",NULL),
        ("15","15","14",NULL),
        ("16","16","15",NULL),
        ("17","17","16",NULL),
        ("18","18","17",NULL),
        ("19","19",NULL,"2"),
        ("20","20","19",NULL),
        ("21","21","20",NULL),
        ("22","22","21",NULL),
        ("23","23","22",NULL),
        ("24","24","23",NULL),
        ("25","25","24",NULL),
        ("26","26",NULL,"3");
        
        ROLLBACK

    

        DELETE FROM players
        WHERE id_club => 27;

        INSERT INTO
    `players` (`id_nation`, `id_club`)
VALUES  ("1","1"),
        ("2","2"),
        ("3","3"),
        ("4","4"),
        ("5","5"),
        ("6","6"),
        ("7","7"),
        ("8","8"),
        ("9","9"),
        ("10","10"),
        ("11","11"),
        ("12","12"),
        ("13","13"),
        ("14","14"),
        ("15","15"),
        ("16","16"),
        ("17","17"),
        ("18","18"),
        ("19","19"),
        ("20","20"),
        ("21","21"),
        ("22","22"),
        ("23","23"),
        ("24","24"),
        ("25","25"),
        ("26","26");


   
    