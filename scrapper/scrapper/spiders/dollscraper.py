from scrapy.spiders import CrawlSpider, Rule
from scrapy.linkextractors import LinkExtractor
from ..items import DollItem
import scrapy


class DollScraper(scrapy.Spider):
    name = "doll"
    allowed_domains = ['www.smyk.com']
    start_urls = ["https://www.smyk.com/zabawki-gry/lalki-i-akcesoria/lalki-celebrytki.html"]

    def parse(self, response):
        for products in response.css('div.complex-product'):
            yield {
                'name': products.css('div.complex-product__name::text').get(),
                'brand': products.css('div.complex-product__name::text').get().partition(',')[0],
                'price': products.css('span.price--new::text').get().replace(' zł', ''),
                'url': products.css('a.complex-product__link-wrapper').attrib['href'],
                'image_url': products.css('div.image.complex-product__image-content img').attrib['data-src']
            }

        next_page = response.css('li.pagination__next a').attrib['href']
        if next_page is not None:
            yield response.follow(next_page, callback=self.parse)
