import requests
import pandas as pd

url = "https://www.timeshighereducation.com/sites/default/files/the_data_rankings/world_university_rankings_2023_0__83be12210294c582db8740ee29673120.json"

headers = {
    "accept": "application/json, text/javascript, */*; q=0.01",
    "user-agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 OPR/98.0.0.0 (Edition std-1)"
}
res = requests.get(url, headers=headers).json()
rows = res["data"]

data=[]
no=0
for i in range(0, len(rows)):
    no+=1
    rank             = rows[i]['rank']
    name             = rows[i]['name']
    location         = rows[i]['location']
    ova              = rows[i]['scores_overall']
    teaching         = rows[i]['scores_teaching']
    rank_teaching    = rows[i]['scores_teaching_rank']
    research         = rows[i]['scores_research']
    rank_research    = rows[i]['scores_research_rank']
    citation         = rows[i]['scores_citations']
    rank_citation    = rows[i]['scores_citations_rank']
    income           = rows[i]['scores_industry_income']
    rank_income      = rows[i]['scores_industry_income_rank']
    intl             = rows[i]['scores_international_outlook']
    rank_intl        = rows[i]['scores_international_outlook_rank']
    # tambahkan ranking disetiap score
    data.append(
        (no, rank, name, location, ova, teaching, rank_teaching, research, rank_research, citation, rank_citation,  income,rank_income, intl, rank_intl)
    )

df = pd.DataFrame(data, columns=['No', 'Rank', 'University Name', 'Location', 'Score_ova', 'Teaching', "Teaching Rank", 'Research', "Research Rank", 'Citations', "Citations Rank", 'Industry Income', "Industry Income Rank", 'International Outlook', "International Outlook Rank"])
print(df)

df.to_excel("THE_Ranking.xlsx", index=False)
print("Data berhasil disimpan ke Excel")