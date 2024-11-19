# ReVeste - Plataforma de Reutilização e Moda Sustentável

**ReVeste** é uma plataforma que conecta pessoas com o objetivo de **reutilizar roupas** de forma sustentável, promovendo a **economia circular** e o **upcycling**. O projeto busca reduzir o impacto ambiental causado pela indústria da moda, incentivando a reutilização de roupas antigas e a criação de novos looks com peças recicladas ou de segunda mão.

## Funcionalidades

- **Cadastro de Usuário**: Crie uma conta na plataforma para gerenciar seu roupas sustentável e interagir com outros usuários.
- **Gestão de Roupas**: Cadastre suas roupas usadas ou de segunda mão, facilitando a organização e permitindo que você crie novos looks.
- **Criação de Looks Sustentáveis**: Utilize as roupas cadastradas para criar combinações de looks, incentivando a reutilização e o uso consciente.
- **Troca de Roupas**: Encontre usuários interessados em trocar roupas de forma direta na plataforma.
- **Upload de Imagens**: Adicione fotos das suas roupas, looks e customizações feitas, para compartilhar com a comunidade.
- **Dicas de Upcycling**: Receba dicas sobre como transformar suas roupas antigas em novas peças, promovendo a criatividade e sustentabilidade.
- **Impacto Ambiental**: A plataforma calcula e mostra o impacto ambiental que você está ajudando a reduzir ao reutilizar suas roupas (economia de água, carbono, etc).

## Como Funciona

1. **Criação de Conta**: Ao se cadastrar, o usuário cria um perfil com informações como nome, foto e preferências. A partir daí, ele pode gerenciar suas roupas e looks.
2. **Cadastro de Roupas**: O usuário pode cadastrar peças do seu guarda-roupa, especificando tipo de roupa, estado de conservação, tamanho e inserir imagens.
3. **Criação de Looks**: Após cadastrar suas peças, o usuário pode montar looks combinando diferentes roupas. A plataforma permite visualizar as peças no formato de "looks completos".
4. **Troca de Roupas**: Os usuários podem marcar suas roupas como "disponíveis para troca", e buscar outras roupas de interesse na plataforma.
5. **Upcycling**: A plataforma oferece sugestões e ideias de como customizar ou modificar roupas antigas, incentivando a reutilização criativa.
6. **Compartilhamento Social**: Os usuários podem compartilhar seus looks, customizações e experiências com a comunidade, promovendo a troca de ideias.

## Tecnologias Utilizadas

- **Frontend**:
  - **HTML5**: Estruturação da página.
  - **CSS3** / **SASS**: Estilização da interface.
  - **JavaScript**: Para interatividade e dinâmica da página.
  - **React.js**: Framework JavaScript para construir interfaces reutilizáveis.
  
- **Backend**:
  - **PHP**: Linguagem utilizada para o backend da aplicação.
  - **MySQL**: Banco de dados relacional para armazenar dados dos usuários, roupas e trocas.
  - **JWT (JSON Web Tokens)**: Para autenticação de usuários.

- **Armazenamento de Imagens**:
  - **Multer** (para upload de imagens) ou **Cloudinary** (para hospedagem de imagens externas).

   ### Imagem :
![imagem](img/logineregistrar.png) 
![imagem](img/registrar.png)
![imagem](img/login.png)

## Instalação

### 1. Clonar o repositório

```bash
git clone https://github.com/usuario/ReVeste.git
cd ReVeste
```

### 2. Instalar Dependências

**Frontend (client):**

```bash
cd client
npm install
```

**Backend (server):**

```bash
cd server
npm install
```

### 3. Configurar o Banco de Dados

Crie o banco de dados MySQL localmente e adicione as credenciais no arquivo `.env`:

```env
DATABASE_URL=mysql://root:senha@localhost/reveste
JWT_SECRET=sua-chave-secreta
```

### 4. Rodar o Backend

```bash
cd server
npm start
```

### 5. Rodar o Frontend

```bash
cd client
npm start
```

Acesse a plataforma através do navegador em `http://localhost:3000`.

## Contribuindo

Contribuições são bem-vindas! Se você quiser contribuir com o projeto, siga estas etapas:

1. **Faça um fork** do repositório.
2. **Crie uma nova branch** (`git checkout -b minha-nova-feature`).
3. Realize suas alterações e faça o **commit** (`git commit -am 'Adiciona nova funcionalidade'`).
4. Envie suas alterações para o **seu fork** (`git push origin minha-nova-feature`).
5. Abra um **pull request** com suas alterações.

## Licença

Este projeto está licenciado sob a **Licença MIT**. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---

### Possíveis Expansões do Projeto

1. **Parcerias com Marcas Sustentáveis**: Adicionar uma seção para promover marcas de moda sustentável ou que utilizam materiais reciclados.
2. **Gamificação**: Criar um sistema de pontos onde os usuários ganham pontos por reutilizar roupas, trocar peças ou fazer upcycling, incentivando o engajamento.
3. **Calculadora de Impacto Ambiental**: Uma ferramenta que calcula o impacto positivo gerado ao reutilizar roupas em vez de comprar novas peças.
4. **Marketplace**: Adicionar uma funcionalidade de compra e venda de roupas sustentáveis diretamente na plataforma.

## Contato

Se você tiver dúvidas, sugestões ou quiser colaborar, entre em contato:

- **Email**: seuemail@dominio.com
- **GitHub**: [seuusuario](https://github.com/seuusuario)
- **LinkedIn**: [seulinkedin](https://linkedin.com/in/seulinkedin)

---

Este README está estruturado para refletir as funcionalidades que você mencionou e fornecer um guia claro sobre como o projeto pode ser instalado e utilizado. Se você quiser ajustar ou adicionar mais detalhes, como links de imagens ou recursos específicos do seu projeto, posso ajudá-lo com isso também! 😊