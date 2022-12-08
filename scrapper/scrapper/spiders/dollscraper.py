from scrapy.spiders import CrawlSpider, Rule
from scrapy.linkextractors import LinkExtractor

id_count = 0


# class DollScraper(scrapy.Spider):
#     name = "doll"
#     allowed_domains = ['www.smyk.com']
#     start_urls = ["https://www.smyk.com/zabawki-gry/lalki-i-akcesoria/lalki-celebrytki.html"]
#
#     def parse(self, response):
#         global id_count
#         for products in response.css('div.complex-product'):
#             id_count += 1
#             yield {
#                 'ID': id_count,
#                 'Active (0/1)': 1,
#                 'Name *': products.css('div.complex-product__name::text').get(),
#                 'Categories (x,y,z...)': None,
#                 'Cost price': products.css('span.price--new::text').get().replace(' zł', ''),
#                 'Image URLs (x,y,z...)': products.css('div.image.complex-product__image-content img').attrib['data-src']
#             }
#
#         next_page = response.css('li.pagination__next a').attrib['href']
#         if next_page is not None:
#             yield response.follow(next_page, callback=self.parse)


class DollDetailScraper(CrawlSpider):
    name = "doll"
    allowed_domains = ['www.smyk.com']
    start_urls = ["https://www.smyk.com/zabawki-gry/lalki-i-akcesoria/lalki-celebrytki.html?limit=108",
                  "https://www.smyk.com/zabawki-gry/lalki-i-akcesoria/lalki-celebrytki.html?limit=108&p=2",
                  "https://www.smyk.com/zabawki-gry/lalki-i-akcesoria/bobasy.html?limit=108",
                  "https://www.smyk.com/zabawki-gry/lalki-i-akcesoria/ksiezniczki-i-wrozki.html?limit=72",
                  "https://www.smyk.com/zabawki-gry/lalki-i-akcesoria/mini-lalki-i-zwierzaki.html?limit=108",
                  "https://www.smyk.com/zabawki-gry/lalki-i-akcesoria/akcesoria-dla-lalek.html?limit=108"]

    rules = (
        Rule(LinkExtractor(restrict_css=".complex-product > a"), callback="parse_doll"),
    )

    def parse_doll(self, response):
        global id_count
        id_count += 1

        product = response.css('div.column.column--12.column--12-full.slot.slot--0')
        category = product.css('li.element.element--simple-link:nth-child(4) > a').attrib['title']

        product = response.css('div.zoom.box-gallery__image-content')
        image_url = product.css('div.image img').attrib['src']

        product = response.css('div.box-attributes__cover')

        name = product.css('span.box-attributes-list__atribute--header::text').get()
        if '#' in name:
            name = name.replace('#', 'nr ')

        price = ''.join(product.css('span.price__new::text').get().replace(' zł', '').replace(",", "."))
        active = 1

        if price == '':
            price = 0
            price_taxexc = 0
            active = 0
        else:
            price_taxexc = str(round(float(price) / 1.22, 2))

        product = response.css('div.publication.slot__tabs.static--review-popup')
        desc = product.css('div.box-attributes__simple p:nth-child(1)').get().replace('<strong>', '')\
            .replace('</strong>', '').replace('<p>', '').replace('</p>', ' ').replace('\xa0', ' ').replace('\u200b', '')\
            .replace('<span class="box-attributes-list__atribute--S">', '').replace('\n', '').replace('</span>', '')\
            .replace('<ul>', '').replace('\t', '').replace('<li>', '').replace('</ul>', '').replace('</li>', ' ')

        if desc == '':
            desc = 'Brak opisu.'

        yield {
            'Active (0/1)': active,
            'Name *': name,
            'Categories (x,y,z...)': 'Lalki/' + category,
            'Price with tax': price,
            'Tax ID': 1,
            'Price without tax': price_taxexc,
            'Description': desc,
            'Quantity': 500,
            'Image URLs (x,y,z...)': image_url
        }
