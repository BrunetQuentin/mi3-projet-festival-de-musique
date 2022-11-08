/*
   Script d'initialisation de la BDD PostgreSQL contenant
   la programmation du Vercors Music Festival 2022.
*/

-- Suppression des tables (si déjà présente)
DROP TABLE IF EXISTS Concert;
DROP TABLE IF EXISTS Scene;
DROP TABLE IF EXISTS Video;
DROP TABLE IF EXISTS Artiste;
DROP TABLE IF EXISTS Livre_or;


-- Définition des tables
CREATE TABLE Artiste (
   id_artiste SERIAL PRIMARY KEY,
   nom_artiste VARCHAR(100) NOT NULL,
   lien_page VARCHAR(200) NOT NULL,
   lien_illustration VARCHAR(300) NOT NULL
);

CREATE TABLE Scene (
   id_scene SERIAL PRIMARY KEY,
   nom_scene VARCHAR(50) NOT NULL,
   adresse VARCHAR(100) NOT NULL,
   code_postal VARCHAR(10) NOT NULL,
   ville VARCHAR(50) NOT NULL
);

CREATE TABLE Video (
   id_video SERIAL PRIMARY KEY,
   id_artiste INT NOT NULL,
   nom_video VARCHAR(100) NOT NULL,
   lien_video_youtube VARCHAR(100) NOT NULL,
   FOREIGN KEY(id_artiste) REFERENCES Artiste(id_artiste)
);

CREATE TABLE Concert (
   id_concert SERIAL PRIMARY KEY,
   id_artiste INT UNIQUE NOT NULL,
   id_scene INT NOT NULL,
   date_concert DATE NOT NULL,
   heure_debut_concert TIME NOT NULL,
   entree_libre BOOLEAN NOT NULL DEFAULT FALSE,
   FOREIGN KEY(id_artiste) REFERENCES Artiste(id_artiste),
   FOREIGN KEY(id_scene) REFERENCES Scene(id_scene)
);


CREATE TABLE Livre_or (
  id_post SERIAL PRIMARY KEY,
  date_post TIMESTAMP NOT NULL DEFAULT current_timestamp,
  pseudo_post VARCHAR(50) NOT NULL,
  message_post VARCHAR(500) NOT NULL,
  ip_post VARCHAR(100) NOT NULL
);


