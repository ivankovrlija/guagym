select *
from appointment;

INSERT INTO appointment (appointments_time)
VALUES ('18:00-20:00');

select * 
from user;

INSERT INTO gender (gender)
VALUES ('female');

INSERT INTO days (days)
VALUES ('Sunday');

INSERT INTO user (name,lastname,username,email,password,last_log,id_gender)
VALUES ('admin','admin','admin','kovrlijaivan@gmail.com','admin',CURRENT_TIMESTAMP(),1);