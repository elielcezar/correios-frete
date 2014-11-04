<?php


//Check to make sure that the name field is not empty
if(trim($_POST['sCepOrigem']) == '') {
    $hasError = true;
} else {
    $cepOrigem = trim($_POST['sCepOrigem']);
} 

if(trim($_POST['sCepDestino']) == '') {
    $hasError = true;
} else {
    $cepDestino = trim($_POST['sCepDestino']);
}  




            $data['nCdEmpresa'] = '';
            $data['sDsSenha'] = '';
            $data['sCepOrigem'] = $cepOrigem;
            $data['sCepDestino'] = $cepDestino;
            $data['nVlPeso'] = '0.5';
            $data['nCdFormato'] = '1';
            $data['nVlComprimento'] = '20';
            $data['nVlAltura'] = '20';
            $data['nVlLargura'] = '20';
            $data['nVlDiametro'] = '0';
            $data['sCdMaoPropria'] = 'n';
            $data['nVlValorDeclarado'] = '0';
            $data['sCdAvisoRecebimento'] = 'n';
            $data['StrRetorno'] = 'xml';
            $data['nCdServico'] = '40010,41106';
            $data = http_build_query($data);
             
            $url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';
            $curl = curl_init($url . '?' . $data);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($curl);
            $result = simplexml_load_string($result);
             
            foreach($result -> cServico as $row) {
                //Os dados de cada serviço estará aqui
             
                if($row -> Erro == 0) {
                    echo "Codigo do Servico: " . $row -> Codigo . '<br>';
                    echo "Valor: " . $row -> Valor . '<br>';
                    echo "Prazo de Entrega: " . $row -> PrazoEntrega . ' dia(s) <br>';
                    
                } else {
                    echo $row -> MsgErro;
                }
                echo '<hr>';
            }

    

?>