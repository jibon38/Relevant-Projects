
-- Some Normal Operations

SELECT S_ID, S_Email, S_Institution from Students WHERE S_Institution LIKE '%KUET%';
SELECT St_ID, Course_ID, Course_Name, Course_Fee FROM Courses ORDER BY Course_Fee ASC;
SELECT Std_ID, Cors_ID, Cors_Fee, Pay_ID, Pay_Date FROM Payment ORDER BY Cors_Fee ASC;

SELECT Stud_ID, Corse_ID, Sem_No, Sem_Name, Sem_Duration FROM Semesters WHERE Corse_ID LIKE '%CCNA%';
SELECT Stud_ID, Corse_ID, Sem_No, Sem_Name, Sem_Duration FROM Semesters WHERE Corse_ID LIKE '%CCNP%';
SELECT Stud_ID, Corse_ID, Sem_No, Sem_Name, Sem_Duration FROM Semesters WHERE Corse_ID LIKE '%CCIE%';

SELECT Stdent_ID, Crse_ID, Semstr_No, Mod_No, Mod_Name FROM Modules WHERE Mod_No LIKE '%Module-1%' OR Mod_No LIKE '%Module-3%' OR Mod_No LIKE '%Module-5%';  

SELECT Stdntt_ID, Stdntt_Email, Crsee_ID, Crsee_Name, Semstrr_No, Status FROM Exam WHERE Status LIKE 'Fail';

-- Students whose course fee is >= 25000 in descending order.
SELECT S_ID, S_Email, Course_Name, Course_Fee FROM Students S JOIN Courses C ON S.S_ID = C.St_ID AND C.Course_Fee >= 25000 ORDER BY Course_Fee DESC;

-- Students whose course id CCNA and Payment month is February.
SELECT St_ID, St_Email, Cors_ID, Pay_Date AS Pay_Month FROM Courses C JOIN Payment P ON
C.St_ID = P.Std_ID AND P.Cors_ID = 'CCNA' AND P.Pay_Date LIKE '%FEB%';

-- Students with Semester Completed.
SELECT S_ID, S_Email, Crsee_ID as Course_ID, Semstrr_No as Sem_No, Status AS Sem_Completed FROM Students S JOIN Exam E ON
S.S_ID = E.Stdntt_ID AND E.Status LIKE '%Pass%';



-- PL/SQL Block: Discount Prices over CCNA Courses

SET SERVEROUTPUT ON
DECLARE
	originalPrice 	Payment.Cors_Fee%type;
	postDiscount 	number(6);
	discount 	number(6);
	Crs_Id		VARCHAR(6):= 'CCIE';
	Std_ID		Payment.Std_ID%type;
BEGIN
	SELECT Std_ID, Cors_ID, Cors_Fee INTO Std_ID, Crs_ID, originalPrice FROM Payment WHERE Cors_ID LIKE Crs_ID;
	
	IF originalPrice <= 20000 THEN
		discount := originalPrice;
		postDiscount := originalPrice;

	ELSIF originalPrice > 20000 AND originalPrice <= 25000 THEN
		discount := originalPrice*0.5;
		postDiscount := originalPrice - (originalPrice*0.5); 

	ELSIF originalPrice >25000 AND  originalPrice <= 30000 THEN
		discount := originalPrice*0.20;
		postDiscount := originalPrice - (originalPrice*0.20);
	ELSE
		discount := originalPrice*0.30;
		postDiscount := originalPrice - (originalPrice*0.30);
	END IF;
	
	DBMS_OUTPUT.PUT_LINE('Std_ID: ' || Std_ID || ', Course ID: ' || Crs_ID || ', Original Price :' || 	originalPrice || ', Discount : ' || discount || ', Post-discount Price: ' || postDiscount);

END;
/









commit;
/