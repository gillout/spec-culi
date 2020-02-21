--
-- Base de données :  `speculi`
--

CREATE DATABASE IF NOT EXISTS speculi DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE speculi

-- --------------------------------------------------------

--
-- Structure de la table `quantite`
--

CREATE TABLE IF NOT EXISTS quantite (
  idQuan SMALLINT NOT NULL AUTO_INCREMENT,
  nombre SMALLINT NOT NULL,
  PRIMARY KEY (idQuan)
) ENGINE=InnoDB;

--
-- Contenu de la table `quantite`
--

INSERT INTO quantite (idQuan, nombre) VALUES (NULL, );

-- --------------------------------------------------------

--
-- Structure de la table `mesure`
--

CREATE TABLE IF NOT EXISTS mesure (
  idMesu SMALLINT NOT NULL AUTO_INCREMENT,
  unite VARCHAR(20) COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (idMesu)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Contenu de la table `mesure`
--

INSERT INTO mesure (idMesu, unite) VALUES (NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS pays (
  idPays SMALLINT NOT NULL AUTO_INCREMENT,
  nom VARCHAR(40) COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (idPays)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Contenu de la table `pays`
--

INSERT INTO pays (idPays, nom) VALUES (NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE IF NOT EXISTS recette (
  idRec SMALLINT NOT NULL AUTO_INCREMENT,
  libelle VARCHAR(40) COLLATE utf8_general_ci NOT NULL,
	photo VARCHAR(30) COLLATE utf8_general_ci NULL,
	type VARCHAR(20) COLLATE utf8_general_ci NOT NULL,
	pourCombien TINYINT NULL,
	vegetarienne BOOLEAN DEFAULT FALSE,
	idPays SMALLINT NOT NULL,
  PRIMARY KEY (idRec),
	FOREIGN KEY (idPays) REFERENCES pays (idPays)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO recette (idRec, libelle, photo, type, pourCombien, vegetarienne, idPays, idIngr)
	VALUES (NULL, '', '', '', , FALSE, );

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE IF NOT EXISTS ingredient (
  idIngr SMALLINT NOT NULL AUTO_INCREMENT,
  label VARCHAR(40) COLLATE utf8_general_ci NOT NULL,
	infos TINYTEXT COLLATE utf8_general_ci,
	idQuan SMALLINT,
	idMesu SMALLINT,
  PRIMARY KEY (idIngr),
	FOREIGN KEY(idQuan) REFERENCES quantite(idQuan),
	FOREIGN KEY(idMesu) REFERENCES mesure(idMesu)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Contenu de la table `ingredient`
--

INSERT INTO ingredient (idIngr, label, infos) VALUES (NULL, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE IF NOT EXISTS participer (
	idRec SMALLINT NOT NULL,
	idIngr SMALLINT NOT NULL,
	FOREIGN KEY(idRec) REFERENCES recette(idRec),
	FOREIGN KEY(idIngr) REFERENCES ingredient(idIngr)
) ENGINE = InnoDB;

INSERT INTO mesure (idIngr, idRec) VALUES ( , );

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE IF NOT EXISTS etape (
  idEtap SMALLINT NOT NULL AUTO_INCREMENT,
  num TINYINT NOT NULL,
	detail TEXT COLLATE utf8_general_ci NOT NULL,
	idRec SMALLINT NOT NULL,
  PRIMARY KEY (idEtap),
	FOREIGN KEY (idRec) REFERENCES recette (idRec)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO etape (idEtap, num, detail, idRecette) VALUES (NULL, , '', );

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS user (
  idUser SMALLINT NOT NULL AUTO_INCREMENT,
  pseudo VARCHAR(40) COLLATE utf8_general_ci NOT NULL,
  pwd VARCHAR(100) COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (idUser)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Contenu de la table `user`
--

INSERT INTO user (idUser, pseudo, pwd) VALUES (NULL, '', '');
