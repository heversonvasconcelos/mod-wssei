# Testes da API - Postman

Na pasta testes/Postman est�o os testes para serem executados via aplica��o ou Newman

## Postman
Para rodar os testes em Postman:

### Pre-requisitos
- Instale o Postman v7.6 ([https://www.getpostman.com/](https://www.getpostman.com/)) ou superior
- Conhecimento de uso b�sico/moderado do Postman

### Para Rodar os Testes
- Baixe o projeto deste git (vou chamar de `<projeto>`)
- V� at� a pasta `<projeto>/testes/Postman`
- Importe os arquivos Wssei-Tests.postman_collection.json e SEI.postman_environment.json para o Postman
- Ajuste o Working Dir do Postman para a pasta `<projeto>/testes/Postman` - necess�rio para reconhecer os arquivos de upload de docs externos
- Ajuste os valores do seu environment, de acordo com o ambiente que deseja testar
- Execute o teste

---
[Retornar para Testes](README.md)

[Retornar ao In�cio](../README.md)