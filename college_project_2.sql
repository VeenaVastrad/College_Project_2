CREATE DATABASE `college_project2`;

CREATE TABLE `subject_class` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
 PRIMARY KEY (class_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `custom_id` varchar(100) NOT NULL,
  `student_full_name` varchar(255) NOT NULL,
  `class_id` int,
 PRIMARY KEY (student_id),
 FOREIGN KEY (class_id) REFERENCES standard(class_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `custom_id` varchar(100) NOT NULL,
  `teacher_full_name` varchar(255) NOT NULL,
  `teaching_subject` varchar(255) NOT NULL,
 PRIMARY KEY (teacher_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `standard` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `standard` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
 PRIMARY KEY (class_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `meetings` (
  `meetings_id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_type` varchar(255) NOT NULL,
  `meeting_link` varchar(255) NOT NULL,
  `meeting_room` varchar(255) NOT NULL,
 PRIMARY KEY (meetings_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `subject_class_teacher_relation` (
  `sub_cls_teacher_rel_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` int,
  `class_id` int,
 PRIMARY KEY (sub_cls_teacher_rel_id),
 FOREIGN KEY (teacher_id)REFERENCES teacher(teacher_id),
 FOREIGN KEY (class_id)REFERENCES subject_class(class_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `subject_class_student_relation` (
  `sub_cls_student_rel_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int,
  `class_id` int,
 PRIMARY KEY (sub_cls_student_rel_id),
 FOREIGN KEY (student_id)REFERENCES student(student_id),
 FOREIGN KEY (class_id)REFERENCES subject_class(class_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*CREATE TABLE `subject_class_meeting` (
  `sub_cls_meeting_id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_id` int,
  `class_id` int,
 PRIMARY KEY (subject_class_rel_id),
 (FOREIGN KEY (student_id)REFERENCES student(student_id),
 (FOREIGN KEY (class_id)REFERENCES subject_class(class_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;*/

CREATE TABLE `student_class_relation` (
  `student_class_rel_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int,
  `class_id` int,
 PRIMARY KEY (student_class_rel_id),
 FOREIGN KEY (student_id)REFERENCES student(student_id),
 FOREIGN KEY (class_id)REFERENCES subject_class(class_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;










