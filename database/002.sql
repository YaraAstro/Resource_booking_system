INSERT INTO Patients (Patient_ID, Name, Name_Initials, NIC, Date_of_Birth, Gender, Blood_type, Address, City, District, Postal_code, Mobile, Tele_No, Email, Password)
VALUES
    ('PT00001', 'John Doe', 'J. D.', '200501010123', '2005-01-01', 'Male', 'A+', '123 Main St', 'Colombo', 'Colombo', '10000', '1234567890', '9876543210', 'john.doe@example.com', 'P@ssw0rd'),
    ('PT00002', 'Jane Smith', 'J. S.', '200201020123', '2002-02-02', 'Female', 'B-', '456 Elm St', 'Kandy', 'Kandy', '20000', '9876543210', '1234567890', 'jane.smith@example.com', 'Password123'),
    ('PT00003', 'Michael Johnson', 'M. J.', '199901030123', '1999-03-03', 'Male', 'O+', '789 Oak St', 'Galle', 'Galle', '30000', '5555555555', '1111111111', 'michael.johnson@example.com', 'SecurePass1!'),
    ('PT00004', 'Sarah Davis', 'S. D.', '199512040123', '1995-04-04', 'Female', 'AB-', '321 Pine St', 'Negombo', 'Gampaha', '40000', '4444444444', '2222222222', 'sarah.davis@example.com', 'Pass1234@'),
    ('PT00005', 'Robert Wilson', 'R. W.', '200012050123', '2000-05-05', 'Male', 'B+', '654 Cedar St', 'Jaffna', 'Jaffna', '50000', '3333333333', '3333333333', 'robert.wilson@example.com', 'Secret!2023'),
    ('PT00006', 'Emily Taylor', 'E. T.', '200703060123', '2007-06-06', 'Female', 'O-', '987 Maple St', 'Matara', 'Matara', '60000', '2222222222', '4444444444', 'emily.taylor@example.com', 'Pa$$w0rd!'),
    ('PT00007', 'David Anderson', 'D. A.', '200810070123', '2008-07-07', 'Male', 'A-', '123 Oak St', 'Badulla', 'Badulla', '70000', '1111111111', '5555555555', 'david.anderson@example.com', 'SecurePassword123'),
    ('PT00008', 'Olivia Moore', 'O. M.', '200609080123', '2006-08-08', 'Female', 'B+', '456 Elm St', 'Ratnapura', 'Ratnapura', '80000', '8888888888', '8888888888', 'olivia.moore@example.com', 'MyP@ssw0rd!'),
    ('PT00009', 'James Lee', 'J. L.', '199907090123', '1999-09-09', 'Male', 'O+', '789 Pine St', 'Anuradhapura', 'Anuradhapura', '90000', '9999999999', '9999999999', 'james.lee@example.com', 'Password!123'),
    ('PT00010', 'Sophia Clark', 'S. C.', '200410100123', '1985-10-10', 'Female', 'AB+', '654 Cedar St', 'Kalutara', 'Kalutara', '10000', '7777777777', '7777777777', 'sophia.clark@example.com', '!SecurePass123')
;

