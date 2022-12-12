import pandas as pd


if __name__ == "__main__":
    # fix separators from scraper
    df = pd.read_csv('dolls.csv')

    print(df)

    df.to_csv('dollsredone.csv', sep=";", encoding="utf-8", index=False)



