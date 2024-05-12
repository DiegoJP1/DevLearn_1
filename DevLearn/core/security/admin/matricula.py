import random
import string

def generar_matricula():
    caracteres_permitidos = string.ascii_uppercase + string.digits
    matricula = ''.join(random.choices(caracteres_permitidos, k=random.randint(5, 10)))
    
    return matricula
matricula1 = generar_matricula()
matricula2 = generar_matricula()

print(matricula1)
print(matricula2)

