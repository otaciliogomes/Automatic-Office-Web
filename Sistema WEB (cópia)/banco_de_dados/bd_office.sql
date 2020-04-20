CREATE DATABASE AutomaticOficce

USE AutomaticOficce

CREATE TABLE Cliente(
    ID INT not null IDENTITY(1,1)
    ,Nome VARCHAR not null
    ,CPF INT not null
    ,RG INT not null
    ,DtNascimento DATETIME not null
    ,Telefone INT 
    ,Celular INT not null
    ,Email VARCHAR
    ,Endereço VARCHAR
    ,Numero INT
    ,CEP INT
    ,Complemento VARCHAR
    ,EstCivil VARCHAR 
    ,CONSTRAINT pkCliente PRIMARY KEY(ID)
    ,CONSTRAINT ckEstCivil CHECK(EstCivil LIKE 'Solteiro' OR EstCivil LIKE 'Divorciado' OR EstCivil LIKE 'Separado' OR EstCivil LIKE 'Casado' OR EstCivil LIKE 'Viúvo')
)


CREATE TABLE Advogado(
    ID INT not null IDENTITY(1,1)
    ,Nome VARCHAR not null
    ,Num_Oab INT not null 
    ,CPF INT not null
    ,RG INT not null
    ,Telefone INT 
    ,Celular INT not null
    ,Email VARCHAR
    ,CONSTRAINT pkAdvogado PRIMARY KEY(ID)
)

CREATE TABLE Oficio (
    ID INT not null IDENTITY(1,1)
    ,ID_Advogado INT not null
    ,ID_Cliente INT not null
    ,Dt_Ini_Processo DATETIME CONSTRAINT dfEstCivil DEFAULT (GETDATE())
    ,Tipo_Caso VARCHAR not null
    ,Descricao VARCHAR
    ,CONSTRAINT pkOficio PRIMARY KEY(ID)
    ,CONSTRAINT fkID_Cliente FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID)
    ,CONSTRAINT fkID_Advogado FOREIGN KEY (ID_Advogado) REFERENCES Advogado(ID)
)


select * from AutomaticOficce