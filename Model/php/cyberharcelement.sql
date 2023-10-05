/*Create db*/
CREATE DATABASE IF NOT EXISTS cyberharcelement;

USE cyberharcelement;
/*Create tables*/
CREATE TABLE IF NOT EXISTS user (
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    city VARCHAR (50) NOT NULL,
    zip CHAR(5) NOT NULL
);
CREATE TABLE IF NOT EXISTS quiz (
    quiz_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS question (
    question_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    quiz_id INT,
    question TEXT NOT NULL,
    FOREIGN KEY (quiz_id) REFERENCES quiz(quiz_id)
);

CREATE TABLE IF NOT EXISTS answer (
    answer_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    question_id INT,
    answer TEXT NOT NULL,
    FOREIGN KEY (question_id) REFERENCES question (question_id)
);
/*Add column*/
ALTER TABLE answer
    ADD answer2 TEXT NOT NULL,
        ADD answer3 TEXT NOT NULL,
            ADD goodAnswer TEXT NOT NULL;

CREATE TABLE IF NOT EXISTS quiz_user (
    quizUser_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    quiz_id INT,
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (quiz_id) REFERENCES quiz(quiz_id)
);

CREATE TABLE IF NOT EXISTS answer_user (
    answerUser_id INT PRIMARY KEY AUTO_INCREMENT,
    quizUser_id INT,
    question_id INT,
    answer_id INT,
    FOREIGN KEY (quizUser_id) REFERENCES quiz_user(quizUser_id),
    FOREIGN KEY (question_id) REFERENCES question(question_id),
    FOREIGN KEY (answer_id) REFERENCES answer(answer_id)
);

