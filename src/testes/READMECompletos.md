# Testes da API

Aqui vamos mostrar de forma r�pida um switch de testes completo que criamos para a API. Pode ser usada pelos desenvolvedores/integradores como base ou consulta ao construir suas pr�prias integra��es.

## Roadmap do Teste

### Instalar um SEI do Zero

Faz-se necess�rio instalar um SEI do zero com a base de dados do poder executivo pr�-carregada.
Para isso h� a op��o de proceder com o projeto [SEI-Vagrant](https://github.com/guilhermeadc/sei-vagrant)

### Instalar o M�dulo Rest do SEI

Ap�s o sei estar instalado, proceda com a instala��o do m�dulo Wssei - [https://github.com/spbgovbr/mod-wssei](https://github.com/spbgovbr/mod-wssei)

### Realizar pr�-carga do ambiente

O ambiente est� no ar com a carga inicial do poder executivo.
O m�dulo j� est� instalado.

Agora faz-se necess�rio criar usu�rio, definir seu perfil, criar cargos para assinatura e outras configura��es necess�rias que n�o conseguimos fazer usando a API.

Para isso vamos usar o SeleniumIDE, que simula um usu�rio fazendo essas opera��es para n�s.

Proceda rodando o SeleniumIDE para cada arquivo abaixo:
- mod-wssei/testes/SeleniumIDE/010-SEI-ModWssei-SIP.side
- mod-wssei/testes/SeleniumIDE/012-SEI-ModWssei-SIP.side
- mod-wssei/testes/SeleniumIDE/013-SEI-ModWssei-SIP.side
- mod-wssei/testes/SeleniumIDE/015-SEI-ModWssei-SIP.side
- mod-wssei/testes/SeleniumIDE/030-SEI-ModWssei-SEI.side

Obs: ser� necess�rio alterar a url para onde aponta o SEI no SeleniumIDE

### Rodar Testes Postman na API

Agora sim, com o ambiente no ar, pr� carregado e configurado com os usu�rios, podemos finalmente chamar os testes da API.

[Rodar Cen�rios Concebidos](READMEPostman.md)

N�o vamos entrar em detalhes, pois o pr�prio projeto de testes Postman tem essa informa��o. Ele vai rodar cria��o de processos, download e upload de docs, testes de assinatura, cargos, acompanhamento, login com users em diferentes unidades, tramita��o entre unidades, cargas diversas etc.

---
[Retornar para Testes](README.md)

[Retornar ao In�cio](../README.md)