-- Ajout des données dans les tables
INSERT INTO Artiste
VALUES (1, 'Cléa Vincent', 'https://www.vercorsmusicfestival.com/artiste/clea-vincent/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/b0144dbf23d597397a0d60bb39ef49ff49f45a69.jpeg'),
 (2, 'Piers Faccini', 'https://www.vercorsmusicfestival.com/artiste/piers-faccini/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/536fe3ef266d4b3e523ef1bdaf7f5981a2a6168c.jpeg'),
 (3, 'Lombre', 'https://www.vercorsmusicfestival.com/artiste/lombre-2/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/31c825ea964e8fe20d69d7a540c8bf80b0fa58ca.jpeg'),
 (4, 'Ben Mazué', 'https://www.vercorsmusicfestival.com/artiste/ben-mazue/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/da8f87ecab95b2bc9a5aa536082386e5cbbab405.jpeg'),
 (5, 'TechnoBrass', 'https://www.vercorsmusicfestival.com/artiste/technobrass-1/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/17dcf12dee5e990561afe6eafa3016cc6f6501bd.jpeg'),
 (6, 'EZ3kiel', 'https://www.vercorsmusicfestival.com/artiste/ezekiel/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/cdb3b9da4ceb7a4fad6f4b4bdfad712436076cfb.jpeg'),
 (7, 'ARABELLA', 'https://www.vercorsmusicfestival.com/artiste/arabella/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/7c50b32e3b1e42208fdc6df1ad26106c7cbd88d0.jpeg'),
 (8, 'R.CAN', 'https://www.vercorsmusicfestival.com/artiste/r-can-2/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/6f41f6fd1c0f04d7ec0ff8b18799321866c0b810.jpeg'),
 (9, 'Eskelina', 'https://www.vercorsmusicfestival.com/artiste/eskelina-2/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/cfa4b4117da5175cc14878730e2f0915f793a1c0.jpeg'),
 (10, 'Laura Cahen', 'https://www.vercorsmusicfestival.com/artiste/laura-cahen/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/76a0672a4ff6c1233dc740b7ed52988aaeb4cbb9.jpeg'),
 (11, 'Laurent Bardainne & Tigre d''Eau Douce', 'https://www.vercorsmusicfestival.com/artiste/laurent-bardainne-tigre-d-eau-douce-2/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/06c8f5676ff4f28ec99c8532adb467ffdc03b1df.jpeg'),
 (12, 'Oldelaf', 'https://www.vercorsmusicfestival.com/artiste/oldelaf/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/ee8dfa53977a2fde32cddb8970534d0ad92d3eba.jpeg'),
 (13, 'Manudigital ft. Caporal Negus', 'https://www.vercorsmusicfestival.com/artiste/manudigital-1/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/04466d9ce08db9f2377a0b7798149e7c11f6e262.jpeg'),
 (14, 'Deluxe', 'https://www.vercorsmusicfestival.com/artiste/deluxe-4/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/6a802f1da539ddf8a364b0f9d0f764a71a01ef60.jpeg'),
 (15, 'Adèle & Robin', 'https://www.vercorsmusicfestival.com/artiste/adele-robin/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/4afc24a470798044c26e489b85484df6009aa88d.jpeg'),
 (16, 'Tigadrine', 'https://www.vercorsmusicfestival.com/artiste/tigadrine-1/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/d2fec9d444cf60670b0943354d5c5a1c5db3c5c7.jpeg'),
 (17, 'Piero2L', 'https://www.vercorsmusicfestival.com/artiste/piero2l/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/bdc85a2033c2d5be14aa5bf0e6b5e969703238bd.jpeg'),
 (18, 'Efrasis', 'https://www.vercorsmusicfestival.com/artiste/efrasis/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/f82d190ff48ee818794e17365734e243a71041cd.jpeg'),
 (19, 'Tioma', 'https://www.vercorsmusicfestival.com/artiste/tioma-1/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/ecc7ef5b7cccfcad2e9b658ee1e93d4c11b76ec3.jpeg'),
 (20, 'Olympe', 'https://www.vercorsmusicfestival.com/artiste/olympe/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/36fb0ec7e792cc494b75a9be75c9e5ffafd950c0.jpeg'),
 (21, 'Maxence', 'https://www.vercorsmusicfestival.com/artiste/maxence/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/252bb8b4c700bce86ceda4a732385545906416c1.jpeg'),
 (22, 'Bigflo & Oli', 'https://www.vercorsmusicfestival.com/artiste/bigflo-oli-3//', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/5cf43515809632df93513657f6c7f7f3185721f9.jpeg'),
 (23, 'Bark', 'https://www.vercorsmusicfestival.com/artiste/bark/', 'https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/5ef8af816bc5ae6bbef10cc5c16edb03de6fa7e4.jpeg'),
 (24, 'IGIT', 'https://vercorsmusicfestival.com/artiste/igit/', 'https://vercorsmusicfestival.com/media/cache/artist_large/uploads/artist_image/large/5bcdd072f1383216b7a0dad57245c3ab3f4ccff8.jpeg'),
 (25, 'Yael Naim', 'https://vercorsmusicfestival.com/artiste/yael-naim/', 'https://vercorsmusicfestival.com/media/cache/artist_large/uploads/artist_image/large/a3045e72d14c622d6919669df4a3d5e60d644e92.jpeg'),
 (26, 'Keziah Jones', 'https://vercorsmusicfestival.com/artiste/keziah-jones/', 'https://vercorsmusicfestival.com/media/cache/artist_large/uploads/artist_image/large/063ac2a556f170541c31c062e4a6d4053a2e9ca4.jpeg');

INSERT INTO Scene
VALUES (1, 'La Terrasse', 'Maison des Sports, Route de la Foulée blanche', '38880', 'Autrans'),
 (2, 'Le Foyer', 'Maison des Sports, Route de la Foulée blanche', '38880', 'Autrans'),
 (3, 'L''Avant Scène', 'Le Châtelard', '38112', 'Méaudre');

INSERT INTO Video (id_artiste, nom_video, lien_video_youtube)
VALUES (1, 'Cléa Vincent - Recuerdo', 'https://youtu.be/lkK086JdGXw'),
 (2, 'Piers Faccini - All Aboard (ft. Ben Harper & Abdelkebir Merchane)', 'https://youtu.be/6QkoUFFlKa4'),
 (3, 'Lombre - La lumière du noir', 'https://youtu.be/mcDasr1hGQA'),
 (4, 'Ben Mazué - Quand je marche', 'https://youtu.be/29gOHmidswU'),
 (4, 'Ben Mazué - Les jours heureux', 'https://youtu.be/tpoxa-J7etk'),
 (5, 'TechnoBrass - Gentil', 'https://youtu.be/gsQdcI48CMs'),
 (6, 'EZ3kiel - La mémoire du feu', 'https://youtu.be/eECmveRVco4'),
 (7, 'ARABELLA - Wild', 'https://youtu.be/BfdTEZc30aw'),
 (8, 'R.CAN - Vivre d''art', 'https://youtu.be/i44Y4He5FH8'),
 (9, 'Eskelina - Sur la route', 'https://youtu.be/se_QPRapc0U'),
 (10, 'Laura Cahen - Cavale', 'https://youtu.be/E2kU7NOym0I'),
 (11, 'Laurent Bardainne & Tigre d''Eau Douce - La vie, la vie, la vie', 'https://youtu.be/ 0e19VzHI54c'),
 (12, 'Oldelaf - La Tristitude', 'https://youtu.be/UQObMEXyhrU'),
 (12, 'Oldelaf et Monsieur D - Le Café', 'https://youtu.be/5Y7ZZsOS4O4'),
 (13, 'MANUDIGITAL - Mexicali', 'https://youtu.be/YKEYTUxcOFg'),
 (14, 'Deluxe - Tum Rakak', 'https://youtu.be/Oq7gVPRjlfQ'),
 (14, 'Deluxe - Shoes', 'https://youtu.be/nHkKBl4lymE'),
 (15, 'Adèle & Robin - Bad Guy (Billie Eilish) & Anxiété (Pomme) Cover', 'https://youtu.be/ TLPkYtGBDso'),
 (16, 'Tigadrine - Lama La Lila', 'https://youtu.be/mj0YOVGweQw'),
 (18, 'Efrasis - Piste Noire', 'https://youtu.be/-ouYM6fuYy8'),
 (19, 'Tioma - J''aurais dû', 'https://youtu.be/kD3dtJgZi-M'),
 (20, 'Olympe Chabert - MEUF', 'https://youtu.be/TETcuAF3U-g'),
 (21, 'Maxence - Paix dans le Monde', 'https://youtu.be/7KAb4w2Xrg0'),
 (21, 'Maxence - Parfum d''été', 'https://youtu.be/MAvGx1hx-aQ'),
 (22, 'Bigflo & Oli - Sacré Bordel', 'https://youtu.be/DjTfjqp83Rw'),
 (23, 'Bark - Oudis', 'https://youtu.be/mM8Q3Xdr4lU'),
 (24, 'IGIT - Des Conséquences', 'https://youtu.be/ZjMfzEOaM5s'),
 (26, 'Keziah Jones - Rhythm Is Love', 'https://youtu.be/Rp9mRlW7Tgo');

INSERT INTO Concert (id_artiste, id_scene, date_concert, heure_debut_concert, entree_libre)
VALUES  (1, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('01/07/2022', 'DD/MM/YYYY') , '18:00' , FALSE ),
 (2, (SELECT id_scene FROM Scene WHERE nom_scene = 'Le Foyer') , TO_DATE('01/07/2022', 'DD/MM/YYYY') , '19:15' , FALSE ),
 (3, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('01/07/2022', 'DD/MM/YYYY') , '20:15' , FALSE ),
 (4, (SELECT id_scene FROM Scene WHERE nom_scene = 'Le Foyer') , TO_DATE('01/07/2022', 'DD/MM/YYYY') , '21:30' , FALSE ),
 (5, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('01/07/2022', 'DD/MM/YYYY') , '23:00' , FALSE ),
 (6, (SELECT id_scene FROM Scene WHERE nom_scene = 'Le Foyer') , TO_DATE('01/07/2022', 'DD/MM/YYYY') , '23:59' , FALSE ),
 (7, (SELECT id_scene FROM Scene WHERE nom_scene = 'L''Avant Scène') , TO_DATE('02/07/2022', 'DD/MM/YYYY') , '14:00' , TRUE ),
 (8, (SELECT id_scene FROM Scene WHERE nom_scene = 'L''Avant Scène') , TO_DATE('02/07/2022', 'DD/MM/YYYY') , '15:30' , TRUE ),
 (9, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('02/07/2022', 'DD/MM/YYYY') , '18:00' , FALSE ),
 (10, (SELECT id_scene FROM Scene WHERE nom_scene = 'Le Foyer') , TO_DATE('02/07/2022', 'DD/MM/YYYY') , '19:15' , FALSE ),
 (11, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('02/07/2022', 'DD/MM/YYYY') , '20:15' , FALSE ),
 (12, (SELECT id_scene FROM Scene WHERE nom_scene = 'Le Foyer') , TO_DATE('02/07/2022', 'DD/MM/YYYY') , '21:30' , FALSE ),
 (13, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('02/07/2022', 'DD/MM/YYYY') , '22:30' , FALSE ),
 (14, (SELECT id_scene FROM Scene WHERE nom_scene = 'Le Foyer') , TO_DATE('02/07/2022', 'DD/MM/YYYY') , '23:45' , FALSE ),
 (15, (SELECT id_scene FROM Scene WHERE nom_scene = 'L''Avant Scène') , TO_DATE('03/07/2022', 'DD/MM/YYYY') , '12:00' , TRUE ),
 (16, (SELECT id_scene FROM Scene WHERE nom_scene = 'L''Avant Scène') , TO_DATE('03/07/2022', 'DD/MM/YYYY') , '13:00' , TRUE ),
 (17, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('03/07/2022', 'DD/MM/YYYY') , '15:00' , FALSE ),
 (18, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('03/07/2022', 'DD/MM/YYYY') , '15:30' , FALSE ),
 (19, (SELECT id_scene FROM Scene WHERE nom_scene = 'Le Foyer') , TO_DATE('03/07/2022', 'DD/MM/YYYY') , '16:00' , FALSE ),
 (20, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('03/07/2022', 'DD/MM/YYYY') , '16:40' , FALSE ),
 (21, (SELECT id_scene FROM Scene WHERE nom_scene = 'Le Foyer') , TO_DATE('03/07/2022', 'DD/MM/YYYY') , '17:30' , FALSE ),
 (22, (SELECT id_scene FROM Scene WHERE nom_scene = 'Le Foyer') , TO_DATE('03/07/2022', 'DD/MM/YYYY') , '19:30' , FALSE ),
 (23, (SELECT id_scene FROM Scene WHERE nom_scene = 'La Terrasse') , TO_DATE('03/07/2022', 'DD/MM/YYYY') , '21:00' , FALSE );

INSERT INTO Livre_or (date_post, pseudo_post, message_post, ip_post)
 VALUES ('2022-07-04 11:11:11', 'Alice', 'C''était COOL COOL COOL 😁', '0.0.0.1'),
('2022-07-05 10:10:10', 'Bob', 'Top ! Vivement l''année prochaine !', '0.0.0.2');
