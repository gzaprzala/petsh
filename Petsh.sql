CREATE TABLE IF NOT EXISTS users (
      id serial
      constraint users_pk primary key,
      username varchar(64) not null,
      password varchar(64) not null
);

CREATE TABLE IF NOT EXISTS users_photos (
    id serial
    constraint users_photos_pk primary key,
    user_id integer not null
    constraint user_id_photo references users(id),
    photo varchar(256) default 'default.jpg'
);

CREATE TABLE IF NOT EXISTS users_details (
	id serial
	constraint users_details_pk primary key,
	user_id integer not null
	constraint user_id_detail references users(id),
	name varchar(64) default 'Name',
	age int default 0,
	city varchar(64) default 'City',
	likes int default 0,
	dislikes int default 0,
	is_admin int default 0
);

CREATE TABLE IF NOT EXISTS animals_photos (
    id serial
    constraint animals_photos_pk primary key,
    user_id integer not null
    constraint user_id_photo references users(id),
    animal_photo varchar(256) default 'default-animal.jpg'
);

CREATE TABLE IF NOT EXISTS animals_details (
	id serial
	constraint animals_details_pk primary key,
	user_id integer not null
	constraint user_id_detail references users(id),
	animal_name varchar(64) default 'Name',
	animal_age int default 0
);

CREATE TABLE IF NOT EXISTS users_messages (
	id serial
	constraint users_messages_pk primary key,
	message_content varchar(256),
	sender_id integer,
	receiver_id integer
);

CREATE VIEW admin_view AS
SELECT users.id, users.username, users_details.name, users_details.age, users_details.city
FROM users
JOIN users_details ON users.id = users_details.user_id;

INSERT INTO public.users (id, username, password) 
VALUES (33, 'test1', '5a105e8b9d40e1329780d62ea2265d8a');
-- haslo to test1

INSERT INTO public.users (id, username, password) 
VALUES (66, 'test2', 'ad0234829205b9033196ba818f7a872b');
-- haslo to test2

INSERT INTO public.users (id, username, password) 
VALUES (99, 'admin', '21232f297a57a5a743894a0e4a801fc3');
-- haslo to admin

INSERT INTO public.users_details (id, user_id, name, age, city, likes, dislikes, is_admin)
VALUES (33, 33, 'Grzegorz', 22, 'Krakow', 223, 23, 0);

INSERT INTO public.users_details (id, user_id, name, age, city, likes, dislikes, is_admin)
VALUES (66, 66, 'Mateusz', 29, 'Warszawa', 35, 15, 0);

INSERT INTO public.users_details (id, user_id, name, age, city, likes, dislikes, is_admin)
VALUES (99, 99, 'Marek', 44, 'Lublin', 333, 0, 1);

INSERT INTO public.users_photos(id, user_id, photo)
VALUES (33, 33, 'person-1.jpg');

INSERT INTO public.users_photos(id, user_id, photo)
VALUES (66, 66, 'person-2.jpg');

INSERT INTO public.users_photos(id, user_id, photo)
VALUES (99, 99, 'person-3.jpg');

INSERT INTO public.animals_details (id, user_id, animal_name, animal_age)
VALUES (33, 33, 'Nero', 10);

INSERT INTO public.animals_details (id, user_id, animal_name, animal_age)
VALUES (66, 66, 'Aro', 15);

INSERT INTO public.animals_details (id, user_id, animal_name, animal_age)
VALUES (99, 99, 'Wojtek', 8);

INSERT INTO public.animals_photos (id, user_id, animal_photo)
VALUES (33, 33, 'animal-1.jpg');

INSERT INTO public.animals_photos (id, user_id, animal_photo)
VALUES (66, 66, 'animal-2.jpg');

INSERT INTO public.animals_photos (id, user_id, animal_photo)
VALUES (99, 99, 'animal-3.jpg');