import csv 
import json 
import requests
import os
import gdown

def download_photo_from_drive(drive_link, output_dir, file_name):
    try:
        # response = requests.get(drive_link)
        # file_id = drive_link.split('/')[-2]
        
        response = requests.get(drive_link)
        # 3. Open the response into a new file called instagram.ico
        print(drive_link)
        open(output_dir+file_name, "wb").write(response.content)
        print(f"Downloaded: {file_name}.jpeg")
        # else:
        #     print(f"Failed to download: {drive_link}")
    except Exception as e:
        print(f"Error occurred while downloading {drive_link}: {e}")

# Function to convert a CSV to JSON 
# Takes the file paths as arguments 
def make_json(csvFilePath, jsonFilePath): 
      
    # create a dictionary 
    
    ls=[] 
    # Open a csv reader called DictReader 
    with open(csvFilePath, 'r', encoding='unicode_escape',) as csvf: 
        csvReader = csv.reader(csvf) 
          
        # Convert each row into a dictionary  
        # and add it to data 
        for rows in csvReader: 
            data = {} 
            data['name'] = rows[0]
            data['email'] = rows[1]
            data['roll'] = rows[2]
            data['birthday'] = rows[3]
            data['about'] = rows[4]
            data['place'] = rows[5]
            data['branch'] = rows[6]
            data['image'] = rows[7]
            data['whatsapp'] = rows[8]
            data['fb'] = rows[9]
            data['instagram'] = rows[10]
            data['linkedin'] = rows[11]

            # download_photo_from_drive(rows[7], 'team_2023_images/PG/', rows[2])
            # print("Downloaded")

            ls.append(data)
            # Assuming a column named 'No' to 
            # be the primary key 

  
    # Open a json writer, and use the json.dumps()  
    # function to dump data 
    with open(jsonFilePath, 'w', encoding='utf-8') as jsonf: 
        jsonf.write(json.dumps(ls, indent=4)) 
          
# Driver Code 
  
# Decide the two file paths according to your  
# computer system 
csvFilePath = r'PG_TEAM_2023.csv'
jsonFilePath = r'swc_pg_team_2023.json'
  
# Call the make_json function 
make_json(csvFilePath, jsonFilePath)