INSERT INTO Staff (Staff_ID, First_Name, Last_Name, Staff_Email, Mobile, Prof_Role, Specialization, Address, City, District, Gender, Date_of_Birth, Age, NIC, Weekdays, Weekdays_Evening, Weekends, Holidays, Academics, NIC_Scan, Profile_pic, Staff_CV, Password)
VALUES
    ('ST0001', 'Hugo', 'Mclaster', 'hugom255@xaml.com', '1234567890', 'doctor', 'Cardiology', '123 Main St', 'Colombo', 'Colombo', 'Male', '1980-01-01', 43, '800101234V', TRUE, TRUE, FALSE, FALSE, NULL, NULL, NULL, NULL, 'P@ssw0rd'),
    ('ST0002', 'Sarah', 'Pepper', 'sarahpep@ampe.com', '9876543210', 'nurse', NULL, '456 Elm St', 'Kandy', 'Kandy', 'Female', '1985-02-02', 38, '850202345V', TRUE, FALSE, TRUE, FALSE, NULL, NULL, NULL, NULL, 'Password123'),
    ('ST0003', 'Warner', 'Thompson', 'thompson35@xame.com', '5555555555', 'attendant', NULL, '789 Oak St', 'Galle', 'Galle', 'Male', '1990-03-03', 33, '900303456V', FALSE, TRUE, TRUE, FALSE, NULL, NULL, NULL, NULL, 'SecurePass1!'),
    ('ST0004', 'Renauld', 'Davis', 'davisren@xmpl.com', '4444444444', 'lab technician', 'Microbiology', '321 Pine St', 'Negombo', 'Gampaha', 'Female', '1995-04-04', 28, '950404567V', TRUE, FALSE, FALSE, TRUE, NULL, NULL, NULL, NULL, 'Pass1234@'),
    ('ST0005', 'Maya', 'Levis', 'maya1335@xmle.com', '3333333333', 'instructor', 'Physiotherapy', '654 Cedar St', 'Jaffna', 'Jaffna', 'Male', '1988-05-05', 35, '880505678V', TRUE, FALSE, TRUE, FALSE, NULL, NULL, NULL, NULL, 'Secret!2023'),
    ('ST0006', 'Anya', 'Travis', 'travisanya@exae.com', '2222222222', 'doctor', 'Pediatrics', '987 Maple St', 'Matara', 'Matara', 'Female', '1993-06-06', 30, '930606789V', TRUE, TRUE, FALSE, FALSE, NULL, NULL, NULL, NULL, 'Pa$$w0rd!'),
    ('ST0007', 'James', 'Anderson', 'james.anderson@exme.com', '1111111111', 'nurse', NULL, '123 Oak St', 'Badulla', 'Badulla', 'Male', '1987-07-07', 36, '870707890V', TRUE, FALSE, TRUE, FALSE, NULL, NULL, NULL, NULL, 'SecurePassword123'),
    ('ST0008', 'Korner', 'Mcgreggar', 'mcgreggar@exame.com', '8888888888', 'attendant', NULL, '456 Elm St', 'Ratnapura', 'Ratnapura', 'Female', '1992-08-08', 31, '920808901V', FALSE, TRUE, TRUE, FALSE, NULL, NULL, NULL, NULL, 'MyP@ssw0rd!'),
    ('ST0009', 'Vun', 'Young', 'vun.young@examp.com', '9999999999', 'lab technician', 'Pathology', '789 Pine St', 'Anuradhapura', 'Anuradhapura', 'Male', '1989-09-09', 32, '890909012V', TRUE, FALSE, FALSE, TRUE, NULL, NULL, NULL, NULL, 'Password!123'),
    ('ST0010', 'Karim', 'Anderson', 'karim.anderson@mple.com', '7777777777', 'manager', NULL, '654 Cedar St', 'Kalutara', 'Kalutara', 'Female', '1994-10-10', 29, '941010123V', TRUE, FALSE, TRUE, FALSE, NULL, NULL, NULL, NULL, '!SecurePass123')
;

INSERT INTO Doctors (Doctor_ID, Staff_ID, Specialization, Qualifications, License_Number, Active_Status)
VALUES
    ('DC0001', 'ST0011', 'Cardiology', 'MBBS, MD', 'LN001', TRUE, 'password1'),
    ('DC0002', 'ST0012', 'Dermatology', 'MBBS, DNB', 'LN002', FALSE, 'password2'),
    ('DC0003', 'ST0013', 'Orthopedics', 'MBBS, MS, MCh', 'LN003', TRUE, 'password3')
;

