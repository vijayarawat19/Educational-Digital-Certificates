import blockchainLib as bl
import mysql.connector

from flask import Flask, request, jsonify

app = Flask(__name__)


@app.route("/", methods=["GET"])
def root():
    return jsonify({"status": True, "msg": "up and running!!!"})


@app.route("/process_form", methods=["POST"])
def process_form():
    try:
        print("Prossing Form data")
        data = request.form.to_dict()  # Convert form data to a dictionary
        print("processing Done, Performing Action")
        print(data) 
        searchterm = data['field_1']
        print('search term:',searchterm,type(searchterm))
        bl.initBlock()
        bl.addNewBlock(searchterm)
        print("Vijaya")
        d=bl.getAllBlocks()
        conn = mysql.connector.connect(host="localhost",user="root",password="",database='sis')
        mycursor = conn.cursor()
        # sql = "UPDATE student SET hashcode =%s WHERE EnrollmentNumber =%s" , (d,searchterm)
        # val=(d,searchterm)
        # mycursor.execute(sql,val)
        mycursor.execute("UPDATE student SET hashcode =%s WHERE EnrollmentNumber =%s" , (d,searchterm))
        conn.commit()
        return jsonify(d), 200
    except Exception as e:
        return jsonify({"error": str(e)}), 400


if __name__ == "__main__":
    app.run(debug=True)
