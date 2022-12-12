from scrapy.spiders import CrawlSpider, Rule
from scrapy.linkextractors import LinkExtractor


class DollScraper(CrawlSpider):
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

        product = response.css('div.column.column--12.column--12-full.slot.slot--0')
        category = product.css('li.element.element--simple-link:nth-child(4) > a').attrib['title']

        product = response.css('div.zoom.box-gallery__image-content')
        image_url = product.css('div.image img').attrib['src']

        product = response.css('div.box-attributes__cover')

        name = product.css('span.box-attributes-list__atribute--header::text').get()
        if '#' in name:
            name = name.replace('#', 'nr ')
        brand = ''.join(product.css('a.text-btn span::text').get())

        price = ''.join(product.css('span.price__new::text').get().replace(' zł', '').replace(",", "."))
        active = 1

        if price == '':
            price = 0
            active = 0

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
            'Description': desc,
            'Quantity': 500,
            'Image URLs (x,y,z...)': image_url,
            'Brand': brand
        }