INSERT INTO Nurses (Nurse_ID, Staff_ID, Specialization, Qualifications, License_Number, Active_Status, password)
VALUES 
    ('NS0001', 'ST0014', 'Critical Care Nursing', 'BSc Nursing', 'LN011', TRUE, 'password1'),
    ('NS0002', 'ST0015', 'Pediatric Nursing', 'BSc Nursing, Postgraduate Diploma', 'LN012', FALSE, 'password2'),
    ('NS0003', 'ST0016', 'Oncology Nursing', 'BSc Nursing, MSc Nursing', 'LN013', TRUE, 'password3')
;

INSERT INTO Lab_Technicians (Technician_ID, Staff_ID, Specialization, Qualifications, License_Number, Active_Status, password)
VALUES 
    ('LT0001', 'ST0017', 'Clinical Laboratory Science', 'BSc Medical Laboratory Science', 'LN014', TRUE, 'password1'),
    ('LT0002', 'ST0018', 'Pathology Laboratory Science', 'BSc Medical Laboratory Science', 'LN015', FALSE, 'password2'),
    ('LT0003', 'ST0019', 'Microbiology Laboratory Science', 'BSc Medical Laboratory Science, MSc Medical Microbiology', 'LN016', TRUE, 'password3')
;

INSERT INTO Instructors (Instructor_ID, Staff_ID, Specialization, Qualifications, Active_Status, password)
VALUES 
    ('HI0001', 'ST0020', 'Yoga Instructor', 'Certified Yoga Instructor', TRUE, 'password1'),
    ('HI0002', 'ST0021', 'Pilates Instructor', 'Certified Pilates Instructor', FALSE, 'password2'),
    ('HI0003', 'ST0022', 'Zumba Instructor', 'Certified Zumba Instructor, Aerobics Certification', TRUE, 'password3'),
    ('HI0004', 'ST0023', 'Martial Arts Instructor', 'Certified Martial Arts Instructor', FALSE, 'password4')
;

INSERT INTO Attendants (Attendant_ID, Staff_ID, Active_Status, password)
VALUES 
    ('AT0001', 'ST0024', TRUE, 'AS%$ssword1'),
    ('AT0002', 'ST0025', FALSE, 'PA"£sword1'),
    ('AT0003', 'ST0026', TRUE, 'pASsword1'),
    ('AT0004', 'ST0027', FALSE, 'password1w!')
;

INSERT INTO Third_Parties (Company_ID, Company_Name, Company_Type, Web, Hotline, Email, Address, City, District, Postal_code, Description)
VALUES 
    ('TP0001', 'ABC Insurance', 'Insurance', 'www.abcinsurance.com', '123456789', 'info@abcinsurance.com', '123 Main Street', 'Colombo', 'Colombo', '12345', 'Insurance company providing various coverage options'),
    ('TP0002', 'PQR Pharmacy', 'Pharmacy', 'www.pqrpharmacy.com', '555555555', 'info@pqrpharmacy.com', '789 Oak Street', 'Kandy', 'Kandy', '98765', 'Pharmacy providing prescription medications and healthcare products'),
    ('TP0003', 'EFG Fitness', 'Fitness Center', 'www.efgfitness.com', '222222222', 'info@efgfitness.com', '987 Maple Avenue', 'Negombo', 'Gampaha', '43210', 'State-of-the-art fitness center with a wide range of exercise equipment and classes')
;

INSERT INTO Invoices (Invoice_ID, Patient_ID, Details, Invoice_Date, Total_Amount, Payment_Status)
VALUES 
    ('IN0001', 'PT0001', 'Consultation fee', '2023-05-01', 50.00, 'Paid'),
    ('IN0002', 'PT0002', 'Lab test charges', '2023-05-03', 100.00, 'Pending'),
    ('IN0003', 'PT0003', 'Medication cost', '2023-05-05', 75.50, 'Paid'),
    ('IN0004', 'PT0004', 'Surgical procedure charges', '2023-05-07', 500.00, 'Pending'),
    ('IN0005', 'PT0005', 'Physical therapy session fees', '2023-05-10', 80.00, 'Paid')
