import csv 
import json 


import re

def generateDriveUrl(url):
    pattern = r'id=([a-zA-Z0-9-_]+)'
    match = re.search(pattern, url)
    if match:
        return f"https://drive.google.com/thumbnail?id={match.group(1)}&sz=w1000"
    else:
        return None

# Function to convert a CSV to JSON 
# Takes the file paths as arguments 
def make_json(csvFilePath, jsonFilePath): 
      
    # create a dictionary 
    
    ls=[] 
    # Open a csv reader called DictReader 
    with open(csvFilePath, 'r', encoding='utf-8',) as csvf: 
        csvReader = csv.reader(csvf) 
          
        # Convert each row into a dictionary  
        # and add it to data 
        for rows in csvReader: 
            data = {} 
            data['name'] = rows[0]
            data['role'] = rows[1]
            data['email'] = rows[2]
            data['whatsapp'] = rows[3]
            data['fb'] = rows[4]
            data['instagram'] = rows[5]
            data['linkedin'] = rows[6]
            data['image'] = generateDriveUrl(rows[7])

            ls.append(data)

  
    # Open a json writer, and use the json.dumps()  
    # function to dump data 
    with open(jsonFilePath, 'w', encoding='utf-8') as jsonf: 
        jsonf.write(json.dumps(ls, indent=4)) 
          
# Driver Code 
  
# Decide the two file paths according to your  
# computer system 
csvFilePath = r'PG_Team_2024.csv'
jsonFilePath = r'swc_pg_team_2024.json'
  
# Call the make_json function 
make_json(csvFilePath, jsonFilePath)
