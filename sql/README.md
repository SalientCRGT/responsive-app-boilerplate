## Prerequisites

* [MySQL](http://www.mysql.com/downloads/)

## Setup 4840w database

Create the user and schema

	Login to mysql as root
	Run the script create_4840w_db.sql to create the database and user
	Logout mysql

Create sample data.

	Login mysql as user 4840w connecting to databasse 4840w
	Run the script create_sample_data.sql to create the tbl_employee sample table

See the data

	Point your browser to http://localhost:8080/rest/findEmployees.php to see the sample execution with JSON
	
