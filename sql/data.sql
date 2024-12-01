CREATE TABLE Employee (
    employee_id INT AUTO_INCREMENT PRIMARY KEY, 
    last_name VARCHAR(100) NOT NULL,        
    first_name VARCHAR(100) NOT NULL,       
    occupation VARCHAR(100) NOT NULL,      
    years_of_experience INT NOT NULL,        
    expertise VARCHAR(100) NOT NULL      
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE Employee
ADD COLUMN date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL;



insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (1, 'Ogelbe', 'Nevile', 'Doctor', 24, 'Rheumatology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (2, 'Dow', 'Bunnie', 'Occupational Therapist', 32, 'Physical Therapy');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (3, 'Siggee', 'Umberto', 'Chiropractor', 39, 'Cardiology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (4, 'Matiebe', 'Geoffrey', 'Occupational Therapist', 21, 'Pediatrics');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (5, 'Dowman', 'Sven', 'Paramedic', 32, 'Hematology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (6, 'Sawers', 'Torin', 'Psychologist', 45, 'Allergy and Immunology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (7, 'Snewin', 'Dore', 'Dentist', 13, 'Hematology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (8, 'Kinnon', 'Elisabeth', 'Paramedic', 25, 'Allergy and Immunology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (9, 'Dorro', 'Grannie', 'Surgeon', 0, 'Urology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (10, 'Arunowicz', 'Therese', 'Dentist', 30, 'Ophthalmology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (11, 'Tripney', 'Garland', 'Surgeon', 11, 'Neurology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (12, 'Joiner', 'Emory', 'Optometrist', 25, 'Orthopedics');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (13, 'Rodear', 'Basil', 'Speech Therapist', 21, 'Ophthalmology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (14, 'Keyho', 'Giralda', 'Paramedic', 45, 'Ophthalmology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (15, 'Bilsland', 'Micky', 'Optometrist', 27, 'Pediatrics');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (16, 'Gwilliams', 'Hewett', 'Chiropractor', 39, 'Oncology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (17, 'Marfe', 'Cymbre', 'Pharmacist', 26, 'Dermatology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (18, 'Schankelborg', 'Lalo', 'Medical Technologist', 0, 'Neurology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (19, 'Cauthra', 'Kerk', 'Pharmacist', 13, 'Orthopedics');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (20, 'Cappel', 'Lanny', 'Surgeon', 39, 'Hematology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (21, 'Scholling', 'Orelee', 'Speech Therapist', 28, 'Oncology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (22, 'Lennon', 'Dewain', 'Medical Assistant', 10, 'Hematology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (23, 'Sehorsch', 'Vittorio', 'Doctor', 3, 'Neurology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (24, 'Lewcock', 'Orelie', 'Dietitian', 47, 'Psychiatry');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (25, 'Goosey', 'Borg', 'Nurse', 31, 'Orthopedics');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (26, 'Fronzek', 'Barbette', 'Speech Therapist', 30, 'Nephrology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (27, 'Benitez', 'Odo', 'Paramedic', 30, 'Physical Therapy');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (28, 'Ekell', 'Quinlan', 'Pharmacist', 20, 'Cardiology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (29, 'Gilhouley', 'Ernestus', 'Medical Assistant', 18, 'Endocrinology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (30, 'MacFarlan', 'Imogen', 'Doctor', 11, 'Physical Therapy');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (31, 'Skeldon', 'Hatty', 'Radiologist', 33, 'Nephrology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (32, 'Dawdry', 'Tremayne', 'Emergency Medical Technician', 32, 'Cardiology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (33, 'Ladel', 'Barri', 'Nurse', 21, 'Dermatology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (34, 'Janicek', 'Karina', 'Dentist', 13, 'Pediatrics');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (35, 'Tireman', 'Courtenay', 'Emergency Medical Technician', 21, 'Nephrology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (36, 'Edlestone', 'Enrichetta', 'Paramedic', 36, 'Endocrinology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (37, 'Chugg', 'Pauline', 'Paramedic', 12, 'Rheumatology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (38, 'Essery', 'Gerard', 'Surgeon', 16, 'Gastroenterology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (39, 'Gookes', 'Arabel', 'Dietitian', 21, 'Cardiology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (40, 'Alekseev', 'Rebekah', 'Pharmacist', 23, 'Allergy and Immunology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (41, 'Lanigan', 'Celestia', 'Optometrist', 4, 'Ophthalmology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (42, 'Perritt', 'Lucine', 'Health Educator', 13, 'Gastroenterology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (43, 'Bortolutti', 'Tremaine', 'Paramedic', 17, 'Allergy and Immunology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (44, 'Widdowes', 'Delphinia', 'Surgeon', 21, 'Rheumatology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (45, 'Duffin', 'Dom', 'Paramedic', 31, 'Pulmonology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (46, 'Molyneux', 'Bridget', 'Chiropractor', 10, 'Urology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (47, 'Flode', 'Winonah', 'Chiropractor', 32, 'Hematology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (48, 'Sealove', 'Benedick', 'Paramedic', 33, 'Physical Therapy');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (49, 'Gabbott', 'Deeanne', 'Doctor', 5, 'Urology');
insert into employee (employee_id, last_name, first_name, occupation, years_of_experience, expertise) values (50, 'Geraldo', 'Misha', 'Chiropractor', 50, 'Pulmonology');