;

INSERT INTO Payments (Payment_ID, Invoice_ID, Pay_Amount, Pay_Date, Pay_Method, Patient_ID)
VALUES 
    ('PY0001', 'IN0001', 50.00, '2023-05-01', 'Credit Card', 'PT0001'),
    ('PY0002', 'IN0002', 100.00, '2023-05-03', 'Cash', 'PT0002'),
    ('PY0003', 'IN0003', 75.50, '2023-05-05', 'Cheque', 'PT0003'),
    ('PY0004', 'IN0004', 500.00, '2023-05-07', 'Credit Card', 'PT0004'),
    ('PY0005', 'IN0005', 80.00, '2023-05-10', 'Cash', 'PT0005')
;

INSERT INTO Unites (Unite_ID, Unite_Name, Unite_Description)
VALUES 
    ('UT0001', 'Pediatrics', 'Ward for pediatric patients'),
    ('UT0002', 'Orthopedics', 'Ward for orthopedic patients'),
    ('UT0003', 'Cardiology', 'Ward for cardiology patients'),
    ('UT0004', 'Oncology', 'Ward for oncology patients'),
    ('UT0005', 'Intensive Care Unit', 'Ward for critically ill patients')
;

INSERT INTO Laboratories (Lab_ID, Lab_Name, Lab_Location)
VALUES 
    ('LB0001', 'Clinical Pathology Lab', 'Main Building, 2nd Floor'),
    ('LB0002', 'Microbiology Lab', 'East Wing, Ground Floor'),
    ('LB0003', 'Hematology Lab', 'Main Building, 3rd Floor'),
    ('LB0004', 'Biochemistry Lab', 'West Wing, 1st Floor'),
    ('LB0005', 'Histopathology Lab', 'Main Building, 4th Floor')
;

INSERT INTO Group_Classes (Class_ID, Class_Name, Class_Description, Class_Duration, Class_Location, Class_MaxCapacity, Class_Prerequisites, Amount)
VALUES 
    ('GC0001', 'Yoga Class', 'Beginner level yoga class', 60, 'Wellness Center, Room A', 20, 'None', 15.99),
    ('GC0002', 'Zumba Fitness', 'High-energy dance fitness class', 45, 'Aerobics Studio, Ground Floor', 30, 'None', 12.99),
    ('GC0003', 'Pilates Class', 'Core-strengthening and flexibility class', 60, 'Wellness Center, Room B', 15, 'Previous Pilates experience recommended', 18.99),
    ('GC0004', 'Cardio Kickboxing', 'Kickboxing and cardio workout class', 60, 'Fitness Studio, 2nd Floor', 25, 'None', 14.99),
    ('GC0005', 'Spin Cycling', 'Indoor cycling class', 45, 'Cycling Studio, Ground Floor', 20, 'None', 10.99)
;

INSERT INTO Wards (Ward_ID, Ward_Number, Capacity, Unite_ID)
VALUES 
    ('AW0001', 'Ward001', 10, 'UT0001'),
    ('AW0002', 'Ward002', 15, 'UT0001'),
    ('AW0003', 'Ward003', 8, 'UT0002'),
    ('AW0004', 'Ward004', 12, 'UT0002'),
    ('AW0005', 'Ward005', 20, 'UT0003')
;

INSERT INTO Hospital_Beds (Bed_ID, Ward_ID, Patient_ID, Bed_Number, Bed_Availability)
VALUES 
    ('HB0006', 'AW0001', NULL, 1, 'Available'),
    ('HB0007', 'AW0001', 'PT0006', 2, 'Occupied'),
    ('HB0008', 'AW0002', NULL, 1, 'Available'),
    ('HB0009', 'AW0002', NULL, 2, 'Available'),
    ('HB0010', 'AW0002', 'PT0007', 3, 'Occupied')
;

