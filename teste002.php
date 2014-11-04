

<!DOCTYPE html>
<html>
<head>


<script>
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","script.php",true);
xmlhttp.send();
}
</script>


</head>
<body>

<form method="post" action="script.php">
<fieldset>
    <legend>Digite os dados da encomenda</legend>
    <p>
        <label for="sCepOrigem">Cep de Origem (somente números): </label>
        <input type="text" name="sCepOrigem" id="sCepOrigem" onkeypress="return txtBoxFormat(this, '99999999', event);" maxlength="8" />
    </p>
    <p>
        <label for="sCepDestino">Cep de Destino (somente números): </label>
        <input type="text" name="sCepDestino" id="sCepDestino" onkeypress="return txtBoxFormat(this, '99999999', event);" maxlength="8" />
    </p>
    <!--p>
        <label for="nVlPeso">Peso Total (Kg): </label>
        <input type="text" name="nVlPeso" id="nVlPeso" onkeydown="javascript: return mascaraValor(this,event,5,3);" maxlength="5" />
    </p>
    <p>
        <label for="nVlComprimento">Comprimento da Embalagem (Cm): </label>
        <input type="text" name="nVlComprimento" id="nVlComprimento" onkeypress="return txtBoxFormat(this, '999', event);" maxlength="3" />
    </p>
    <p>
        <label for="nVlAltura">Altura da Embalagem (Cm): </label>
        <input type="text" name="nVlAltura" id="nVlAltura" onkeypress="return txtBoxFormat(this, '999', event);" maxlength="3" />
    </p>
    <p>
        <label for="nVlLargura">Largura da Embalagem (Cm): </label>
        <input type="text" name="nVlLargura" id="nVlLargura" onkeypress="return txtBoxFormat(this, '999', event);" maxlength="3" />
    </p>
    <p-->
        <!--label for="nCdServico">Serviço: </label>
        <select name="nCdServico" id="nCdServico">
            <option value="41106">PAC </option>
            <option value="40010">SEDEX </option>
            <option value="40215">SEDEX 10 </option>
            <option value="40290">SEDEX HOJE </option>
        </select-->

        <!--input type="text" name="nCdServico" id="nCdServico" /-->

    </p>
    <p>
        <input type="submit" value="Calcular Frete" onclick="loadXMLDoc()"/>
    </p>
</fieldset>
</form>

<!--div id="myDiv"><h2>Let AJAX change this text</h2></div>
<button type="button" onclick="loadXMLDoc()">Change Content</button-->


</body>
</html>

