<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device=width, initial-scale=1">
  <meta name="googlebot" content="noarchive">
  <meta http-equiv="imagetoolbar" content="no">
  <meta http-equiv="content-type" content="text/html">
  <title>Cadastro de alunos</title>
  <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css">
  <script type="text/javascript"> </script>
  
</head>
<body>

    <style type="text/css">
        body{
            background: #e9e9e9;
        }
    
        h2{
            color:#002702;
        }
        </style>  
    
    <form name="cadastro" onsubmit="return pgtocurso(true)" || onsubmit="return cpfSearch(true)" method="POST" action="cadastro.php" >
    


<style type="text/css"> 
table{
    position: absolute;
    top: 10%;
    left: 15px;
    color: rgb(0, 0, 0);
    
    
}
</style>
        
<table>

        
    <tr> 
      <td colspan="2"> <div id="f12"> <h2>Formulário de cadastro</h2></td></div>
    </tr>
    <style type="text/css">
        #f12_1{
            position:absolute;
            top: 40px;
            left: 5px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 15px;
    
        }
        </style>
            <tr>
                <td colspan="2"><div id=f12_1><h4>Efetue seu cadastro, e tenha acesso ao curso desejado!</h4></div></td>
            </tr>

    <tr>
      <td colspan="2"><hr></td>
  </tr>
   
  <tr>
      <td>Nome Completo:</td>
      <td><input type="TEXT" name="NOME" size="50" maxlength="60" required="required"></td>
  </tr>
  <tr>
      <td>CPF:</td>
      <td><input type="text" name="CPF" id="CPF" maxlength="11" required="required"></td>
<script>        
function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0

  if (strCPF == "00000000000") {
    return false;
  } 
  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
   
  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
   
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}
</script>
  </tr>

  <tr>
      <td>Sexo:</td>
      <td><input name="SEXO" type="radio" value="Masculino" checked="checked"/>Masculino
          <input name="SEXO" type="radio" value="Feminino" checked="checked"/>Feminino</td>
  </tr>
  <tr>
      <td>Email:</td>
      <td><input type="text" name="EMAIL" maxlength="30" required="required"></td>
  </tr>
  <tr>
      <td>DDD:</td>
      <td><input name="DDD" type="text" id="DDD" size="4" maxlength="2" required="required">
        Telefone:
        <input type="tel" name="TELEFONE" id="Telefone" maxlength="10" required="required">
        </td>
  </tr>
  <tr>
      <td>Endereço:</td>
        <td><input type="text" name="ENDERECO" id="Endereço" size="50" maxlength="70" required="required"></td>
      
  </tr>
  <tr>
      <td>Complemento:</td>
        <td><input type="text" name="COMPLEMENTO" id="Complemento" size="50" maxlength="70" ></td>
    
  </tr>
  <TR>
        <td>Bairro:</td>
          <Td><input type="text" name="BAIRRO" id="Bairro" maxlength="20" required="required"></td>
    </TR>
    <tr>
        <td>CEP:</td>
          <td><input type="text" name="CEP" id="CEP" maxlength="8" required="required"></td>
    
    </tr>
  <tr>
      <td>Cidade:</td>
        <td><input type="text" name="CIDADE" id="Cidade" maxlength="20" required="required"></td>
  </tr>
  <tr>
      <td>Estado:
         <td><select name="ESTADO" id="Estado" required="required">
          <option><b>Selecione Estado</b></option>
          <option>AC</option>
          <option>AL</option>
          <option>AP</option>
          <option>AM</option>
          <option>BA</option>
          <option>CE</option>
          <option>ES</option>
          <option>DF</option>
          <option>GO</option>
          <option>MA</option>
          <option>MT</option>
          <option>MS</option>
          <option>MG</option>
          <option>PA</option>
          <option>PB</option>
          <option>PR</option>
          <option>PE</option>
          <option>PI</option>
          <option>RJ</option>
          <option>RN</option>
          <option>RS</option>
          <option>RO</option>
          <option>RR</option>
          <option>SC</option>
          <option>SP</option>
          <option>SE</option>
          <option>TO</option>
        </select>
        </td>
        </td>
  </tr>
  <tr>
      <td>Login:</td>
        <td><input type="text" name="LOGIN1" id="Login" maxlength="10" required="required"></td>
      
  </tr>
  <tr>
      <td>Senha:</td>
        <td><input type="password" name="SENHA" id="Senha" maxlength="30" required="required"></td>
  </tr>
  <tr>
    <div ID="CADASTRAR">
      <td><button type="submit" id="jscadastrar" style="top:487px; left:0px; width:109px; height: 28px; font-size: 15px; position: absolute"> Cadastrar</button></td>   
    </div>
</tr> 

  </div>    
</table>
</form>
   <style type="text/css">
   #rec_novidade{
       position: absolute;
       bottom: 116px;
       color: white; 
       left: 15px;  
   }
   #TERMOS_COND{
       position: absolute;
       bottom: 90px;
       color: white;
       left: 15px;
   }
   #jscadastrar{
       position: absolute;
       bottom: 50px;
 
    
   }
   </style>
    
  <tr>
      <!--<div id=rec_novidade>
      <td colspan="2"><input type="checkbox" name="rec_novidades" id="rec_novidades" value="
        Desejo receber novidades e informações via e-mail.">Desejo receber novidades e informações via e-mail.</td>
      
    </div>
    </tr>-->
    <tr>
        <div ID="TERMOS_COND">
         <td><input type="checkbox" value="Eu concordo com os Termos e Condições" name="Termos e Condições" id="Termos e Condições"> <a name="Termos" href="Termos e Condições.html" style="color:black;">Eu concordo com os Termos e Condições.</a><U></U></TD>
        </div>  
    </tr>
   
    <h2 id="erro"></h2>
    <script>
      document.getElementById('jscadastrar').addEventListener('click' , () => 
      {
        let cpfSearch;
        let displayElement = document.getElementById('erro');
        let valorCpf = document.getElementById('CPF').value;
  
          if(valorCpf === undefined || valorCpf === '') 
          {
                alert("Erro");
                return;
          } else 
          {
            alert("Passou aqui.");
          }

            cpfSearch = TestaCPF(valorCpf);
  
              if(!cpfSearch) {
                alert('CPF Inválido. Digite o CPF Novamente');
                  //displayElement.style.color = "white";
                  //displayElement.textContent = "Erro no campo CPF";
                  return false; 
              } else {
                alert('deu true.');
                  displayElement.style.color = "white";
                  displayElement.textContent = "CPF aprovado";
                  return true; 

                  /*document.cadastro.submit(); */

              }
      })

     /* if (cpfSearch) { 
          location.href="pgtocurso.html"
      }else{
          displayElemento.style.color = "red";
          displayElement.textContent = "Erro no CPF";
      }*/
   </script>
        <script type="text/javascript">
         function pgtocurso() {
                location.href="pgtocurso.html"
            }
            if(!cpfSearch)
            {
               /* pgtocurso() = false;*/
                cpfSearch = false;
                alert('false');
                displayElement.style.color = "white";
                displayElement.textContent = "REDIRECIONAMENTO FALSE";
                return false;
            }else
            {
                /*pgtocurso() = true;*/
                cpfSearch = true;
                alert('true');
                displayElement.style.color = "white";
                displayElement.textContent = "REDIRECIONAMETO TRUE";
                document.cadastro.submit();
                return true;
            }
        
        </script>

</div>
</body>
</html>
