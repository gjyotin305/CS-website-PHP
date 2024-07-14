import json
import pandas as pd

f = open("./cs/swc_ug_team_2023.json")

df = pd.read_csv("swc_ah.csv")
data = json.load(f)

check = {}

for index, rows in df.iterrows():
    check[str(rows["Name"]).lower().replace(" ", "")] = str(rows["Photo"]).split('=')[-1]

print(check)

txt_format = "https://drive.google.com/thumbnail?id={id}&sz=w1000"

for dx in data:
    if str(dx["name"]).lower().replace(" ", "") in check:
        dx["image"] = txt_format.format(
            id=check[str(dx["name"]).lower().replace(" ", "")]
        )

f = open("./cs/swc_ug_team_2023.json", "w")

json.dump(data, f, indent=4)