# Math-X

Math-X é uma aplicação desenvolvida em Laravel que permite gerar exercícios matemáticos de soma, subtração, multiplicação e divisão de forma simplificada. 

O foco da MathX é educacional, ajudando professores e pais a criarem atividades para crianças praticarem operações matemáticas. A aplicação permite configurar o intervalo de números utilizados nos cálculos, bem como a quantidade total de contas a serem geradas. Ao final, é possível gerar uma página com opções para impressão e download do material.



https://github.com/user-attachments/assets/37ea5e21-b3df-4afb-9c1e-049ed8a73371



## Recursos

- Gera operações matemáticas de soma, subtração, multiplicação e divisão.
- Permite definir o intervalo de números utilizados nos cálculos.
- Configuração da quantidade total de exercícios gerados.
- Interface intuitiva para geração e visualização dos exercícios.
- Opção para impressão e download dos exercícios.

## Instalação

Para rodar a aplicação localmente, siga os passos abaixo:

1. Clone este repositório:
   ```sh
   git clone https://github.com/seu-usuario/mathx.git
   cd mathx
   ```
2. Instale as dependências do Laravel:
   ```sh
   composer install
   ```
3. Configure o arquivo `.env`:
   ```sh
   cp .env.example .env
   ```
   Abra o `.env` e configure:
   ```sh
   APP_NAME=MathX

   APP_URL=http://mathx.test

   SESSION_DRIVER=file
   ```
   Comente os arquivos referentes a base de dados caso ache necessário:
   ```sh
    # APP_MAINTENANCE_STORE=database
   
    # DB_CONNECTION=sqlite
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=laravel
    # DB_USERNAME=root
    # DB_PASSWORD=
    ```
   
5. Compile os assets (se aplicável):
   ```sh
   composer run dev
   ```
   Ou, caso esteja utilizando npm:
   ```sh
   npm run dev
   ```
6. Inicie o servidor local:
   ```sh
   php artisan serve
   ```
   Ou se prefeir também é possível iniciar a aplicação com o composer:
    ```sh
   composer run dev
   ```
8. Acesse a aplicação no navegador:
   ```
   http://localhost:8000
   ```

## Uso

1. Escolha o tipo de operação matemática desejada.
2. Defina o intervalo de números (mínimo e máximo).
3. Escolha a quantidade de exercícios a serem gerados.
4. Gere a lista de operações matemáticas.
5. Opte por imprimir ou baixar o arquivo gerado.

## Contribuição

Sinta-se à vontade para contribuir com melhorias para o Math-X! Para isso:

1. Faça um fork do repositório.
2. Crie um branch para sua funcionalidade (`feature/nova-funcionalidade`).
3. Realize as alterações e faça um commit.
4. Envie um pull request.


