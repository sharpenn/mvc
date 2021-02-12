<?php 

namespace App\Controller;

/**
 * Classe responsável por gerenciar os layouts das páginas de Home
 * 
 * @author Douglas Oliveira Paschoal
 */

class Home {

    /**
     * Constante que abriga o caminho padrão dos arquivos a serem exibidos
     * 
     */
    const PATH = __DIR__ . '.\..\..\themes\home';

    /**
     * View do MVC da página requisitada
     * @var string
     */

    protected $view;

     /**
      * Valores que serão passados para a página
      * @var array
      */

    protected $values = [
        'nomeDoUsuarioLogado' => 'Douglas Oliveira Paschoal'
    ];

     /**
      * Construtor da classe
      */
    public function __construct()
    {
        $this->view = self::PATH . '/home.php';
    }

    /**
     * Função responsável por salvar as informações que serão passadas para o template
     * @param array $values
     */
    public function handle(array $values) : void
    {
        //MONTA O ARRAY COM OS DADOS
        foreach ($values as $value) {
            $this->values[] = $value;
        }

    }

    /**
     * Função responsável por obter o template final da página
     */
    public function render() {

        //MOSTRA O HEADER
        $header = file_get_contents(__DIR__.'./../../themes/header/header.php');
        echo $this->getTemplate($header, $this->values);

        //MOSTRA O RESULTADO
        $content = file_get_contents($this->view);
        echo $this->getTemplate($content, $this->values);
    }

    /**
     * Função responsável por substituir os valores do array no template
     */
    public function getTemplate($page, $array) {
        //SUBSTITUI AS CHAVES DUPLAS PELOS VALORES
        foreach($array as $key=>$value) {
            $page = str_replace('{{'.$key.'}}', $value, $page);
        }

        return $page;
    }





}







?>