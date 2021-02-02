# Api - Gestana

## Tecnologias Usadas

- Laravel
- Postgres
- REST
## Objetivo

Desenvolver uma API REST para gestao de produtos. A API deve possibilitar todo o gerenciamento de estoque dos produtos, para isso os seguintes endpoints devem ser implementados:

1. Adicionar produtos ao estoque

    Esta rota insere um novo registro na tabela _produtos_.
    - Request
        ```bash
        POST http://localhost:8080/api/produtos 
        ```
    - Body
        ```json
        {
            "nome": "Macbook 13\" 8GB|256SSD|2.7Ghz",
            "valor_unitario": 8450.0,
            "qtde_estoque": 5
        }
        ```
    - Retornos possíveis

        Código | Resposta
        ------------ | -------------
        `201 (Criado)` | `Produto cadastrado ` 
        `400 (Requisição inválida)` | `Ocorreu um erro desconhecido`

2. Listar produtos

    Esta rota lista todos os produtos *disponíveis*.
    - Request
        ```bash
        GET http://localhost:8080/api/produtos
        ```
    - Retornos possíveis

        Retornar um array com todos os produtos cadastrados. Atributos: nome, valor unitário, quantidade em estoque.

        Código | Resposta
        ------------ | -------------
        `200 (OK)` | [] 
        `400 (Requisição inválida)` | `Ocorreu um erro desconhecido`

3. Detalhar um produto

    Esta rota obtém um produto específico por seu id, os dados de retorno são id, nome, valor unitário, quantidade em estoque;
    - Request 
        ```bash
        GET http://localhost:8080/api/produtos/:produto_id
        ```
    - Retornos possíveis

        Retornar um objeto com atributos: nome, valor unitário, quantidade em estoque.

        Código | Resposta
        ------------ | -------------
        `200 (OK)` | {}
        `400 (Requisição inválida)` | `Ocorreu um erro desconhecido`


4. Remover um produto do estoque

    Esta rota remove um produto da base de dados.
    - Request 
        ```bash
        DELETE http://localhost:8080/api/produtos/produto_id
        ```
    - Retornos possíveis

        Código | Resposta
        ------------ | -------------
        `204 (Nenhum conteúdo) ` | `Produto excluído com sucesso` 
        `400 (Requisição inválida)` | `Ocorreu um erro desconhecido`

