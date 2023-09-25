-- STAFF table
CREATE TABLE STAFF (
    Staff_ID INT PRIMARY KEY,
    NRC VARCHAR(20),
    SfName VARCHAR(50),
    SlName VARCHAR(50),
    DOB DATE,
    Employment_date DATE,
    Service_Type VARCHAR(50),
    current_status VARCHAR(20),
    SPhone_ID INT,
    Location VARCHAR(100)
);

-- CUSTOMER table
CREATE TABLE CUSTOMER (
    Customer_ID INT PRIMARY KEY,
    CfName VARCHAR(50),
    ClName VARCHAR(50),
    CPhone_ID INT,
    email VARCHAR(100),
    Date_Booked DATE,
    Location VARCHAR(100),
    SName VARCHAR(100),
    SPhone_ID INT,
    FOREIGN KEY (SPhone_ID) REFERENCES STAFF(SPhone_ID)
);

-- SERVICE table
CREATE TABLE SERVICE (
    Service_ID INT PRIMARY KEY,
    SName VARCHAR(100),
    Service_Type VARCHAR(50),
    Price DECIMAL(10, 2)
);

-- LOCATION table
CREATE TABLE LOCATION (
    Location_ID INT PRIMARY KEY,
	City VARCHAR(50),
    Town VARCHAR(50),
    Country VARCHAR(50),
    Country_Code VARCHAR(10),
    Coordinate VARCHAR(50)
);
