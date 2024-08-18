/* With entity relations */

-- shifts of nurses
CREATE TABLE Nurse_Shifts (
    Shift_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Shift_ID LIKE 'SH%NS'),
    Nurse_ID VARCHAR(10),
    Unite_ID VARCHAR(10),
    ShStart_Date DATE,
    Start_Time TIME,
    ShEnd_Date DATE,
    End_Time TIME,

    FOREIGN KEY (Nurse_ID) REFERENCES Nurses(Nurse_ID),
    FOREIGN KEY (Unite_ID) REFERENCES Unites(Unite_ID)
);

-- Doctor Channeling
CREATE TABLE Channelings (
    Channeling_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Channeling_ID LIKE 'AP%DC'),
    Patient_ID VARCHAR(10),
    Doctor_ID VARCHAR(10),
    Channeling_Date DATE,
    Channeling_Time VARCHAR(50),
    Channeling_Status VARCHAR(25),
    Amount DECIMAL(10, 2),

    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Doctor_ID) REFERENCES Doctors(Doctor_ID)
);


-- telehealth appointment
CREATE TABLE Telehealth (
    Telehealth_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Telehealth_ID LIKE 'AP%TH'),
    Patient_ID VARCHAR(10),
    Doctor_ID VARCHAR(10),
    Telehealth_Date DATETIME,
    Telehealth_Time TIME,
    Telehealth_Status VARCHAR(25),
    Session_Link VARCHAR(255),
    Amount DECIMAL(10, 2),

    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Doctor_ID) REFERENCES Doctors(Doctor_ID)
);

-- home healthcare appointment
CREATE TABLE HomeHealthcare_Appointments (
    HHealth_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (HHealth_ID LIKE 'AP%HHS'),
    Patient_ID VARCHAR(10),
    Instructor_ID VARCHAR(10),
    HHealth_Date DATE,
    HHealth_Time TIME,
    HHealth_Duration INT,
    HHealth_Location VARCHAR(255),
    HHealth_Status VARCHAR(25),
    Amount DECIMAL(10, 2),

    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Instructor_ID) REFERENCES Instructors(Instructor_ID)
);

-- schedule classes
CREATE TABLE Class_Schedule (
    ClassSchedule_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (ClassSchedule_ID LIKE 'SH%GC'),
    Class_ID VARCHAR(10),
    ClassSchedule_Date DATE,
    Start_Time TIME,
    End_Time TIME,

    FOREIGN KEY (Class_ID) REFERENCES Group_Classes(Class_ID)
);

-- enroll to class
CREATE TABLE Class_Enrollments (
    Enroll_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Enroll_ID LIKE 'EN%GC'),
    Class_ID VARCHAR(10),
    Patient_ID VARCHAR(10),
    Enroll_Date DATE,
    Enroll_Status VARCHAR(25),

    FOREIGN KEY (Class_ID) REFERENCES Group_Classes(Class_ID),
    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID)
);

-- attend to class
CREATE TABLE Class_Attendance (
    Attendance_ID INT PRIMARY KEY NOT NULL,
    Class_ID VARCHAR(10),
    Patient_ID VARCHAR(10),
    ClassSchedule_ID VARCHAR(10),
    Attendance_Date DATE,
    Attendance_Status VARCHAR(25),
    
    FOREIGN KEY (Class_ID) REFERENCES Group_Classes(Class_ID),
    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (ClassSchedule_ID) REFERENCES Class_Schedule(ClassSchedule_ID)
);

/* entity relational tables*/

-- gardians of patients who below 18
CREATE TABLE Gardian_Details (
    Patient_ID VARCHAR(10) NOT NULL PRIMARY KEY,
    Gardian_Name VARCHAR(255) NOT NULL,
    Gardian_Mobile VARCHAR(15) NOT NULL,
    Gardian_NIC VARCHAR(12) NOT NULL,

    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID)
);

-- Insurance details of patient
CREATE TABLE Pay_via_Insurance (
    Payment_ID VARCHAR(15) PRIMARY KEY NOT NULL,
    Invoice_ID VARCHAR(15),
    Patient_ID VARCHAR(10),
    Company_ID VARCHAR(10),
    Policy_Number VARCHAR(50),
    Amount DECIMAL(10, 2),
    Expire_Date DATE,

    FOREIGN KEY (Payment_ID) REFERENCES Payments(Payment_ID),
    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Invoice_ID) REFERENCES Invoices(Invoice_ID),
    FOREIGN KEY (Company_ID) REFERENCES Third_Parties(Company_ID)
);

-- pay via card
CREATE TABLE Pay_via_Card (
    Payment_ID VARCHAR(10) PRIMARY KEY,
    Invoice_ID VARCHAR(10),
    Patient_ID VARCHAR(10),
    Card_Number VARCHAR(16),
    Card_HolderName VARCHAR(100),
    Expire_Date DATE,
    CCV VARCHAR(5),
    Amount DECIMAL(10, 2),

    FOREIGN KEY (Payment_ID) REFERENCES Payments(Payment_ID),
    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Invoice_ID) REFERENCES Invoices(Invoice_ID)
);

-- Unites of doctors
CREATE TABLE Doc_Unites(
    Doctor_ID VARCHAR(10),
    Unite_ID VARCHAR(10),

    FOREIGN KEY (Doctor_ID) REFERENCES Doctors(Doctor_ID),
    FOREIGN KEY (Unite_ID) REFERENCES Unites(Unite_ID)
);

