DROP TABLE enquete;
DROP table utilisateurs;

CREATE TABLE utilisateurs (
    email VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

CREATE TABLE enquete (
    idEnquete INT PRIMARY KEY,
    emailAdherent VARCHAR(50),
    CONSTRAINT FK_ENQUETE FOREIGN KEY(emailAdherent) REFERENCES utilisateurs(email)
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