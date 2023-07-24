import os
import csv
import requests
import pandas as pd

def download_photo_from_drive(drive_link, output_dir):
    try:
        response = requests.get(drive_link)
        if response.status_code == 200:
            file_name = os.path.join(output_dir, os.path.basename(drive_link))
            with open(file_name, 'wb') as f:
                f.write(response.content)
            print(f"Downloaded: {file_name}")
        else:
            print(f"Failed to download: {drive_link}")
    except Exception as e:
        print(f"Error occurred while downloading {drive_link}: {e}")

def main(csv_file_path, output_dir):
    # Create the output directory if it doesn't exist
    if not os.path.exists(output_dir):
        os.makedirs(output_dir)

    # Read the CSV file
    df = pd.read_csv(csv_file_path)

    # Assuming the Drive link column in the CSV is named "DriveLink"
    drive_links = df["PHOTO"]

    # Download photos from each Drive link
    for drive_link in drive_links:
        download_photo_from_drive(drive_link, output_dir)

# Replace 'input.csv' with the path to your CSV file and 'output_dir' with the desired output directory.
csv_file_path = 'PG_TEAM_2023.csv'
output_dir = 'team_2023_images/PG/'
main(csv_file_path, output_dir)
