<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="_css/estilo.css" />
  <meta charset="UTF-8" />
  <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
  <div>
    <?php
    $e = isset($_GET["estado"]) ? $_GET["estado"] : "AC";
    switch ($e) {
      case 'AC':
      case 'AM':
      case 'AP':
      case 'TO':
      case 'PA':
      case 'RR':
      case 'RO':
        if ($e == "AC") {

          $el = "Acre";
          $c = "Rio Branco";
        } else if ($e == "AM") {

          $el = "Amazonas";
          $c = "Manaus";
        } else if ($e == "AP") {

          $el = "Amapá";
          $c = "Macapá";
        } else if ($e == "TO") {

          $el = "Tocantins";
          $c = "Palmas";
        } else if ($e == "PA") {

          $el = "Pará";
          $c = "Belém";
        } else if ($e == "RR") {

          $el = "Roraima";
          $c = "Boa Vista";
        } else if ($e == "RO") {

          $el = "Rondônia";
          $c = "Porto Velho";
        }

        echo "<H1>$el</H1>
        <H2>Região Norte</H2>
              <h3>Capital: $c</H3>";
        break;

      case 'AL':
      case 'BA':
      case 'CE':
      case 'MA':
      case 'PB':
      case 'PE':
      case 'PI':
      case 'RN':
      case 'SE':
        if ($e == "AL") {

          $el = "Alagoas";
          $c = "Maceió";
        } else if ($e == "BA") {

          $el = "Bahia";
          $c = "Salvador";
        } else if ($e == "CE") {

          $el = "Ceará";
          $c = "Fortaleza";
        } else if ($e == "MA") {

          $el = "Maranhão";
          $c = "São Luís";
        } else if ($e == "PB") {

          $el = "Paraíba";
          $c = "João Pessoa";
        } else if ($e == "PE") {

          $el = "Pernambuco";
          $c = "Recife";
        } else if ($e == "PI") {

          $el = "Piauí";
          $c = "Teresina";
        } else if ($e == "RN") {

          $el = "Rio Grande do Norte";
          $c = "Natal";
        } else if ($e == "SE") {

          $el = "Sergipe";
          $c = "Aracaju";
        }

        echo "<H1>$el</H1>
            <H2>Região Nordeste</H2>
                  <h3>Capital: $c</H3>";
        break;

      case 'DF':
      case 'GO':
      case 'MT':
      case 'MS':
        if ($e == "DF") {

          $el = "Distrito Federal";
          $c = "Brasília ";
        } else if ($e == "GO") {

          $el = "Goiás";
          $c = "Goiânia";
        } else if ($e == "MT") {

          $el = "Mato Grosso";
          $c = "Cuiabá";
        } else if ($e == "MS") {

          $el = "Mato Grosso do Sul";
          $c = "Campo Grande";
        }

        echo "<H1>$el</H1>
                <H2>Centro-Oeste</H2>
                      <h3>Capital: $c</H3>";
        break;
      case 'ES':
      case 'MG':
      case 'RJ':
      case 'SP':
        if ($e == "ES") {

          $el = "Espírito Santo";
          $c = "Vitória ";
        } else if ($e == "MG") {

          $el = "Minas Gerais";
          $c = "Belo Horizonte";
        } else if ($e == "RJ") {

          $el = "Rio de Janeiro";
          $c = "Rio de Janeiro";
        } else if ($e == "SP") {

          $el = "São Paulo";
          $c = "São Paulo";
        }

        echo "<H1>$el</H1>
                    <H2>Sudeste</H2>
                          <h3>Capital: $c</H3>";
        break;
      case 'PR':
      case 'RS':
      case 'SC':

        if ($e == "PR") {

          $el = "Paraná";
          $c = "Curitiba ";
        } else if ($e == "RS") {

          $el = "Rio Grande do Sul";
          $c = "Porto Alegre";
        } else if ($e == "SC") {

          $el = "Santa Catarina";
          $c = "Florianópolis";
        }

        echo "<H1>$el</H1>
                        <H2>Sul</H2>
                              <h3>Capital: $c</H3>";
        break;
    }
    ?>
    <br/>
    <br/>
    <a href="javascript: history.go (-1)">Voltar</a>
  </div>
</body>

</html>