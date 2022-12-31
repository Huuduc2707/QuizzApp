-- reset db
DROP TABLE IF EXISTS play_attempt;
DROP TABLE IF EXISTS quiz_category;
DROP TABLE IF EXISTS rating;
DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS `option`;
DROP TABLE IF EXISTS question;
DROP TABLE IF EXISTS quiz;
DROP TABLE IF EXISTS player;
DROP TABLE IF EXISTS account;

-- create account table
CREATE TABLE IF NOT EXISTS account (
    id          INT         PRIMARY KEY     AUTO_INCREMENT,
    username    VARCHAR(50) NOT NULL,
    password    TEXT        NOT NULL,
    role        INT         DEFAULT 0
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- create player table
CREATE TABLE IF NOT EXISTS player (
    id   INT     NOT NULL,
    email       VARCHAR(100)    NOT NULL, 
    gender      INT         DEFAULT 1,
    dob         DATE        NOT NULL,
    natinality  VARCHAR(100)    NOT NULL,

    FOREIGN KEY (id) REFERENCES account (id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- create quiz table
CREATE TABLE IF NOT EXISTS quiz (
    id          INT         PRIMARY KEY     AUTO_INCREMENT,
    name        VARCHAR(100)    NOT NULL,
    description TEXT        DEFAULT NULL,
    lastModified    DATETIME    DEFAULT CURRENT_TIMESTAMP,
    dateCreate      DATE,
    creatorId   INT     NOT NULL,

    FOREIGN KEY (`creatorId`) REFERENCES `player` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- create trigger to insert current date to dateCreate field 
DROP TRIGGER IF EXISTS quizCreatedAtDate;

CREATE TRIGGER quizCreatedAtDate BEFORE INSERT ON `quiz`
FOR EACH ROW SET NEW.dateCreate = CURRENT_DATE;

-- create question table
CREATE TABLE IF NOT EXISTS question (
    id          INT     NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content     VARCHAR(200)    NOT NULL,
    point       INT     DEFAULT 10,
    timeLimit   INT     DEFAULT 10,
    media       TEXT    DEFAULT NULL,
    quizId      INT     NOT NULL,

    -- PRIMARY KEY (id, quizId),
    FOREIGN KEY (`quizId`) REFERENCES `quiz` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- create option table
CREATE TABLE IF NOT EXISTS `option` (
    id          INT     NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content     VARCHAR(125)     NOT NULL,
    isAnswer    INT     DEFAULT 0,
    questionId  INT     NOT NULL,

    -- PRIMARY KEY (id, questionId),
    FOREIGN KEY (questionId) REFERENCES question (id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- create quiz_category table
CREATE TABLE IF NOT EXISTS quiz_category (
    quizId      INT     NOT NULL,
    category    VARCHAR(30)     NOT NULL,

    PRIMARY KEY (quizId, category),
    FOREIGN KEY (quizId) REFERENCES quiz (id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- create comment table
CREATE TABLE IF NOT EXISTS comment (
    id      INT     PRIMARY KEY     AUTO_INCREMENT,
    content     TEXT    NOT NULL,
    commentDateTime     DATETIME    DEFAULT CURRENT_TIMESTAMP,
    playerId    INT     NOT NULL,
    quizId      INT     NOT NULL,

    FOREIGN KEY (playerId) REFERENCES player (id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (quizId) REFERENCES quiz (id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- create rating table
CREATE TABLE IF NOT EXISTS rating (
    playerId    INT     NOT NULL,
    quizId      INT     NOT NULL,
    rating      INT     NOT NULL,
    ratingDateTime  DATETIME    DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (playerId, quizId),
    FOREIGN KEY (playerId) REFERENCES player (id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (quizId) REFERENCES quiz (id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- create rating table
CREATE TABLE IF NOT EXISTS play_attempt (
    id      INT     NOT NULL,
    playerId    INT     NOT NULL,
    quizId      INT     NOT NULL,
    playDateTime    DATETIME    DEFAULT CURRENT_TIMESTAMP,
    score       INT     NOT NULL,

    PRIMARY KEY (id, playerId, quizId),
    FOREIGN KEY (playerId) REFERENCES player (id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (quizId) REFERENCES quiz (id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- create trigger to generate of play_attempt
DROP TRIGGER IF EXISTS generateIdOfPlayAttempt;

CREATE TRIGGER `generateIdOfPlayAttempt` 
BEFORE INSERT ON `play_attempt` 
FOR EACH ROW 
BEGIN 
    IF (SELECT COUNT(*) FROM (SELECT P.* FROM play_attempt P WHERE P.playerId = NEW.playerId AND P.quizId = NEW.quizId) AS T) = 0 
    THEN SET NEW.id = 1; 
    ELSE SET NEW.id = (SELECT MAX(P.id) + 1 FROM play_attempt P WHERE P.playerId = NEW.playerId AND P.quizId = NEW.quizId); 
    END IF; 
END

-- procedure to update quiz's lastModified field
DROP PROCEDURE IF EXISTS updateQuizLastModified;

-- CREATE PROCEDURE updateQuizLastModified(IN quizId INT)
--     UPDATE quiz SET lastModified = CURRENT_TIMESTAMP WHERE id = quizId;


