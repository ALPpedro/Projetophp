<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
</head>

<body style="margin: 0px; padding: 0px; background-color: rgb(83, 155, 155);">



  <div class="topo">
    <div class="texto">
      <h1>Bem Vindo a Provas Rápidas</h1>
      <h3>Responda todas as questões</h3>
    </div>
  </div>


  <div style="width: 70%">
    <form action="./respostas.php" method="post" class="needs-validation" style="width: 100%; padding-left: 2rem;"
      novalidate>
      <?php
      include "conexao.php";
      $query = "SELECT * FROM questoes ORDER BY RAND() LIMIT 15";
      $resultado = mysqli_query($conexao, $query);
      $teste = 0;

      while ($linha = mysqli_fetch_array($resultado)) {
      ?>


      <div style="margin-left: 2rem">
        <h1>
          <?php echo $linha["pergunta"]; ?>
        </h1>
      </div>
      <div class="form-check" style="display: flex; margin-top: 2rem;">
        <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck"
          name="<?php echo $linha["id"] ?>" value="A" required>
        <h3 class="form-check-label" style="margin-top: 5px;" for="validationFormCheck">A)
          <?php echo $linha["a"]; ?>
        </h3>

      </div>
      <div class="form-check" style="display: flex; margin-top: 2rem;">
        <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck2"
          name="<?php echo $linha["id"] ?>" value="B" required>
        <h3 class="form-check-label" for="validationFormCheck2" style="margin-top: 5px;">B)
          <?php echo $linha["b"]; ?>
        </h3>
      </div>
      <div class="form-check" style="display: flex; margin-top: 2rem;">
        <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck3"
          name="<?php echo $linha["id"] ?>" value="C" required>
        <h3 class="form-check-label" for="validationFormCheck3" style="margin-top: 5px;">C)
          <?php echo $linha["c"]; ?>
        </h3>
      </div>
      <div class="form-check" style="display: flex; margin-top: 2rem;">
        <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck4"
          name="<?php echo $linha["id"] ?>" value="D" required>
        <h3 class="form-check-label" style="margin-top: 5px;" for="validationFormCheck4">D)
          <?php echo $linha["d"]; ?>
        </h3>
      </div>
      <div class="form-check" style="display: flex; margin-top: 2rem;">
        <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck5"
          name="<?php echo $linha["id"] ?>" value="E" required>
        <h3 class="form-check-label" style="margin-top: 5px;" for="validationFormCheck5">E)
          <?php echo $linha["e"]; ?>
        </h3>
      </div>
      <br><br>

      <?php
      }
      ?>


      <br><br>


      <button type="submit" class="button" value="Responder"
        style="background-color: green; color: white; font-weight: 700; margin-left: 20%; font-size: 40px; width: 80%; height: 100px">Enviar
        Resposta</button>
    </form>
  </div>


  <script>
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
</body>

</html>