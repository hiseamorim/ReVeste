# Reveste
O Projeto Integrador Reveste é um projeto desenvolvido como parte das aulas de Programação Web, o projeto visa a construção de uma plataforma web para e promover a sustentabilidade no consumo de roupas e incentivar a reutilização e o upcycling de peças de vestuário. O projeto permite que os usuários se conectem com práticas conscientes de moda, como o reaproveitamento de roupas antigas, a troca de peças, e a criação de looks sustentáveis.

A aplicação foi construída utilizando as tecnologias mais comuns e relevantes para o desenvolvimento web moderno, incluindo HTML, CSS, JavaScript (com frameworks como React ou Vue.js, se aplicável), Node.js e Banco de Dados SQL/NoSQL. O objetivo é proporcionar uma interface interativa e de fácil acesso para usuários, permitindo uma experiência simples e intuitiva.


## Índice

- [Visão Geral](#visão-geral)
- [Funcionalidades](#funcionalidades)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Instalação](#instalação)
- [Uso](#uso)
- [Contribuindo](#contribuindo)
- [Licença](#licença)
- [Contato](#contato)

## Visão Geral

Este projeto oferece uma aplicação web para realizar login e cadastro de usuários com suporte ao upload de foto de perfil. A funcionalidade de foto de perfil permite que o usuário personalize sua conta, melhorando a experiência de interação no sistema.

A aplicação foi construída para ser fácil de configurar e escalar, podendo ser usada em projetos de e-commerce ou como base para sistemas que necessitem de autenticação de usuários.

## Funcionalidades

- **Registro de usuário**: Permite a criação de novos usuários com informações como nome, email, senha e foto de perfil.
- **Login de usuário**: Autenticação de usuários registrados com verificação de email e senha.
- **Upload de foto de perfil**: O usuário pode carregar uma imagem para personalizar seu perfil. A foto é salva e exibida no painel do usuário.
- **Validação de campos**: Campos obrigatórios são validados antes do envio do formulário, garantindo que os dados estejam corretos e completos.
- **Interface intuitiva**: Tela de login e registro com design simples e fácil de usar, baseada em boas práticas de UX/UI.

## Tecnologias Utilizadas

- **Frontend**:
  - HTML5
  - CSS3 (ou SASS/SCSS, se utilizado)
  - JavaScript (para validação de formulários e interação com o backend)
  - Frameworks/Bibliotecas (se aplicável, como Bootstrap, Tailwind CSS, ou Vue.js/React.js para maior interatividade)

- **Backend**:
  - Node.js com Express (ou outro framework backend como Django/Flask, dependendo da escolha)
  - MongoDB ou MySQL (para armazenamento de dados de usuários e fotos)
  - Multer (biblioteca para upload de arquivos no Node.js)

- **Autenticação**:
  - JWT (JSON Web Tokens) para autenticação de usuários (ou Passport.js se for utilizado no backend)

- **Outros**:
  - Cloudinary ou outro serviço de armazenamento em nuvem para fotos (se aplicável)

## Instalação

Siga os passos abaixo para configurar o projeto em seu ambiente local:

1. **Clonar o repositório**:
   ```bash
   git clone https://github.com/usuario/nome-do-projeto.git
   cd nome-do-projeto
   ```

2. **Instalar as dependências**:
   Se o projeto utiliza Node.js:
   ```bash
   npm install
   ```
   Ou, se for um projeto Python:
   ```bash
   pip install -r requirements.txt
   ```

3. **Configuração de banco de dados e variáveis de ambiente**:
   Configure as variáveis de ambiente necessárias (como credenciais de banco de dados e chaves de API) criando o arquivo `.env`:
   ```bash
   cp .env.example .env
   ```
   Preencha as variáveis conforme a configuração do seu ambiente local ou de produção.

4. **Rodar o servidor**:
   Inicie o servidor com o comando:
   ```bash
   npm start
   ```
   Ou, se for Python:
   ```bash
   python app.py
   ```

5. **Acessar a aplicação**:
   Acesse o sistema em seu navegador em `http://localhost:3000` (ou a porta configurada no seu projeto).

## Uso

Após a instalação e configuração, você pode testar as funcionalidades de login e registro:

1. **Registro de usuário**:
   - Vá para a tela de registro e preencha os campos de nome, email, senha e escolha uma foto de perfil.
   - Clique em "Registrar" para criar sua conta.

2. **Login de usuário**:
   - Acesse a tela de login, insira seu email e senha e clique em "Entrar".

3. **Upload de foto de perfil**:
   - Durante o processo de registro ou na área de edição de perfil, faça o upload de uma foto de sua escolha.
   - A foto será exibida na tela de perfil após o login.

## Contribuindo

Contribuições são bem-vindas! Para contribuir, siga os passos abaixo:

1. Faça um fork do repositório.
2. Crie uma nova branch (`git checkout -b minha-nova-feature`).
3. Realize suas alterações e faça o commit (`git commit -am 'Adiciona nova funcionalidade'`).
4. Envie a branch para o seu fork (`git push origin minha-nova-feature`).
5. Abra um pull request explicando as alterações realizadas.

## Licença

Este projeto está licenciado sob a [Licença MIT](LICENSE), veja o arquivo LICENSE para mais detalhes.

Esse modelo de README foi adaptado para um sistema de login e registro com a funcionalidade de upload de foto de perfil, levando em consideração o estilo e a estrutura do projeto **Cad-ecommerce**. 
