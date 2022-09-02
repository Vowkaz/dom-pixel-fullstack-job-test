# Fullstack Job Test - DomPixel

### 📝 Readme do Repositório
 
- Deve conter o título do projeto
- Uma descrição do projeto
- Instruções de como executar o projeto de maneira detalhada e especifica de cada parte (frontend e backend)
- Se durante o processo de desenvolvimento não conseguiu fazer algo, explique qual o impedimento que encontrou e como tentou resolver em uma seção "Dificuldades"

## API desenvolvida para criaçao de produtos num banco de dados, junto a possibilidade de editar e remover.

#### 🆕 Criação de produto

Tem objetivo da criação de produtos novos no banco de dados.
Nesta tela devemos adicionar os seguintes campos:

        - Nome (obrigatório)
        - Categoria (obrigatório)
        - Preço (obrigatório e em numerico)

#### 📄 Listar produtos

Nesta tela temos os seguintes campos:

        - Nome
        - Categoria
        - Preço
        - Data de criação (Data do upload do produto)

Junto aos botoes de ações (Botões Editar e Excluir)

#### 📝 Editar produto

Ao clicar no botao de editar, abre a tela para poder editar os campos necessario

        - Nome
        - Categoria
        - Preço

#### ❌ Remover produto

Ao clicar no botao de remoçao, o produto selecionado sera excluido do banco de dados e ja atualizado na listagem.

### ✅ Endpoints
 
- Apara usar a API REST usando PHP (LARAVEL) com os seguintes endpoints:
      
     `GET /`: Retorna um Status: 200 e uma Mensagem "API Fullstack Job Test - DomPixel running"

     `GET /products`: Listar todos os produtos da base de dados
     
     `POST /products/create`: O endpoint servirá para inserir novos dados na tabela de produtos que serão enviados pelo frontend, que serão: nome, categoria e preço
     
     `PUT /products/:productId/edit`: Será responsável por receber atualizações de um produto especifico enviados pelo frontend
     
     `DELETE /products/:productId`: Remover o produto da base de dados


### ❌ Dificuldades 

- Uma grande dificuldade foi o fator tempo, agradeço ao Anderson por tirar o critério de vue e deixar o uso do blade facilitando muito mais a produçao da Api.
