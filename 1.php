

<!doctype html>
<html>
  
  <head>
    <meta charset="utf-8">

    <script src="d3.js"></script>
    <script src="d3plus.js"></script>
    <script src = "js/effects.js"></script>


    <link rel = "stylesheet" type="text/css" href="css/external.css">
  </head>

  <body>
  
    <div id="viz">
      <iframe src="graphv.html" width="100%" height="720px" id="viziframe"></iframe>
      
    </div>



    <div id="options">
      <table>

        <tr>
          <td><input type="button" value="reset" name = "reset" class="buttons" onclick="reloadViz()">
          </td>
        </tr>
        <tr>
          <td><input type="text" value="" name = "searchText" >
          </td>
        </tr>
      </table>
    </div>
  </body>

</html>