INSERT INTO Nurse_Shifts (Shift_ID, Nurse_ID, Unite_ID, ShStart_Date, Start_Time, ShEnd_Date, End_Time)
VALUES 
    ('SH0006NS', 'NS0020', 'UT0001', '2023-06-05', '08:00:00', '2023-06-05', '16:00:00'),
    ('SH0007NS', 'NS0021', 'UT0001', '2023-06-05', '16:00:00', '2023-06-06', '00:00:00'),
    ('SH0008NS', 'NS0022', 'UT0002', '2023-06-05', '08:00:00', '2023-06-05', '16:00:00'),
    ('SH0009NS', 'NS0023', 'UT0002', '2023-06-05', '16:00:00', '2023-06-06', '00:00:00'),
    ('SH0010NS', 'NS0024', 'UT0002', '2023-06-06', '00:00:00', '2023-06-06', '08:00:00')
;

INSERT INTO Channelings (Channeling_ID, Patient_ID, Doctor_ID, Channeling_Date, Channeling_Time, Channeling_Status, Amount)
VALUES 
    ('AP0001DC', 'PT0001', 'DC0001', '2023-06-05', '09:00 AM', 'Confirmed', 150.00),
    ('AP0002DC', 'PT0002', 'DC0002', '2023-06-06', '10:30 AM', 'Confirmed', 200.00),
    ('AP0003DC', 'PT0003', 'DC0003', '2023-06-07', '11:45 AM', 'Pending', 175.00),
    ('AP0004DC', 'PT0004', 'DC0001', '2023-06-08', '02:15 PM', 'Confirmed', 150.00),
    ('AP0005DC', 'PT0005', 'DC0002', '2023-06-09', '03:30 PM', 'Confirmed', 200.00)
;

INSERT INTO Telehealth (Telehealth_ID, Patient_ID, Doctor_ID, Telehealth_Date, Telehealth_Time, Telehealth_Status, Session_Link, Amount)
VALUES 
    ('AP0001TH', 'PT0011', 'DC0001', '2023-06-05 14:30:00', '14:30:00', 'Confirmed', 'https://telehealthsession.com/link1', 100.00),
    ('AP0002TH', 'PT0012', 'DC0002', '2023-06-06 10:00:00', '10:00:00', 'Confirmed', 'https://telehealthsession.com/link2', 120.00),
    ('AP0003TH', 'PT0013', 'DC0003', '2023-06-07 16:45:00', '16:45:00', 'Pending', '', 80.00),
    ('AP0004TH', 'PT0014', 'DC0001', '2023-06-08 09:15:00', '09:15:00', 'Confirmed', 'https://telehealthsession.com/link4', 100.00),
    ('AP0005TH', 'PT0015', 'DC0002', '2023-06-09 13:30:00', '13:30:00', 'Confirmed', 'https://telehealthsession.com/link5', 120.00),
    ('AP0006TH', 'PT0016', 'DC0003', '2023-06-10 11:00:00', '11:00:00', 'Confirmed', 'https://telehealthsession.com/link6', 100.00),
    ('AP0007TH', 'PT0017', 'DC0001', '2023-06-11 15:45:00', '15:45:00', 'Confirmed', 'https://telehealthsession.com/link7', 120.00)
;

INSERT INTO HomeHealthcare_Appointments (HHealth_ID, Patient_ID, Instructor_ID, HHealth_Date, HHealth_Time, HHealth_Duration, HHealth_Location, HHealth_Status, Amount)
VALUES 
    ('AP0001HHS', 'PT0001', 'HI0001', '2023-06-05', '10:00:00', 60, 'Patients Home', 'Confirmed', 150.00),
    ('AP0002HHS', 'PT0002', 'HI0002', '2023-06-06', '14:30:00', 90, 'Patients Home', 'Confirmed', 200.00),
    ('AP0003HHS', 'PT0003', 'HI0003', '2023-06-07', '09:45:00', 45, 'Patients Home', 'Pending', 100.00),
    ('AP0004HHS', 'PT0004', 'HI0001', '2023-06-08', '11:15:00', 60, 'Patients Home', 'Confirmed', 150.00),
    ('AP0005HHS', 'PT0005', 'HI0002', '2023-06-09', '16:00:00', 120, 'Patients Home', 'Confirmed', 250.00)
