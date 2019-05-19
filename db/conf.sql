-- 6613fbb213fe196a1f1c7d70b24d9a800b185f8996da01ac94bf19ffd74bcfe3

CREATE TABLE confUser (
	user_id		int NOT NULL PRIMARY KEY,
	username	varchar(80) NOT NULL unique,
	password	varchar(80) NOT NULL
);

CREATE TABLE talk (
	talk_id		int NOT NULL PRIMARY KEY,
	title		varchar(80) NOT NULL,
	speaker		varchar(80) NOT NULL
);

CREATE TABLE conf (
	conf_id		int NOT NULL PRIMARY KEY,
	year		varchar(80) NOT NULL,
	month		varchar(80) NOT NULL
);

CREATE TABLE notes (
	note_id		int NOT NULL PRIMARY KEY,
	title		varchar(80) NOT NULL,
	text		text NOT NULL,
	user_id		int NOT NULL REFERENCES confUser(user_id),
	talk_id		int NOT NULL REFERENCES talk(talk_id),
	conf_id		int NOT NULL REFERENCES conf(conf_id)
);

INSERT INTO confuser VALUES (1, 'username', 'password123');
INSERT INTO talk VALUES (1, 'HOPE', 'Bro. Thayne');
INSERT INTO conf VALUES (1, '2019', 'April');

INSERT INTO notes VALUES (1, 'Hope', 'I like this!', 1, 1, 1);

DROP TABLE confUser;
DROP TABLE notes;
DROP TABLE talk;
DROP TABLE conf;

SELECT * FROM notes;
