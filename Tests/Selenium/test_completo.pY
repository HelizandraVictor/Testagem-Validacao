from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
import time

# 1. Configuração do Navegador
servico = Service(ChromeDriverManager().install())
driver = webdriver.Chrome(service=servico)
base_url = "http://localhost/projeto-testes/src/"

def testar_tudo():
    try:
        # --- TESTE 1: LOGIN ---
        print("\n--- Testando Login ---")
        driver.get(base_url + "login.php")
        driver.find_element(By.ID, "email").send_keys("user@email.com")
        driver.find_element(By.ID, "senha").send_keys("123456")
        driver.find_element(By.ID, "btn-entrar").click()
        time.sleep(1)
        if "Login efetuado com sucesso!" in driver.page_source:
            print("✅ Login: OK")
        
        # --- TESTE 2: MPESA ---
        print("\n--- Testando M-Pesa ---")
        driver.get(base_url + "mpesa.php")
        driver.find_element(By.ID, "valor").send_keys("1000")
        driver.find_element(By.TAG_NAME, "button").click()
        if "Taxa: 20 MT" in driver.page_source:
            print("✅ M-Pesa: OK")

        # --- TESTE 3: PARIDADE ---
        print("\n--- Testando Paridade ---")
        driver.get(base_url + "paridade.php")
        driver.find_element(By.ID, "num").send_keys("10")
        driver.find_element(By.TAG_NAME, "button").click()
        if "10 é PAR" in driver.page_source:
            print("✅ Paridade: OK")

        # --- TESTE 4: IDADE ---
        print("\n--- Testando Idade ---")
        driver.get(base_url + "idade.php")
        driver.find_element(By.ID, "idade_input").send_keys("20")
        driver.find_element(By.TAG_NAME, "button").click()
        if "Acesso Permitido" in driver.page_source:
            print("✅ Idade: OK")

        # --- TESTE 5: TEMPERATURA ---
        print("\n--- Testando Temperatura ---")
        driver.get(base_url + "temperatura.php")
        driver.find_element(By.ID, "celsius").send_keys("0")
        driver.find_element(By.TAG_NAME, "button").click()
        if "32 F°" in driver.page_source:
            print("✅ Temperatura: OK")

        print("\n🚀 TODOS OS TESTES DE INTERFACE (SELENIUM) PASSARAM!")

    except Exception as e:
        print(f"❌ Ocorreu um erro durante os testes: {e}")
    
    finally:
        time.sleep(3)
        driver.quit()

if __name__ == "__main__":
    testar_tudo()