#!C:\Users\user\AppData\Local\Programs\Python\Python39\python.exe
print()
print ("""
    <TITLE>CGI script ! Python</TITLE>
    
""")

import mysql.connector

conn = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database='sis')
mycursor = conn.cursor()
a='Valley 345'
b=123
sql = "UPDATE student SET hashcode = %s WHERE EnrollmentNumber = %s"
val = (a,b)

mycursor.execute(sql, val)

conn.commit()

print("record inserted.")
print("hello")