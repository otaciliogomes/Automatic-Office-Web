class Cliente:
    def __init__(self, nome, cpf, rg, dtnascimento, telefone, celular, email, endereco, numero, cep, complemento, estcivil):
        self.nome = nome
        self.cpf = cpf
        self.rg = rg
        self.dtnascimento = dtnascimento
        self.telefone = telefone
        self.celular = celular
        self.email = email
        self.endereco = endereco
        self.numero = numero
        self.cep = cep
        self.complemento = complemento
        self.estcivil = estcivil

    def exibir_dados_cliente(self):
        print(self.nome = nome)
        print(self.cpf = cpf)
        print(self.rg = rg)
        print(self.dtnascimento = dtnascimento)
        print(self.telefone = telefone)
        print(self.celular = celular)
        print(self.email = email)
        print(self.endereco = endereco)
        print(self.numero = numero)
        print(self.cep = cep)
        print(self.complemento = complemento)
        print(self.estcivil = estcivil)


class Advogado:
    def __init__(self, nome, num_oab, cpf, rg, telefone, celular, email):
        self.nome = nome
        self.num_oab = num_oab
        self.cpf = cpf
        self.rg = rg
        self.telefone = telefone
        self.celular = celular
        self.email = email

    def exibir_dados_advogado(self):
        print(self.nome = nome)
        print(self.num_oab = num_oab)
        print(self.cpf = cpf)
        print(self.rg = rg)
        print(self.telefone = telefone)
        print(self.celular = celular)
        print(self.email = email)


class Oficio:
    def __init__(self, id_adv, id_cliente, dt_ini_processo, tipo, descicao):
        self.id_avd = id_adv
        self.id_cliente = id_cliente
        self.dt_ini_processo = dt_ini_processo
        self.tipo = tipo
        self.descicao = descicao

    def exibir_oficio(self):
        self.id_avd = id_adv
        self.id_cliente = id_cliente
        self.dt_ini_processo = dt_ini_processo
        self.tipo = tipo
        self.descicao = descicao
