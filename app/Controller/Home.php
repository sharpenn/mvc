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

    private $view;

     /**
      * Valores que serão passados para a página
      * @var array
      */

    private $values = [];

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

        //EXTRAI OS VALORES P/ MONTAR O ARRAY
        extract($this->values);

        //MOSTRA O RESULTADO
        include $this->view;
    }





}







?>