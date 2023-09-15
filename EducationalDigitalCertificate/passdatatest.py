#!C:\Users\user\AppData\Local\Programs\Python\Python39\python.exe
print("Content-Type: text/html")
print()

import cgi
form = cgi.FieldStorage()
searchterm =  form.getvalue('field_1')
print(searchterm)