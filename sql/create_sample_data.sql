DROP TABLE IF EXISTS tbl_employee;

CREATE TABLE IF NOT EXISTS tbl_employee (
  employee_id int(4) NOT NULL AUTO_INCREMENT,
  employee_name varchar(60) NOT NULL,
  designation varchar(30) NOT NULL,
  hired_date date NOT NULL,
  salary int(10) NOT NULL,
  PRIMARY KEY (employee_id)
);

INSERT INTO tbl_employee (employee_id, employee_name, designation, hired_date, salary) VALUES (1, 'Steve', 'VP', '2013-08-01', 60000);
INSERT INTO tbl_employee (employee_id, employee_name, designation, hired_date, salary) VALUES (2, 'Robert', 'Executive', '2014-10-09', 20000);
INSERT INTO tbl_employee (employee_id, employee_name, designation, hired_date, salary) VALUES (3, 'Luci', 'Manager', '2013-08-20', 40000);
INSERT INTO tbl_employee (employee_id, employee_name, designation, hired_date, salary) VALUES (4, 'Joe', 'Executive', '2013-06-01', 25000);
INSERT INTO tbl_employee (employee_id, employee_name, designation, hired_date, salary) VALUES (5, 'Julia', 'Trainee', '2014-10-01', 10000);

COMMIT;


