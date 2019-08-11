CREATE TABLE sua.student_course_score_info (
	id INT(11) NOT NULL AUTO_INCREMENT,
	user_id TEXT NOT NULL,
	course_name TEXT NOT NULL,
	english_course_name TEXT NOT NULL,
	course_number varchar(100) NOT NULL,
	course_sequence_number varchar(100) NOT NULL,
	executive_education_plan_name varchar(100) NOT NULL,
	executive_education_plan_number varchar(100) NOT NULL,
	credit DOUBLE NOT NULL,
	course_score DOUBLE NOT NULL,
	grade_point DOUBLE NOT NULL,
	level_code INT(11) not null,
	level_name varchar(100) NOT NULL,
	course_teacher_list TEXT NOT NULL,
	study_hour DOUBLE NOT NULL,
	exam_time varchar(100) NOT NULL,
	exam_type_name varchar(100) NOT NULL,
	unpassed_reason_explain TEXT NOT null,
	PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci
