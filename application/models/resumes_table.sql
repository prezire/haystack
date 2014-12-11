CREATE TABLE resumes(id INT NOT NULL AUTO_INCREMENT,
full_name VARCHAR(255) NOT NULL,
headline VARCHAR(255) NOT NULL,
address TEXT NOT NULL,
city VARCHAR(255) NOT NULL,
state VARCHAR(255) NOT NULL,
country VARCHAR(255) NOT NULL,
landline VARCHAR(255) NOT NULL,
mobile VARCHAR(255) NOT NULL,
availability VARCHAR(255) NOT NULL,
expected_salary INT NOT NULL,
current_industry VARCHAR(255) NOT NULL,
qualification VARCHAR(255) NOT NULL,
summary TEXT NOT NULL,
PRIMARY KEY (id))