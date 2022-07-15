## Novidades da versão <VERSAO>

Este documento descreve as principais mudanças aplicadas nesta atualização de versão do **SUPER.GOV.BR**.

Para instruções sobre como realizar a atualização do sistema, acesse a seção **[Atualização de Versão](#atualização-de-versão)** no final deste documento. Outras informações sobre procedimentos de **instalação** ou **migração** de versões anteriores, acesse os seguintes documentos:

* [Instalação](../<VERSAO>/docs/INSTALACAO.md) - Procedimento de instalação do SUPER.GOV.BR
* [Migração](../<VERSAO>/docs/MIGRACAO.md) - Procedimento específicos para migração de uma versão anterior do SEI 3.1


### Lista de melhorias e correções de problemas

Todas as atualizações podem incluir itens referentes à segurança, requisito em permanente monitoramento e evolução, motivo pelo qual a atualização com a maior brevidade possível é sempre recomendada.


#### Descrição da melhoria 001 (#00)

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

#### Descrição da melhoria 002 (#00)

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.



### Atualização de Versão

#### Pré-requisitos

Versão 4.0.x do **SEI** ou **SUPER.GOV.BR** ou superior instaladas (verificar valor da constante de versão no arquivo sei/web/SEI.php).

#### Instruções

1. Baixar a última versão do pacote de instalação do sistema (arquivo `mod-wssei-[VERSÃO].zip`) localizado na página de [Releases do projeto MOD-WSSEI](https://github.com/spbgovbr/mod-wssei/releases), seção **Assets**.

2. Fazer backup dos diretórios "sei", "sip" e "infra" do servidor web;

3. Descompactar o pacote de instalação `mod-wssei-[VERSÃO].zip`;

4. Copiar os diretórios descompactados "sei", "sip" e "infra" para os servidores, sobrescrevendo os arquivos existentes;

5. Executar o script para atualização dos recursos do mod-wssei no SIP em linha de comando:

```bash
php -c /etc/php.ini  [DIRETORIO_RAIZ_INSTALAÇÃO]/sip/scripts/mod-wssei/sip_atualizar_versao_modulo_wssei.php
```

6. Executar o script para atualização dos recursos do mod-wssei no SEI em linha de comando:

```bash
php -c /etc/php.ini  [DIRETORIO_RAIZ_INSTALAÇÃO]/sei/scripts/mod-wssei/sei_atualizar_versao_modulo_wssei.php
```