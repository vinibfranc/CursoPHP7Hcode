<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 12/03/2018
 * Time: 12:08
 */

//Recursividade (Tree view)
$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //início: Diretor comercial
            array(
                'nome_cargo' => 'Diretor comercial',
                'subordinados' => array(
                    //início: Gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de vendas'
                    )
                    //término: Gerente de vendas
                )
            ),
            //Término diretor comercial
            //Início: Diretor financeiro
            array(
                'nome_cargo' => 'Diretor financeiro',
                'subordinados' => array(
                    //Início: Gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de contas a pagar',
                        'subordinados' => array(
                            //Início: Supervisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de pagamentos'
                            )
                            //Término: Supervisor de Pagamentos
                        )
                    )
                ),
                //Término: Gerente de contas a pagar
                //Início: Gerente de Compras
                array(
                    'nome_cargo' => 'Gerente de compras',
                    'subordinados' => array(
                    //Início: Supervisor de suprimentos
                    array(
                        'nome_cargo' => 'Supervisor de suprimentos'
                    )
                    //Término: Supervisor de suprimentos
                    )
                )

                //Término: Gerente de Compras
            )
            //Término: Diretor financeiro
        )
    )
);

function exibe($cargos){
    $html = "<ul>";

    foreach ($cargos as $cargo) {
        $html .= "<li>";
        $html .= $cargo['nome_cargo'];
        $html .= "</li>";

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }
    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);