;

INSERT INTO Class_Schedule (ClassSchedule_ID, Class_ID, ClassSchedule_Date, Start_Time, End_Time)
VALUES 
    ('SH0001GC', 'GC0001', '2023-06-05', '10:00:00', '11:30:00'),
    ('SH0002GC', 'GC0002', '2023-06-06', '14:30:00', '16:00:00'),
    ('SH0003GC', 'GC0003', '2023-06-07', '09:45:00', '11:00:00'),
    ('SH0004GC', 'GC0001', '2023-06-08', '11:15:00', '12:30:00'),
    ('SH0005GC', 'GC0002', '2023-06-09', '16:00:00', '17:30:00')
;

INSERT INTO Class_Enrollments (Enroll_ID, Class_ID, Patient_ID, Enroll_Date, Enroll_Status)
VALUES 
    ('EN0001GC', 'GC0001', 'PT0001', '2023-06-05', 'Enrolled'),
    ('EN0002GC', 'GC0002', 'PT0002', '2023-06-06', 'Enrolled'),
    ('EN0003GC', 'GC0003', 'PT0003', '2023-06-07', 'Enrolled'),
    ('EN0004GC', 'GC0001', 'PT0004', '2023-06-08', 'Enrolled'),
    ('EN0005GC', 'GC0002', 'PT0005', '2023-06-09', 'Enrolled')
;

INSERT INTO Class_Attendance (Attendance_ID, Class_ID, Patient_ID, ClassSchedule_ID, Attendance_Date, Attendance_Status)
VALUES 
    (1, 'GC0001', 'PT0001', 'SH0001GC', '2023-06-05', 'Present'),
    (2, 'GC0002', 'PT0002', 'SH0002GC', '2023-06-06', 'Present'),
    (3, 'GC0003', 'PT0003', 'SH0003GC', '2023-06-07', 'Present'),
    (4, 'GC0001', 'PT0004', 'SH0004GC', '2023-06-08', 'Present'),
    (5, 'GC0002', 'PT0005', 'SH0005GC', '2023-06-09', 'Present')
;

INSERT INTO Gardian_Details (Patient_ID, Gardian_Name, Gardian_Mobile, Gardian_NIC)
VALUES 
    ('PT0021', 'John Doe', '9876543210', '123456789012'),
    ('PT0022', 'Jane Smith', '8765432109', '987654321098'),
    ('PT0023', 'David Johnson', '7654321098', '876543210987'),
    ('PT0024', 'Sarah Williams', '6543210987', '765432109876'),
    ('PT0025', 'Kia Vuijin', '5432109876', '654321098765')
;

INSERT INTO Pay_via_Insurance (Payment_ID, Invoice_ID, Patient_ID, Company_ID, Policy_Number, Amount, Expire_Date)
VALUES 
    ('PY0010', 'IN0011', 'PT0021', 'TP0011', 'POL001', 250.00, '2023-12-31'),
    ('PY0011', 'IN0012', 'PT0022', 'TP0012', 'POL002', 150.00, '2023-11-30'),
    ('PY0012', 'IN0013', 'PT0023', 'TP0013', 'POL003', 180.00, '2023-10-31'),
    ('PY0013', 'IN0014', 'PT0024', 'TP0014', 'POL004', 200.00, '2023-09-30'),
    ('PY0014', 'IN0015', 'PT0025', 'TP0015', 'POL005', 300.00, '2023-08-31')
;

