-- a3ab69363b4c84cc276e0c3dcc8a4172e66b50ee9c3c5afff530f46796375789

CREATE TABLE hw_user (
	user_id		SERIAL NOT NULL PRIMARY KEY,
	username	varchar(80) NOT NULL unique,
	password	varchar(80) NOT NULL
);

CREATE TABLE hw (
	hw_id		SERIAL NOT NULL PRIMARY KEY,
    data        Date NOT NULL,
	hw_name		varchar(80) NOT NULL,
	class_code	varchar(80) NOT NULL,
    due_date    Date NOT NULL
);

CREATE TABLE to_do (
	list_id		SERIAL NOT NULL PRIMARY KEY,
	list_text	varchar(80) NOT NULL,
	due_date	Date NOT NULL,
    data        Date NOT NULL
);

CREATE TABLE calendar (
	cal_id		SERIAL NOT NULL PRIMARY KEY,
	hw_id		SERIAL NOT NULL REFERENCES hw(hw_id),
	list_id		SERIAL NOT NULL REFERENCES to_do(list_id),
	user_id		SERIAL NOT NULL REFERENCES hw_user(user_id)
);

INSERT INTO hw_user VALUES (1, 'username', 'password123');
INSERT INTO hw VALUES (1, '2019-05-18', 'Database Setup', 'CIT 313', '2019-05-21');
INSERT INTO to_do VALUES (1, 'Clean apartment', '2019-05-21', '2019-05-15');

DROP TABLE hw_user;
DROP TABLE hw;
DROP TABLE to_do;
DROP TABLE calendar;

SELECT * FROM hw;
SELECT * FROM hw_user;
SELECT * FROM to_do;

