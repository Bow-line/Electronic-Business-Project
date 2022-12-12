import random
import string
from time import sleep
from selenium import webdriver
from selenium.webdriver.common.by import By


def get_random_string(letters):
    ret = ''.join(random.sample(string.ascii_lowercase, letters))
    return ret


if __name__ == "__main__":
    driver = webdriver.Firefox()
    driver.maximize_window()
    driver.get("http://localhost:80")
    sleep(5)
    # stwórz konto
    driver.find_element(By.CLASS_NAME, "user-info").click()
    driver.find_element(By.LINK_TEXT, "Nie masz konta? Załóż je tutaj").click()
    sleep(2)
    driver.find_element(By.ID, "field-id_gender-" + str(random.randint(1, 2))).click()
    driver.find_element(By.ID, "field-firstname").send_keys(get_random_string(random.randint(4, 10)))
    driver.find_element(By.ID, "field-lastname").send_keys(get_random_string(random.randint(4, 10)))
    driver.find_element(By.ID, "field-email").send_keys(get_random_string(random.randint(4, 10)) + "@gmail.com")
    driver.find_element(By.ID, "field-password").send_keys(get_random_string(10))
    driver.find_element(By.NAME, "customer_privacy").click()
    driver.find_element(By.NAME, "psgdpr").click()
    driver.find_element(By.CLASS_NAME, "form-control-submit").click()
    sleep(2)

    # załadowanie pierwszej kategorii
    driver.find_element(By.ID, 'category-3').click()
    driver.find_element(By.LINK_TEXT, 'Lalki celebrytki').click()

    # dodanie 5 produktów
    for product in range(5):
        products = driver.find_elements(By.CLASS_NAME, "product")
        products[product].click()
        for _ in range(random.randint(0, 3)):
            sleep(2)
            driver.find_element(By.CLASS_NAME, "bootstrap-touchspin-up").click()
        driver.find_element(By.CLASS_NAME, "add-to-cart").click()
        sleep(2)
        driver.find_element(By.ID, 'blockcart-modal').click()
        sleep(2)
        driver.find_element(By.ID, 'category-3').click()
        driver.find_element(By.LINK_TEXT, 'Lalki celebrytki').click()

    # załadowanie drugiej kategorii
    driver.find_element(By.ID, 'category-3').click()
    driver.find_element(By.LINK_TEXT, 'Mini lalki i zwierzaki').click()

    # dodanie kolejnych 5 produktów
    for product in range(3):
        products = driver.find_elements(By.CLASS_NAME, "product")
        products[product].click()
        for _ in range(random.randint(0, 3)):
            driver.find_element(By.CLASS_NAME, "bootstrap-touchspin-up").click()
        driver.find_element(By.CLASS_NAME, "add-to-cart").click()
        sleep(2)
        driver.find_element(By.ID, 'blockcart-modal').click()
        sleep(2)
        driver.find_element(By.ID, 'category-3').click()
        driver.find_element(By.LINK_TEXT, 'Mini lalki i zwierzaki').click()

    # usunięcie elementu z koszyka
    driver.find_element(By.ID, "_desktop_cart").click()
    driver.find_element(By.CLASS_NAME, "remove-from-cart").click()
    sleep(2)

    # wypełnienie adresu zamówienia
    driver.find_element(By.CLASS_NAME, "cart-detailed-actions").click()
    driver.find_element(By.ID, "field-address1").send_keys(get_random_string(random.randint(8, 16)) + str(random.randint(1, 15)))
    driver.find_element(By.ID, "field-postcode").send_keys(str(random.randint(10, 99)) + '-' + str(random.randint(100, 999)))
    driver.find_element(By.ID, "field-city").send_keys(get_random_string(random.randint(8, 16)))
    sleep(2)
    driver.find_element(By.NAME, "confirm-addresses").click()
    sleep(2)

    # wybór sposobu dostawy
    driver.find_element(By.ID, "delivery_option_9").click()
    driver.find_element(By.NAME, "confirmDeliveryOption").click()
    sleep(3)

    # wybór płatności
    driver.find_element(By.ID, "payment-option-1").click()
    driver.find_element(By.ID, "conditions_to_approve[terms-and-conditions]").click()
    driver.find_element(By.CLASS_NAME, "btn.btn-primary.center-block").click()
    sleep(5)

    # sprawdzenie stanu zamówienia
    driver.find_element(By.CLASS_NAME, "account").click()
    driver.find_element(By.ID, "history-link").click()
    sleep(5)

    driver.quit()
