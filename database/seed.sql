USE touche_pas_au_klaxon;

-- AGENCES

INSERT INTO agence (ville) VALUES
('Paris'),
('Lyon'),
('Marseille'),
('Toulouse'),
('Nice'),
('Nantes'),
('Strasbourg'),
('Montpellier'),
('Bordeaux'),
('Lille'),
('Rennes'),
('Reims');

-- UTILISATEURS

INSERT INTO users (role, nom, prenom, telephone, email, mot_de_passe) VALUES
('user', 'Martin', 'Alexandre', '0612345678', 'alexandre.martin@email.fr', ''),
('user', 'Dubois', 'Sophie', '0698765432', 'sophie.dubois@email.fr', ''),
('user', 'Bernard', 'Julien', '0622446688', 'julien.bernard@email.fr', ''),
('user', 'Moreau', 'Camille', '0611223344', 'camille.moreau@email.fr', ''),
('user', 'Lefèvre', 'Lucie', '0777889900', 'lucie.lefevre@email.fr', ''),
('user', 'Leroy', 'Thomas', '0655443322', 'thomas.leroy@email.fr', ''),
('user', 'Roux', 'Chloé', '0633221199', 'chloe.roux@email.fr', ''),
('user', 'Petit', 'Maxime', '0766778899', 'maxime.petit@email.fr', ''),
('user', 'Garnier', 'Laura', '0688776655', 'laura.garnier@email.fr', ''),
('user', 'Dupuis', 'Antoine', '0744556677', 'antoine.dupuis@email.fr', ''),
('user', 'Lefebvre', 'Emma', '0699887766', 'emma.lefebvre@email.fr', ''),
('user', 'Fontaine', 'Louis', '0655667788', 'louis.fontaine@email.fr', ''),
('user', 'Chevalier', 'Clara', '0788990011', 'clara.chevalier@email.fr', ''),
('user', 'Robin', 'Nicolas', '0644332211', 'nicolas.robin@email.fr', ''),
('user', 'Gauthier', 'Marine', '0677889922', 'marine.gauthier@email.fr', ''),
('user', 'Fournier', 'Pierre', '0722334455', 'pierre.fournier@email.fr', ''),
('user', 'Girard', 'Sarah', '0688665544', 'sarah.girard@email.fr', ''),
('user', 'Lambert', 'Hugo', '0611223366', 'hugo.lambert@email.fr', ''),
('user', 'Masson', 'Julie', '0733445566', 'julie.masson@email.fr', ''),
('user', 'Henry', 'Arthur', '0666554433', 'arthur.henry@email.fr', '');


-- TRAJETS TEST

INSERT INTO trajet (
    date_depart,
    date_arrivee,
    places_total,
    places_dispo,
    id_user,
    id_agence_depart,
    id_agence_arrivee
) VALUES(
    '2030-09-01 08:00:00',
    '2030-09-01 12:00:00',
    4,
    3,
    1,
    1,
    2
),
(
    '2030-09-01 14:00:00',
    '2030-09-01 18:00:00',
    3,
    2,
    2,
    3,
    4
),
(
    '2030-09-02 09:00:00',
    '2030-09-02 11:00:00',
    5,
    5,
    3,
    2,
    5
),
(
    '2030-09-03 10:00:00',
    '2030-09-03 14:00:00',
    4,
    0,
    4,
    5,
    6
),
(
    '2020-01-01 08:00:00',
    '2020-01-01 12:00:00',
    4,
    2,
    5,
    7,
    8
);