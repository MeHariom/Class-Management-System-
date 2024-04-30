CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time_in TIME NOT NULL,
    time_out TIME NOT NULL,
    program VARCHAR(50) NOT NULL,
    semester VARCHAR(50) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    topic VARCHAR(255) NOT NULL,
    class_taken VARCHAR(255) NOT NULL,
    experience VARCHAR(50) NOT NULL,
    payment INT NOT NULL
);
