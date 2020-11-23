import csv
import sys

userinput = str(sys.argv[1])
userinput = userinput.lower()

faculty = []

with open('STAFF.DIRECTORY.CSV') as csvFile:
	csvReader = csv.reader(csvFile, delimiter="|")
	for row in csvReader:
		faculty.append(row)

i = 0
while i != 300:
	lastName = faculty[i][1]
	firstName = faculty[i][2]
	fullName = (firstName + " " + lastName)
	email = faculty[i][4]
	phone = faculty[i][3]
	position = faculty[i][6]
	department = faculty[i][5]
	if userinput in fullName.lower() or userinput in firstName.lower() or userinput in lastName.lower() or userinput in department.lower() or userinput in position.lower():
		print("<li>")
		print("<h3>" + firstName + " " + lastName + "</h3>" + "<p>" +  position + ", " +  department + "</p><p>" + email + " " + phone + "</p>")
		print("</li>")
	i += 1
