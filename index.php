
<?php

  $api_id = 'b7b80a59415046c33449b6a2a96bd4d8'; //  API ID
  $url = 'https://api.kursna-lista.info/'.$api_id.'/kursna_lista';
  $content = file_get_contents($url);

  if (empty($content))
  {
      die('Something went wrong');
  }

  $data = json_decode($content, true);

  // print_r($data);

  if ($data['status'] == 'ok')
  {

  //   echo $content;
  //   echo 50 * $data['result']['eur']['pro'];

     $rsdamounteur = (float)$data['result']['eur']['pro'];
     $rsdamountusd = (float)$data['result']['usd']['pro'];
  }
  else
  {
      echo "Mistake ... : " . $data['code'] . " - " . $data['msg'];
  }

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Currency Convertor</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>


<div class="container text-center">
  <div class="row">
    <form class="form-group form-inline" action="" method="GET">
        <h1>Currency Convertor</h1>
      <div class="first ">
      <select class="currency-list form-control" onclick="exchangeCurrency()">
        <option class="eur" value="<?php echo $rsdamounteur; ?>">EUR</option>
        <option class="usd" value="<?php echo $rsdamountusd; ?>">USD</option>
        <option id="rsd" value="1">RSD</option>
        <input type="text" name='enter' id="output" class="amount form-control" onchange="validate()"  min="1" value="1">
      </select>
      <div id="valid"></div>
    </div>


<!-- start of svg -->

      <a class="svgIcon btn btn-subtle-icon">
        <span class="icon-archive">
        <svg
           xmlns:dc="http://purl.org/dc/elements/1.1/"
           xmlns:cc="http://creativecommons.org/ns#"
           xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
           xmlns:svg="http://www.w3.org/2000/svg"
           xmlns="http://www.w3.org/2000/svg"
           id="svg4599"
           version="1.1"
           viewBox="0 0 9.5249997 9.5250003"
           height="36"
           width="36">
          <defs
             id="defs4593" />
          <metadata
             id="metadata4596">
            <rdf:RDF>
              <cc:Work
                 rdf:about="">
                <dc:format>image/svg+xml</dc:format>
                <dc:type
                   rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                <dc:title></dc:title>
              </cc:Work>
            </rdf:RDF>
          </metadata>
          <g
             transform="translate(0,-287.47498)"
             id="layer1">
            <path
               id="path5019"
               d="m 4.070972,288.60243 -1.92198,0.99448 -1.921544,0.99448 1.921544,0.99448 1.92198,0.99448 v -1.59374 h 5.22658 v -0.79088 h -5.22658 z m 1.3830501,3.29216 v 1.5933 H 0.227448 v 0.79089 h 5.2265741 v 1.59374 l 1.9219799,-0.99448 1.92155,-0.99448 -1.92155,-0.99448 z"
               style="opacity:1;fill:#fff;fill-opacity:1;stroke:none;stroke-width:0.26458332;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" />
          </g>
        </svg>
      </span>
      </a>

<!-- end of svg -->

         <div class="second">
            <select class="rsd-list form-control" onclick="exchangeCurrency()">
              <option id="rsd2" value="val2">RSD</option>
              <option value="<?php echo $rsdamounteur; ?>">EUR</option>
              <option value="<?php echo $rsdamountusd; ?>">USD</option>
            </select>
            <table class="form-control">
              <tr class="result">
                <td id="results" class="td" onchange="validate()"><?php echo (round($rsdamounteur, 2));?></td>
              </tr>
            </table>
          </div>
      </form>
        <button id="reset" class="btn btn-primary" onclick="clear_all_values()"><b>Reset</b></button>
  </div> <!-- row div -->
</div> <!-- container div -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script>


//Calculate and display the exchanged amount

    </script>
  </body>
</html>