INSERT INTO Pay_via_Card (Payment_ID, Invoice_ID, Patient_ID, Card_Number, Card_HolderName, Expire_Date, CCV, Amount)
VALUES 
    ('PY0031', 'IN0021', 'PT0031', '1234567890123456', 'John Doe', '2023-12-31', '123', 250.00),
    ('PY0032', 'IN0022', 'PT0032', '2345678901234567', 'Jane Smith', '2023-11-30', '456', 150.00),
    ('PY0033', 'IN0023', 'PT0033', '3456789012345678', 'Mike Johnson', '2023-10-31', '789', 180.00),
    ('PY0034', 'IN0024', 'PT0034', '4567890123456789', 'Sarah Williams', '2023-09-30', '012', 200.00),
    ('PY0035', 'IN0025', 'PT0035', '5678901234567890', 'David Brown', '2023-08-31', '345', 300.00)
;

INSERT INTO Doc_Unites (Doctor_ID, Unite_ID)
VALUES 
    ('DC0031', 'UT0001'),
    ('DC0032', 'UT0001'),
    ('DC0033', 'UT0002'),
    ('DC0034', 'UT0002'),
    ('DC0035', 'UT0003')
;

INSERT INTO Patient_In_Charge (Patient_ID, Nurse_ID, Attendant_ID, Bed_ID)
VALUES 
    ('PT0041', 'NS0011', 'AT0021', 1),
    ('PT0042', 'NS0012', 'AT0012', 2),
    ('PT0043', 'NS0013', 'AT0023', 3),
    ('PT0044', 'NS0014', 'AT0034', 4),
    ('PT0045', 'NS0015', 'AT0015', 5),
    ('PT0046', 'NS0016', 'AT0006', 6)
;

INSERT INTO Patient_Visits (Patient_ID, Attendant_ID, Visit_DATE, Visit_Time)
VALUES 
    ('PT0001', 'AT0001', '2023-06-01', '10:00:00'),
    ('PT0012', 'AT0021', '2023-06-02', '14:30:00'),
    ('PT0023', 'AT0003', '2023-06-03', '09:45:00'),
    ('PT0034', 'AT0014', '2023-06-04', '11:15:00')
;

INSERT INTO Attendant_Ward (Attendant_ID, Ward_ID)
VALUES 
    ('AT0011', 'AW0012'),
    ('AT0002', 'AW0021'),
    ('AT0023', 'AW0013'),
    ('AT0004', 'AW0012'),
    ('AT0015', 'AW0001'),
    ('AT0006', 'AW0003')
;

INSERT INTO Labs_of_Tech (Technician_ID, Lab_ID)
VALUES 
    ('LT0001', 'LB0005'),
    ('LT0011', 'LB0012'),
    ('LT0021', 'LB0003'),
    ('LT0013', 'LB0021'),
    ('LT0004', 'LB0015'),
    ('LT0014', 'LB0003'),
    ('LT0015', 'LB0012')
;

INSERT INTO Class_Instructors (Class_ID, Instructor_ID, Current_Status)
VALUES 
    ('GC0001', 'HI0001', 'Active'),
    ('GC0012', 'HI0012', 'Active'),
    ('GC0003', 'HI0011', 'Active'),
    ('GC0004', 'HI0003', 'Active'),
    ('GC0005', 'HI0002', 'Active'),
    ('GC0005', 'HI0004', 'Active')
;

INSERT INTO Prescriptions (Prescription_ID, Prescription_Date, Doctor_ID, Patient_ID)
VALUES
    ('PR0001', '2023-06-05', 'DC0011', 'PT0021'),
    ('PR0002', '2023-06-05', 'DC0021', 'PT0032'),
    ('PR0003', '2023-06-06', 'DC0001', 'PT0003'),
    ('PR0004', '2023-06-06', 'DC0013', 'PT0014')
;

