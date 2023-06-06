
DROP TABLE Exam;
DROP TABLE Modules;
DROP TABLE Semesters;
DROP TABLE Payment;
DROP TABLE Courses;
DROP TABLE Students;
DROP TABLE Admin;

CREATE TABLE Admin(
	Student_ID		NUMBER(10)	NOT NULL,
	Student_Email		VARCHAR(25)	NOT NULL,
	PRIMARY KEY(Student_ID, Student_Email)
);

CREATE TABLE Students(
	S_ID		NUMBER(10)	NOT NULL,
	S_Email		VARCHAR(25)	NOT NULL,
	S_Name		VARCHAR(15),
	S_Phone		VARCHAR(15),
	S_gender	VARCHAR(6),
	S_Institution	VARCHAR(10),
	FOREIGN KEY (S_ID, S_Email) REFERENCES Admin (Student_ID, Student_Email)	ON DELETE CASCADE
);

CREATE TABLE Courses(
	St_ID		NUMBER(10)	NOT NULL,
	St_Email	VARCHAR(25)	NOT NULL,
	Course_ID	VARCHAR(10)	NOT NULL,
	Course_Name	VARCHAR(25)	NOT NULL,
	Course_Fee	NUMBER(6)	,
	Crs_Date	DATE,
	PRIMARY KEY (Course_ID, Course_Name),
	FOREIGN KEY (St_ID, St_Email) REFERENCES Admin (Student_ID, Student_Email)	ON DELETE CASCADE
);

CREATE TABLE Payment(
	Std_ID		NUMBER(10)	NOT NULL,
	Std_Email	VARCHAR(25)	NOT NULL,
	Cors_ID		VARCHAR(10)	NOT NULL,
	Cors_Fee	NUMBER(6),
	Cors_Name	VARCHAR(25)	NOT NULL,
	Pay_ID		NUMBER(7)	NOT NULL,
	Pay_Date	DATE,
	PRIMARY KEY (Pay_ID),
	FOREIGN KEY (Std_ID, Std_Email) REFERENCES Admin (Student_ID, Student_Email)	ON DELETE CASCADE,
	FOREIGN KEY (Cors_ID, Cors_Name) REFERENCES Courses (Course_ID, Course_Name)	ON DELETE CASCADE
);

CREATE TABLE Semesters(
	Stud_ID		NUMBER(10)	NOT NULL,
	Stud_Email	VARCHAR(25)	NOT NULL,
	Corse_ID	VARCHAR(10)	NOT NULL,
	Corse_Name	VARCHAR(25)	NOT NULL,
	Sem_No		VARCHAR(10)	NOT NULL,
	Sem_Name	VARCHAR(30),
	Sem_Duration	VARCHAR(10),
	FOREIGN KEY (Stud_ID, Stud_Email) REFERENCES Admin (Student_ID, Student_Email)	ON DELETE CASCADE,
	FOREIGN KEY (Corse_ID, Corse_Name) REFERENCES Courses (Course_ID, Course_Name)	ON DELETE CASCADE
);

CREATE TABLE Modules(
	Stdent_ID	NUMBER(10)	NOT NULL,
	Stdent_Email	VARCHAR(25)	NOT NULL,
	Crse_ID		VARCHAR(10)	NOT NULL,
	Crse_Name	VARCHAR(25)	NOT NULL,
	Semstr_No	VARCHAR(10)	NOT NULL,	
	Mod_No		VARCHAR(10),
	Mod_Name	VARCHAR(30),
	FOREIGN KEY(Stdent_ID, Stdent_Email) REFERENCES Admin (Student_ID, Student_Email)	ON DELETE CASCADE,
	FOREIGN KEY(Crse_ID, Crse_Name) REFERENCES Courses (Course_ID, Course_Name)	ON DELETE CASCADE
);

CREATE TABLE Exam(
	Stdntt_ID	NUMBER(10)	NOT NULL,
	Stdntt_Email	VARCHAR(25)	NOT NULL,
	Crsee_ID	VARCHAR(10)	NOT NULL,
	Crsee_Name	VARCHAR(25),
	Semstrr_No	VARCHAR(10)	NOT NULL,
	S_Mark		NUMBER(4)	NOT NULL,
	Pass_Mark	integer ,
	Status		VARCHAR(10),
	PRIMARY KEY (Stdntt_ID, Stdntt_Email),
	FOREIGN KEY (Stdntt_ID, Stdntt_Email) REFERENCES Admin (Student_ID, Student_Email)	ON DELETE CASCADE,
	FOREIGN KEY(Crsee_ID, Crsee_Name) REFERENCES Courses (Course_ID, Course_Name)	ON DELETE CASCADE
);

commit;
/