<?

/**
 * Arquivo de configura��o do M�dulo de Servi�os Rest para o SEI
 *
 * Seu desenvolvimento seguiu os mesmos padr�es de configura��o implementado pelo SEI e SIP e este
 * arquivo precisa ser adicionado � pasta de configura��es do SEI para seu correto carregamento pelo m�dulo.
 */

class ConfiguracaoMdWSSEI extends InfraConfiguracao  {

	private static $instance = null;

    /**
     * Obt�m inst�ncia �nica (singleton) dos dados de configura��o do m�dulo de integra��o
     *
     *
     * @return ConfiguracaoMdWSSEI
     */
    public static function getInstance()
    {
		if (ConfiguracaoMdWSSEI::$instance == null) {
			ConfiguracaoMdWSSEI::$instance = new ConfiguracaoMdWSSEI();
		}
		return ConfiguracaoMdWSSEI::$instance;
	}

    /**
     * Defini��o dos par�metro de configura��o do m�dulo
     *
     * @return array
     */
    public function getArrConfiguracoes()
    {
        return array(

            'WSSEI' => array(
                // URL do servi�o de notifica��o PUSH
                'UrlServicoNotificacao' => getenv('MOD_WSSEI_URL_SERVICO_NOTIFICACAO'),

                // ID do app registrado no servi�o de notifica��o
                'IdApp' => getenv('MOD_WSSEI_ID_APP'),

                // Chave de autoriza��o do servi�o de notifica��o
                'ChaveAutorizacao' => getenv('MOD_WSSEI_CHAVE_AUTORIZACAO'),

                // Chave unica com pelo menos 32 chars. Pode usar o comando uuidgen para gerar
                'TokenSecret' => getenv('MOD_WSSEI_TOKEN_SECRET')
            ),
        );
    }
}