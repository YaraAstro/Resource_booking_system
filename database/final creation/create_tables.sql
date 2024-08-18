/* Create Tables Characters */

-- patients
CREATE TABLE Patients (
    Patient_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Patient_ID LIKE 'PT%'),
    Name VARCHAR(255) NOT NULL,
    Name_Initials VARCHAR(255) NOT NULL,
    NIC VARCHAR(12),
    Date_of_Birth DATE,
    Gender VARCHAR(10) NOT NULL,
    Blood_type VARCHAR(10) NOT NULL,
    Address VARCHAR(255) NOT NULL,
    City VARCHAR(100) NOT NULL,
    District VARCHAR(100) NOT NULL,
    Postal_code VARCHAR(5) NOT NULL,
    Mobile VARCHAR(15) NOT NULL,
    Tele_No VARCHAR(15) NOT NULL,
    Email VARCHAR(100) CHECK (Email LIKE '%_@__%.__%'),
    password VARCHAR(50) NOT NULL CHECK (LENGTH(password) >= 8)
);

-- staff
CREATE TABLE Staff (
    Staff_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Staff_ID LIKE 'ST%'),
    First_Name VARCHAR(125),
    Last_Name VARCHAR(125),
    Staff_Email VARCHAR(125),
    Mobile VARCHAR(15),
    Prof_Role VARCHAR(50) NOT NULL,
    Specialization VARCHAR(100),
    Address VARCHAR(255) NOT NULL,
    City VARCHAR(100) NOT NULL,
    District VARCHAR(100) NOT NULL,
    Gender VARCHAR(10),
    Date_of_Birth DATE,
    Age INT,
    NIC VARCHAR(15) NOT NULL,
    Weekdays BOOLEAN,
    Weekdays_Evening BOOLEAN,
    Weekends BOOLEAN,
    Holidays BOOLEAN,
    Academics BLOB,
    NIC_Scan BLOB,
    Profile_pic BLOB,
    Staff_CV BLOB,
    password VARCHAR(50) NOT NULL CHECK (LENGTH(password) >= 8)
);

-- Doctors
CREATE TABLE Doctors(
    Doctor_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Doctor_ID LIKE 'DC%'),
    Staff_ID VARCHAR(10),
    Specialization VARCHAR(100),
    Qualifications TEXT,
    License_Number VARCHAR(50),
    Active_Status BOOLEAN,
    password VARCHAR(50) NOT NULL CHECK (LENGTH(password) >= 8),

    FOREIGN KEY (Staff_ID) REFERENCES Staff(Staff_ID)
);

-- Nurse
CREATE TABLE Nurses(
    Nurse_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Nurse_ID LIKE 'NS%'),
    Staff_ID VARCHAR(10),
    Specialization VARCHAR(100),
    Qualifications TEXT,
    License_Number VARCHAR(50),
    Active_Status BOOLEAN,
    password VARCHAR(50) NOT NULL CHECK (LENGTH(password) >= 8),

    FOREIGN KEY (Staff_ID) REFERENCES Staff(Staff_ID)
);

-- Lab Tech
CREATE TABLE Lab_Technicians (
    Technician_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Technician_ID LIKE 'LT%'),
    Staff_ID VARCHAR(10),
    Specialization VARCHAR(100),
    Qualifications TEXT,
    License_Number VARCHAR(50),
    Active_Status BOOLEAN,
    password VARCHAR(50) NOT NULL CHECK (LENGTH(password) >= 8),

    FOREIGN KEY (Staff_ID) REFERENCES Staff(Staff_ID)
);

-- Instructors
CREATE TABLE Instructors (
    Instructor_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Instructor_ID LIKE 'HI%'),
    Staff_ID VARCHAR(10),
    Specialization VARCHAR(100),
    Qualifications TEXT,
    Active_Status VARCHAR(25),
    password VARCHAR(50) NOT NULL CHECK (LENGTH(password) >= 8),

    FOREIGN KEY (Staff_ID) REFERENCES Staff(Staff_ID)
);

-- Attendants
CREATE TABLE Attendants (
    Attendant_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Attendant_ID LIKE 'AT%'),
    Staff_ID VARCHAR(10),
    Active_Status BOOLEAN,
    password VARCHAR(50) NOT NULL CHECK (LENGTH(password) >= 8),

    FOREIGN KEY (Staff_ID) REFERENCES Staff(Staff_ID)
);

-- third party companies
CREATE TABLE Third_Parties (
    Company_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Company_ID LIKE 'TP%'),
    Company_Name VARCHAR(255),
    Company_Type VARCHAR(50),
    Web VARCHAR(255),
    Hotline VARCHAR(15) NOT NULL,
    Email VARCHAR(100) CHECK (Email LIKE '%_@__%.__%'),
    Address VARCHAR(255) NOT NULL,
    City VARCHAR(100) NOT NULL,
    District VARCHAR(100) NOT NULL,
    Postal_code VARCHAR(5) NOT NULL,
    Description TEXT
);