-- patient in charge
CREATE TABLE Patient_In_Charge (
    Patient_ID VARCHAR(10) PRIMARY KEY,
    Nurse_ID VARCHAR(10),
    Attendant_ID VARCHAR(10),
    Bed_ID INT,

    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Nurse_ID) REFERENCES Nurses(Nurse_ID),
    FOREIGN KEY (Attendant_ID) REFERENCES Attendants(Attendant_ID),
    FOREIGN KEY (Bed_ID) REFERENCES Hospital_Beds(Bed_ID)
);

-- Shifts of attendants
CREATE TABLE Patient_Visits (
    Patient_ID VARCHAR(10),
    Attendant_ID VARCHAR(10),
    Visit_DATE DATE,
    Visit_Time TIME,

    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Attendant_ID) REFERENCES Attendants(Attendant_ID)
);

-- wards of nurses
CREATE TABLE Nurse_Ward (
    Nurse_ID VARCHAR(10),
    Ward_ID VARCHAR(10),

    FOREIGN KEY (Nurse_ID) REFERENCES Nurses(Nurse_ID),
    FOREIGN KEY (Ward_ID) REFERENCES Wards(Ward_ID)
);

-- wards of attendants
CREATE TABLE Attendant_Ward (
    Attendant_ID VARCHAR(10),
    Ward_ID VARCHAR(10),

    FOREIGN KEY (Attendant_ID) REFERENCES Attendants(Attendant_ID),
    FOREIGN KEY (Ward_ID) REFERENCES Wards(Ward_ID)
);

-- labs of technicians
CREATE TABLE Labs_of_Tech (
    Technician_ID VARCHAR(10),
    Lab_ID VARCHAR(10),

    FOREIGN KEY (Technician_ID) REFERENCES Lab_Technicians(Technician_ID),
    FOREIGN KEY (Lab_ID) REFERENCES Laboratories(Lab_ID)
);

-- Instructors who responsible for group classes
CREATE TABLE Class_Instructors (
    Class_ID VARCHAR(10),
    Instructor_ID VARCHAR(10),
    Current_Status VARCHAR(25),

    FOREIGN KEY (Class_ID) REFERENCES Group_Classes(Class_ID),
    FOREIGN KEY (Instructor_ID) REFERENCES Instructors(Instructor_ID)
);


/* Medical Records */

-- prescription lists
CREATE TABLE Prescriptions (
    Prescription_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Prescription_ID LIKE 'PR%'),
    Prescription_Date DATE NOT NULL,
    Doctor_ID VARCHAR(10) NOT NULL,
    Patient_ID VARCHAR(10) NOT NULL,

    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Doctor_ID) REFERENCES Doctors(Doctor_ID)
);

-- medical records
CREATE TABLE Medical_Records (
    Record_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Record_ID LIKE 'MR%'),
    Patient_ID VARCHAR(10) NOT NULL,
    Doctor_ID VARCHAR(10) NOT NULL,
    Record_Date DATE NOT NULL,
    Test_ID VARCHAR(10) NOT NULL,
    Prescription_ID VARCHAR(10) NOT NULL,

    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Doctor_ID) REFERENCES Doctors(Doctor_ID),
    FOREIGN KEY (Prescription_ID) REFERENCES Prescriptions(Prescription_ID)
);

-- medications
CREATE TABLE Madications (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Prescription_ID VARCHAR(10),
    Madication_Name VARCHAR(255),
    Dosage VARCHAR(50),
    Frequency VARCHAR(50),
    Duration VARCHAR(50),

    FOREIGN KEY (Prescription_ID) REFERENCES Prescriptions(Prescription_ID)
);

/* Lab tests */

-- lab tests
CREATE TABLE Lab_Tests (
    Test_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Test_ID LIKE 'LB%T'),
    Patient_ID VARCHAR(10),
    Doctor_ID VARCHAR(10),
    Test_Name VARCHAR(255),
    Sample_Type VARCHAR(50),
    Instructions TEXT,
    Test_Status VARCHAR(25),
    Amount DECIMAL(10, 2),

    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID),
    FOREIGN KEY (Doctor_ID) REFERENCES Doctors(Doctor_ID)
);

-- upcoming lab tests
CREATE TABLE Upcoming_Tests (
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Test_ID VARCHAR(10),
    Test_Date DATETIME,
    Technician_ID VARCHAR(10),

    FOREIGN KEY (Test_ID) REFERENCES Lab_Tests(Test_ID),
    FOREIGN KEY (Technician_ID) REFERENCES Lab_Technicians(Technician_ID)
);

-- lab results
CREATE TABLE Lab_Results (
    Result_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Result_ID LIKE 'LB%R'),
    Test_ID VARCHAR(10),
    Result_Date DATE,
    Result_Value DECIMAL(10, 2),
    Units VARCHAR(50),
    Interpretation VARCHAR(255),
    Technician_ID VARCHAR(10),
    Result_Status VARCHAR(25),

    FOREIGN KEY (Test_ID) REFERENCES Lab_Tests(Test_ID),
    FOREIGN KEY (Technician_ID) REFERENCES Lab_Technicians(Technician_ID)
);