INSERT INTO Medical_Records (Record_ID, Patient_ID, Doctor_ID, Record_Date, Test_ID, Prescription_ID)
VALUES
    ('MR0001', 'PT0021', 'DC0011', '2023-06-05', 'LB0002T', 'PR0010'),
    ('MR0002', 'PT0002', 'DC0021', '2023-06-05', 'LB0012T', 'PR0012'),
    ('MR0003', 'PT0013', 'DC0010', '2023-06-06', 'LB0024T', 'PR0003'),
    ('MR0004', 'PT0004', 'DC0003', '2023-06-06', 'LB0005T', 'PR0004'),
    ('MR0005', 'PT0015', 'DC0021', '2023-06-07', 'LB0014T', 'PR0002')
;

INSERT INTO Medications (Prescription_ID, Medication_Name, Dosage, Frequency, Duration)
VALUES
    ('PR0001', 'Medication 1', '2 tablets', 'Once daily', '10 days'),
    ('PR0021', 'Medication 2', '1 capsule', 'Twice daily', '7 days'),
    ('PR0003', 'Medication 3', '1 teaspoon', 'Three times daily', '14 days'),
    ('PR0004', 'Medication 4', '1 injection', 'Once weekly', '4 weeks'),
    ('PR0015', 'Medication 5', '3 drops', 'Every 4 hours', '3 days')
;

INSERT INTO Lab_Tests (Test_ID, Patient_ID, Doctor_ID, Test_Name, Sample_Type, Instructions, Test_Status, Amount)
VALUES
    ('LB0001T', 'PT0011', 'DC0021', 'Blood Test', 'Blood', 'Fasting required for 8 hours prior to the test', 'Pending', 100.00),
    ('LB0002T', 'PT0012', 'DC0020', 'Urine Test', 'Urine', 'Collect the first-morning urine sample', 'Completed', 75.00),
    ('LB0003T', 'PT0003', 'DC0003', 'X-Ray', 'Radiology', 'No special instructions', 'Pending', 150.00),
    ('LB0004T', 'PT0024', 'DC0004', 'ECG', 'Electrocardiogram', 'Avoid consuming caffeine before the test', 'Completed', 120.00),
    ('LB0005T', 'PT0005', 'DC0005', 'MRI Scan', 'Radiology', 'Remove any metal objects before the scan', 'Pending', 250.00),
    ('LB0006T', 'PT0006', 'DC0010', 'Stool Test', 'Stool', 'Collect a fresh stool sample in a sterile container', 'Completed', 80.00),
    ('LB0007T', 'PT0017', 'DC0007', 'Ultrasound', 'Radiology', 'Drink plenty of water before the test', 'Pending', 180.00)
;

INSERT INTO Upcoming_Tests (Test_ID, Test_Date, Technician_ID)
VALUES
    ('LB0011T', '2023-06-10 09:00:00', 'LT0010'),
    ('LB0002T', '2023-06-12 14:30:00', 'LT0005'),
    ('LB0003T', '2023-06-15 11:15:00', 'LT0007')
;

INSERT INTO Lab_Results (Result_ID, Test_ID, Result_Date, Result_Value, Units, Interpretation, Technician_ID, Result_Status)
VALUES
    ('LB0001R', 'LB0001T', '2023-06-10', 5.2, 'mg/dL', 'Normal', 'LT0011', 'Final'),
    ('LB0002R', 'LB0002T', '2023-06-12', 7.8, 'mmol/L', 'High', 'LT0002', 'Final'),
    ('LB0003R', 'LB0003T', '2023-06-15', 120, 'mg/dL', 'Normal', 'LT0013', 'Final'),
    ('LB0004R', 'LB0011T', '2023-06-10', 4.9, 'mg/dL', 'Low', 'LT0021', 'Final'),
    ('LB0005R', 'LB0012T', '2023-06-12', 6.2, 'mmol/L', 'Normal', 'LT0002', 'Final'),
    ('LB0006R', 'LB0023T', '2023-06-15', 110, 'mg/dL', 'Normal', 'LT0003', 'Final')
;



















