# Instruções para o Projeto de Cadastro de Músicas

## Descrição
Este projeto permite o cadastro de músicas com informações como nome, autor e link do vídeo do YouTube. As músicas cadastradas são exibidas na mesma página.

## Requisitos
- **Servidor Local**: Este projeto foi desenvolvido para ser executado em um servidor local com PHP (ex: XAMPP).
- **PHP**: Versão 8.0 ou superior.

## Estrutura de Arquivos
- `index.php`: Página principal que contém o formulário de cadastro e exibição das músicas cadastradas.
- `cadastro_musicas.php`: Processa os dados do formulário e gerencia a sessão para armazenar as músicas.
- `styles.css`: Estilo da página (opcional).

## Instruções de Instalação
1. **Coloque os Arquivos no Servidor**: Coloque os arquivos dentro da pasta `htdocs` do XAMPP.
   - Exemplo: `C:\xampp\htdocs\Avaliação 3 - LP\`
2. **Inicie o XAMPP**: Abra o painel do XAMPP e inicie os serviços Apache e MySQL (se necessário).
3. **Acesse o Projeto**: Abra um navegador e digite o seguinte endereço:
http://localhost/Avaliação 3 - LP/index.php

## Como Usar
1. Preencha os campos do formulário com o nome da música, autor e o link do vídeo do YouTube.
2. Clique em "Cadastrar Música" para adicionar a música à lista.
3. Para excluir uma música, clique no botão "Excluir Música" ao lado da música correspondente.

## Observações
- O sistema permite cadastrar até 3 músicas. Se o limite for atingido, uma mensagem será exibida.
- Certifique-se de que o link do YouTube esteja no formato correto.

## Contribuições
Sinta-se à vontade para contribuir com melhorias ou correções. Basta criar uma nova branch e abrir um pull request.
