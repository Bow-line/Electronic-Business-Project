# Define here the models for your scraped items
#
# See documentation in:
# https://docs.scrapy.org/en/latest/topics/items.html

from scrapy import Item, Field


class DollItem(Item):
    name = Field()
    price = Field()
    url = Field()
    image_url = Field()
    brand = Field()


    
