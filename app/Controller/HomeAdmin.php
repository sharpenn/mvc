<?php 

namespace App\Controller;


/**
 * Classe responsável por montar o layout da página do administrador, com apenas algumas variações 
 * em relação ao layout do login comum, por isso a herança
 * 
 * @author Douglas Paschoal
 */
class HomeAdmin extends Home 
{

    /**
     * Função responsável por renderizar a página do administrador
     */
    public function render() 
    {
        //MOSTRA O HEADER
        $header = file_get_contents(__DIR__.'./../../themes/header/header-admin.php');
        echo $this->getTemplate($header, $this->values);

        //MOSTRA O RESULTADO
        $content = file_get_contents($this->view);
        echo $this->getTemplate($content, $this->values);
    }

}





?>