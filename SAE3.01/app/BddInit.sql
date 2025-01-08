DROP TABLE enquete;
DROP table utilisateurs;

CREATE TABLE utilisateurs (
    email VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE enquete (
    idEnquete INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    age INT NOT NULL,
    region VARCHAR(100) NOT NULL,
    lieuDeVie VARCHAR(100),
    situation VARCHAR(100) NOT NULL,
    CONSTRAINT FK_ENQUETE FOREIGN KEY(email) REFERENCES utilisateurs(email)
);

INSERT INTO utilisateurs (email, nom, prenom, password) VALUES
('admin@soshepatites.org', 'Admin', '', 'admin123'),
('ali-shan@203.fr', 'KASSOU MAMODE', 'Ali-Shan', 'ali-shan203'),
('sathush@203.fr', 'SEBAMALAI', 'Sathush', 'sathush203'),
('jordan@203.fr', 'MVOTIO', 'Jordan', 'jordan203'),
('reginald@203.fr', 'SAINT AUBIN', 'Reginald', 'reginald123'),
('souleymane@203.fr', 'HADJ MESSAOUD', 'Souleymane', 'souleymane203'),
('florian@203.fr', 'KOP', 'Florian', 'florian203'),
('anthony@203.fr', 'IEM', 'Anthony', 'anthony203'),
('emile@203.fr', 'ROSSI', 'Emile', 'emile203'),
('shihong@203.fr', 'WANG', 'Shihong', 'shihong203'),
('rayane@203.fr', 'BOUKHEMAL', 'Rayane', 'rayane203'),
('faiza@203.fr', 'GUEBLI', 'Faiza', 'faiza203'),
('nathan@203.fr', 'MACIEL--LAVERGNE', 'Nathan', 'nathan203'),
('elea@203.fr', 'REN', 'Eléa', 'elea203'),
('kenza@204.fr', 'BRAHIMI', 'Kenza', 'kenza204'),
('lucas@204.fr', 'REVAULT', 'Lucas', 'lucas204'),
('ayoub@204.fr', 'BUHALLUT', 'Ayoub', 'ayoub204'),
('imad-eddine@204.fr', 'BAHIJ', 'Imad-Eddine', 'imad-eddine204'),
('aimeric@204.fr', 'LOUYS', 'Aimeric', 'aimeric204'),
('victor@204.fr', 'DUCHENE', 'Victor', 'victor204'),
('elsa@204.fr', 'FERRY', 'Elsa', 'elsa204'),
('amine@204.fr', 'KHABBAZ', 'Amine', 'amine204'),
('mohamed-amine@204.fr', 'ABDELJEBBAR', 'Mohamed Amine', 'mohamed-amine204'),
('jade@204.fr', 'RONSIN', 'Jade', 'jade204'),
('willien@204.fr', 'HU', 'Willien', 'willien204');

INSERT INTO enquete (email, age, region, lieuDeVie, situation) VALUES
('ali-shan@203.fr', 25, 'Île-de-France', 'Dans un logement indépendant', 'Activité professionnelle en milieu ordinaire'),
('sathush@203.fr', 30, 'Auvergne-Rhône-Alpes', 'Dans la famille en permanence', 'Sans activité scolaire ou professionnelle'),
('jordan@203.fr', 22, 'Normandie', 'Dans un foyer d\'accueil médicalisé (FAM)', 'Scolarité en dispositif spécialisé de l\'Éducation Nationale'),
('reginald@203.fr', 35, 'Provence-Alpes-Côte d\'Azur', 'Dans un habitat inclusif', 'Formation professionnelle'),
('souleymane@203.fr', 28, 'Occitanie', 'Dans un logement indépendant', 'Activité professionnelle en milieu protégé (ESAT, Entreprise adaptée)'),
('florian@203.fr', 19, 'Bretagne', 'Dans la famille avec une solution d\'accueil ou des activités en journée', 'Études supérieures'),
('anthony@203.fr', 40, 'Grand Est', 'Dans un foyer de vie ou foyer d\'hébergement', 'Activité professionnelle en milieu protégé (ESAT, Entreprise adaptée)'),
('emile@203.fr', 45, 'Centre-Val de Loire', 'Dans une maison d\'accueil spécialisée (MAS)', 'Sans activité scolaire ou professionnelle'),
('shihong@203.fr', 20, 'Hauts-de-France', 'Dans un logement indépendant', 'Scolarité en milieu ordinaire'),
('rayane@203.fr', 18, 'Île-de-France', 'Dans un logement indépendant', 'Scolarité en milieu ordinaire'),
('faiza@203.fr', 50, 'Nouvelle-Aquitaine', 'Hospitalisation en psychiatrie', 'Sans activité scolaire ou professionnelle'),
('nathan@203.fr', 26, 'Pays de la Loire', 'Dans un foyer d\'accueil médicalisé (FAM)', 'Formation professionnelle'),
('elea@203.fr', 29, 'Bourgogne-Franche-Comté', 'Dans la famille principalement mais avec un accueil temporaire ou séquentiel en établissement', 'Activité professionnelle en milieu ordinaire'),
('kenza@204.fr', 32, 'Île-de-France', 'Dans un logement indépendant', 'Études supérieures'),
('lucas@204.fr', 24, 'Normandie', 'Dans un habitat inclusif', 'Activité professionnelle en milieu protégé (ESAT, Entreprise adaptée)'),
('ayoub@204.fr', 27, 'Provence-Alpes-Côte d\'Azur', 'Dans un logement indépendant', 'Scolarité en dispositif spécialisé de l\'Éducation Nationale'),
('imad-eddine@204.fr', 23, 'Île-de-France', 'Dans la famille avec une solution d\'accueil ou des activités en journée', 'Études supérieures'),
('aimeric@204.fr', 33, 'Occitanie', 'Dans un logement indépendant', 'Activité professionnelle en milieu ordinaire'),
('victor@204.fr', 36, 'Île-de-France', 'Dans un logement indépendant', 'Études supérieures'),
('elsa@204.fr', 21, 'Grand Est', 'Dans un foyer de vie ou foyer d\'hébergement', 'Scolarité dans un établissement médico-social (IME, IMPRO, ...)'),
('amine@204.fr', 28, 'Bretagne', 'Dans un logement indépendant', 'Instruction en famille'),
('mohamed-amine@204.fr', 31, 'Auvergne-Rhône-Alpes', 'Dans un habitat inclusif', 'Activité professionnelle en milieu ordinaire'),
('jade@204.fr', 19, 'Normandie', 'Dans la famille principalement mais avec un accueil temporaire ou séquentiel en établissement', 'Formation professionnelle'),
('willien@204.fr', 37, 'Centre-Val de Loire', 'Dans une maison d\'accueil spécialisée (MAS)', 'Sans activité scolaire ou professionnelle');
