/*Insert values*/
USE cyberharcelement;

INSERT INTO quiz(quiz_id, name) VALUES
(null, 'quiz_1');

INSERT INTO question(question_id, quiz_id, question) VALUES
(1, null, 'Qu''est ce que le cyber-harcèlement'),
(2, null, 'Comment repérer si on est victime d''harcelement'),
(3, null, 'Que faire quand on est cyber-harceler'),
(4, null, 'Quelles peuvent être les conséquences'),
(5, null, 'Comment faire pour ne pas le devenir'),
(6, null, 'Que dit la loi'),
(7, null, 'Vers qui se tourner pour en parler'),
(8, null, 'C''est quoi le 3018');

INSERT INTO answer(answer_id, question_id, answer, answer2, answer3) VALUES
(1, 1, 'A', 'B', 'C'),
(2, 2, 'A', 'B', 'C'),
(3, 3, 'A', 'B', 'C'),
(4, 4, 'A', 'B', 'C'),
(5, 5, 'A', 'B', 'C'),
(6, 6, 'A', 'B', 'C'),
(7, 7, 'A', 'B', 'C'),
(8, 8, 'A', 'B', 'C');
/*Insert data into column already create*/
UPDATE answer
SET goodAnswer = 
  CASE 
    WHEN answer_id = 1 THEN '0'
    WHEN answer_id = 2 THEN '1'
    WHEN answer_id = 3 THEN '0'

    WHEN answer_id = 4 THEN '0'
    WHEN answer_id = 5 THEN '0'
    WHEN answer_id = 6 THEN '1'

    WHEN answer_id = 7 THEN '0'
    WHEN answer_id = 8 THEN '1'
    WHEN answer_id = 9 THEN '0'

    WHEN answer_id = 10 THEN '1'
    WHEN answer_id = 11 THEN '0'
    WHEN answer_id = 12 THEN '0'

    WHEN answer_id = 13 THEN '0'
    WHEN answer_id = 14 THEN '0'
    WHEN answer_id = 15 THEN '1'

    WHEN answer_id = 16 THEN '1'
    WHEN answer_id = 17 THEN '0'
    WHEN answer_id = 18 THEN '0'

    WHEN answer_id = 19 THEN '0'
    WHEN answer_id = 20 THEN '1'
    WHEN answer_id = 21 THEN '0'

    WHEN answer_id = 22 THEN '0'
    WHEN answer_id = 23 THEN '0'
    WHEN answer_id = 24 THEN '1'
    ELSE goodAnswer 
  END;
  UPDATE answer
SET question_id = 
  CASE 
    WHEN answer_id = 1 THEN '1'
    WHEN answer_id = 2 THEN '1'
    WHEN answer_id = 3 THEN '1'

    WHEN answer_id = 4 THEN '2'
    WHEN answer_id = 5 THEN '2'
    WHEN answer_id = 6 THEN '2'

    WHEN answer_id = 7 THEN '3'
    WHEN answer_id = 8 THEN '3'
    WHEN answer_id = 9 THEN '3'

    WHEN answer_id = 10 THEN '4'
    WHEN answer_id = 11 THEN '4'
    WHEN answer_id = 12 THEN '4'

    WHEN answer_id = 13 THEN '5'
    WHEN answer_id = 14 THEN '5'
    WHEN answer_id = 15 THEN '5'

    WHEN answer_id = 16 THEN '6'
    WHEN answer_id = 17 THEN '6'
    WHEN answer_id = 18 THEN '6'

    WHEN answer_id = 19 THEN '7'
    WHEN answer_id = 20 THEN '7'
    WHEN answer_id = 21 THEN '7'

    WHEN answer_id = 22 THEN '8'
    WHEN answer_id = 23 THEN '8'
    WHEN answer_id = 24 THEN '8'
    ELSE goodAnswer 
  END;
  UPDATE answer
SET answer_id = 
  CASE 
    WHEN answer_id = 1 THEN '0'
    WHEN answer_id = 2 THEN '1'
    WHEN answer_id = 3 THEN '0'

    WHEN answer_id = 4 THEN '0'
    WHEN answer_id = 5 THEN '0'
    WHEN answer_id = 6 THEN '1'

    WHEN answer_id = 7 THEN '0'
    WHEN answer_id = 8 THEN '1'
    WHEN answer_id = 9 THEN '0'

    WHEN answer_id = 10 THEN '1'
    WHEN answer_id = 11 THEN '0'
    WHEN answer_id = 12 THEN '0'

    WHEN answer_id = 13 THEN '0'
    WHEN answer_id = 14 THEN '0'
    WHEN answer_id = 15 THEN '1'

    WHEN answer_id = 16 THEN '1'
    WHEN answer_id = 17 THEN '0'
    WHEN answer_id = 18 THEN '0'

    WHEN answer_id = 19 THEN '0'
    WHEN answer_id = 20 THEN '1'
    WHEN answer_id = 21 THEN '0'

    WHEN answer_id = 22 THEN '0'
    WHEN answer_id = 23 THEN '0'
    WHEN answer_id = 24 THEN '1'
    ELSE answer_id 
  END;
