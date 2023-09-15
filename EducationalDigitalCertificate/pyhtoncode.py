# !C:\Users\user\AppData\Local\Programs\Python\Python37\python.exe

# import required modules
import mysql.connector

# create connection object
include("db.inc.php");


# create cursor object
cursor = conn.cursor()

# assign data query
query1 = "desc student"

# executing cursor
cursor.execute(query1)

# display all records
table = cursor.fetchall()

# describe table
print('\n Table Description:')
for attr in table:
	print(attr)

# assign data query
query2 = "select * from student"

# executing cursor
cursor.execute(query2)

# display all records
table = cursor.fetchall()

# fetch all columns
print('\n Table Data:')
for row in table:
	print(row[0], end=" ")
	print(row[1], end=" ")
	print(row[2], end=" ")
	print(row[3], end="\n")
	
# closing cursor connection
cursor.close()

# closing connection object
con.close()
