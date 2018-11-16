drop table if exists seekers;

create table seekers (
	seeker_id serial,
	first_name varchar (255),
	last_name varchar (255),
	status varchar (20)
);

grant select, insert, update, delete on seekers to education;
GRANT USAGE, SELECT ON SEQUENCE seekers_seeker_id_seq TO education;