/*Delete column because it's a relationel DB, so I don't need it*/
ALTER TABLE answer
DROP COLUMN answer2, DROP COLUMN answer3;
/*Add data*/
INSERT INTO answer (answer_id) VALUES
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24);

/*Ajout données*/

-- Données pour la table `user`
INSERT INTO `user` (`user_id`, `name`, `password`, `email`, `city`, `zip`) VALUES
(1, 'John Doe', 'password1', 'john@example.com', 'Paris', '75000'),
(2, 'Jane Doe', 'password2', 'jane@example.com', 'Lyon', '69000');

-- Données pour la table `quiz`
INSERT INTO `quiz` (`quiz_id`, `name`) VALUES
(1, 'Cyber Security Quiz'),
(2, 'General Knowledge Quiz');

-- Données pour la table `question`
INSERT INTO `question` (`question_id`, `quiz_id`, `question`) VALUES
(1, 1, 'Qu''est ce que le cyber-harcèlement?'),
(2, 1, 'Comment repérer si on est victime d''harcelement?'),
(3, 1, 'Que faire quand on est cyber-harceler?'),
(4, 1, 'Quelles peuvent être les conséquences?'),
(5, 1, 'Comment faire pour ne pas le devenir?'),
(6, 1, 'Que dit la loi?'),
(7, 1, 'Vers qui se tourner pour en parler?'),
(8, 1, 'C''est quoi le 3018?');

-- Données pour la table `answer`
INSERT INTO `answer` (`answer_id`, `question_id`, `answer`, `goodAnswer`) VALUES
(1, 1, 'Le cyber-harcèlement est quand des personnes se rencontrent en ligne pour jouer ensemble.', FALSE),
(2, 1, 'Le cyber-harcèlement est lorsqu''on utilise Internet pour se faire de nouveaux amis.', FALSE),
(3, 1, 'Le cyber-harcèlement est l''utilisation abusive d''Internet pour intimider ou harceler quelqu''un.', TRUE),
(4, 2, 'Si on reçoit un cadeau surprise tous les jours.', FALSE),
(5, 2, 'Si on commence à aimer les légumes verts alors qu''on les détestait avant.', FALSE),
(6, 2, 'Si on remarque une augmentation des commentaires méchants ou des messages qui font peur en ligne.', TRUE),
(7, 3, 'Cacher son problème et essayer de le résoudre tout seul.', FALSE),
(8, 3, 'Parler à un adulte de confiance, comme un parent ou un enseignant, et leur demander de l''aide.', TRUE),
(9, 3, 'Arrêter d''utiliser Internet complètement.', FALSE),
(10, 4, 'Les conséquences du cyber-harcèlement peuvent inclure la tristesse, la peur, l''anxiété et se sentir seul', TRUE),
(11, 4, 'Devenir un génie en mathématiques du jour au lendemain.', FALSE),
(12, 4, 'Gagner un super pouvoir magique.', FALSE),
(13, 5, 'Manger une barre de chocolat tous les jours.', FALSE),
(14, 5, 'S''excuser dès qu''on fait une erreur.', FALSE),
(15, 5, 'Éviter de dire des choses méchantes en ligne et traiter les autres avec gentillesse et respect.', TRUE),
(16, 6, 'Des lois sur le cyber-harcèlement existent pour protéger les gens et punir ceux qui harcèlent les autres en ligne.', TRUE),
(17, 6, 'La loi dit qu''on peut faire tout ce qu''on veut en ligne sans conséquences.', FALSE),
(18, 6, 'La loi interdit de porter des chaussettes jaunes les jours de pluie.', FALSE),
(19, 7, 'Raconter tout à son animal de compagnie.', FALSE),
(20, 7, 'Parler à un adulte de confiance, comme un parent, un enseignant ou un conseiller d''école.', TRUE),
(21, 7, 'Parler à un ami imaginaire.', FALSE),
(22, 8, 'Le 3018 est un numéro de téléphone spécial pour appeler en cas de cyber-harcèlement et obtenir de l''aide.', TRUE),
(23, 8, 'Le 3018 est un code secret utilisé dans les jeux vidéo pour débloquer des bonus.', FALSE),
(24, 8, 'C''est une nouvelle marque de bonbon à la mode.', FALSE);

-- Données pour la table `quiz_user`
INSERT INTO `quiz_user` (`quizUser_id`, `user_id`, `quiz_id`) VALUES
(1, 1, 1),
(2, 2, 2);

-- Données pour la table `answer_user`
INSERT INTO `answer_user` (`answerUser_id`, `quizUser_id`, `question_id`, `answer_id`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 4),
(3, 1, 3, 7),
(4, 2, 4, 10),
(5, 2, 5, 15),
(6, 2, 6, 16);

-- Ajoute la valuer BOOL 1 à la ligne ou le nom est Jerome afin de définir qu'il est admin
UPDATE `user` SET `admin`='1' WHERE name = 'Jerome'; 
