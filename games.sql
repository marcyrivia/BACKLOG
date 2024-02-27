CREATE TABLE admin(
   admin_id INT auto-increment,
   admin_key VARCHAR(14),
   admin_pseudo VARCHAR(50),
   admin_lastname VARCHAR(50),
   admin_firstname VARCHAR(50),
   PRIMARY KEY(admin_id)
);

CREATE TABLE Userprofil(
   user_id INT auto-increment,
   user_pseudo VARCHAR(50),
   user_firstname VARCHAR(50),
   user_email VARCHAR(50),
   user_password VARCHAR(50) NOT NULL,
   user_descr VARCHAR(255),
   user_picture VARCHAR(255),
   user_lastname VARCHAR(50),
   PRIMARY KEY(user_id)
);

CREATE TABLE Note(
   Note_id INT auto-increment,
   Note_score VARCHAR(50),
   user_id INT auto-increment,
   user_id_1 INT NOT NULL,
   PRIMARY KEY(Note_id),
   FOREIGN KEY(user_id_1) REFERENCES Userprofil(user_id)
);

CREATE TABLE GENRE(
   genre_id INT auto-increment,
   genre_name VARCHAR(50),
   PRIMARY KEY(genre_id)
);

CREATE TABLE list(
   list_id VARCHAR(50) auto-increment,
   list_name VARCHAR(50),
   PRIMARY KEY(list_id)
);

CREATE TABLE review(
   review_id INT auto-increment,
   review_review VARCHAR(255),
   PRIMARY KEY(review_id)
);

CREATE TABLE studio(
   studio_id INT auto-increment,
   studio_name VARCHAR(50),
   PRIMARY KEY(studio_id)
);

CREATE TABLE games(
   games_id INT auto-increment,
   game_name VARCHAR(60),
   game_release VARCHAR(50),
   game_pegi VARCHAR(50),
   game_descr VARCHAR(255),
   game_note VARCHAR(50),
   genre_id INT NOT NULL auto-increment,
   studio_id VARCHAR(50) auto-increment,
   plateformes_id INT auto-increment,
   studio_id_1 INT NOT NULL,
   PRIMARY KEY(games_id),
   FOREIGN KEY(studio_id_1) REFERENCES studio(studio_id)
);

CREATE TABLE Plateformes(
   plateformes_id INT auto-increment,
   plateformes_name VARCHAR(50),
   games_id INT NOT NULL,
   PRIMARY KEY(plateformes_id),
   FOREIGN KEY(games_id) REFERENCES games(games_id)
);

CREATE TABLE user_a_un_jeu(
   user_id INT,
   games_id INT,
   PRIMARY KEY(user_id, games_id),
   FOREIGN KEY(user_id) REFERENCES Userprofil(user_id),
   FOREIGN KEY(games_id) REFERENCES games(games_id)
);

CREATE TABLE jeu_a_une_note(
   games_id INT,
   Note_id INT,
   PRIMARY KEY(games_id, Note_id),
   FOREIGN KEY(games_id) REFERENCES games(games_id),
   FOREIGN KEY(Note_id) REFERENCES Note(Note_id)
);

CREATE TABLE le_jeu_à_un_genre(
   games_id INT,
   genre_id INT,
   PRIMARY KEY(games_id, genre_id),
   FOREIGN KEY(games_id) REFERENCES games(games_id),
   FOREIGN KEY(genre_id) REFERENCES GENRE(genre_id)
);

CREATE TABLE user_a_une_liste(
   user_id INT,
   list_id VARCHAR(50),
   PRIMARY KEY(user_id, list_id),
   FOREIGN KEY(user_id) REFERENCES Userprofil(user_id),
   FOREIGN KEY(list_id) REFERENCES list(list_id)
);

CREATE TABLE L_USER_A_UNE_REVIEW(
   user_id INT,
   review_id INT,
   PRIMARY KEY(user_id, review_id),
   FOREIGN KEY(user_id) REFERENCES Userprofil(user_id),
   FOREIGN KEY(review_id) REFERENCES review(review_id)
);

CREATE TABLE un_jeu_a_une_review(
   games_id INT,
   review_id INT,
   PRIMARY KEY(games_id, review_id),
   FOREIGN KEY(games_id) REFERENCES games(games_id),
   FOREIGN KEY(review_id) REFERENCES review(review_id)
);
