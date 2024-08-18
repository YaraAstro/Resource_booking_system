/* Other uniuqe tables */

-- Unites
CREATE TABLE Unites (
    Unite_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Unite_ID LIKE 'UT%'),
    Unite_Name VARCHAR(255),
    Unite_Description TEXT
);

-- labs
CREATE TABLE Laboratories (
    Lab_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Lab_ID LIKE 'LB%'),
    Lab_Name VARCHAR(255),
    Lab_Location VARCHAR(125)
);

-- group classes
CREATE TABLE Group_Classes (
    Class_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Class_ID LIKE 'GC%'),
    Class_Name VARCHAR(125),
    Class_Description VARCHAR(255),
    Class_Duration INT,
    Class_Location VARCHAR(125),
    Class_MaxCapacity INT,
    Class_Prerequisites VARCHAR(255),
    Amount DECIMAL(10, 2)
);

-- wards
CREATE TABLE Wards (
    Ward_ID VARCHAR(10) PRIMARY KEY NOT NULL CHECK (Ward_ID LIKE 'AW%'),
    Ward_Number VARCHAR(10),
    Capacity INT,
    Unite_ID VARCHAR(10),

    FOREIGN KEY (Unite_ID) REFERENCES Unites(Unite_ID)
);

-- hospital beds
CREATE TABLE Hospital_Beds (
    Bed_ID INT PRIMARY KEY NOT NULL CHECK (Bed_ID LIKE 'HB%'),
    Ward_ID VARCHAR(10),
    Patient_ID VARCHAR(10),
    Bed_Number INT,
    Bed_Availability VARCHAR(50),

    FOREIGN KEY (Ward_ID) REFERENCES Wards(Ward_ID),
    FOREIGN KEY (Patient_ID) REFERENCES Patients(Patient_ID)
);


