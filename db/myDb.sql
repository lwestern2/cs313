-- a3ab69363b4c84cc276e0c3dcc8a4172e66b50ee9c3c5afff530f46796375789

CREATE TABLE hw_user (
	user_id		SERIAL NOT NULL PRIMARY KEY,
	username	varchar(80) NOT NULL unique,
	password	varchar(80) NOT NULL
);

CREATE TABLE hw (
	hw_id		SERIAL NOT NULL PRIMARY KEY,
    date_add    Date NOT NULL,
	hw_name		varchar(80) NOT NULL,
	hw_text		varchar(80) NOT NULL,
	class_code	varchar(80) NOT NULL,
    due_date    Date NOT NULL
);

CREATE TABLE to_do (
	list_id		SERIAL NOT NULL PRIMARY KEY,
	list		varchar(80) NOT NULL,
	list_text	varchar(80) NOT NULL,
	date_done	Date NOT NULL,
    date_add    Date NOT NULL
);

CREATE TABLE calendar (
	cal_id		SERIAL NOT NULL PRIMARY KEY,
	hw_id		SERIAL NOT NULL REFERENCES hw(hw_id),
	list_id		SERIAL NOT NULL REFERENCES to_do(list_id),
	user_id		SERIAL NOT NULL REFERENCES hw_user(user_id)
);

INSERT INTO hw_user (username, password) VALUES ('username', 'password123');
INSERT INTO hw (date_add, hw_name, hw_text, class_code, due_date) VALUES ('2019-05-18', 'Database Setup', 'Assignment instructions', 'CIT 313', '2019-05-21');
INSERT INTO hw (date_add, hw_name, hw_text, class_code, due_date) VALUES ('2019-05-25', 'Persuasive Essay', 'Assignment instructions', 'CIT 230', '2019-05-28');
INSERT INTO hw (date_add, hw_name, hw_text, class_code, due_date) VALUES ('2019-05-30', 'Project 1', 'Assignment instructions', 'CIT 366', '2019-06-03');
INSERT INTO to_do (list, list_text, date_done, date_add) VALUES ('Clean apartment', 'Do dishes, vaccum, dust', '2019-05-21', '2019-05-15');
INSERT INTO to_do (list, list_text, date_done, date_add) VALUES ('Get car washed', '', '2019-05-31', '2019-05-25');
INSERT INTO to_do (list, list_text, date_done, date_add) VALUES ('Got to the store', 'Eggs, Milk (2), bread, strawberries', '2019-06-3', '2019-05-28');


DROP TABLE hw_user;25
DROP TABLE hw;
DROP TABLE to_do;
DROP TABLE calendar;

SELECT * FROM hw;
SELECT * FROM hw_user;
SELECT * FROM to_do;

