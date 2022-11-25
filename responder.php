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
<body style="margin: 0px; padding: 0px; background-color: rgb(83, 155, 155);" >



<div class="topo"> <div class="texto"><h1>Bem Vindo a Provas Rápidas</h1>
<h3>Responda todas as questões</h3></div> 
</div>


<div style="width: 70%">
<?php
include "conexao.php" ;
    $query = "select * from questoes ORDER BY RAND() limit 15";
    $resultado = mysqli_query($conexao, $query);

    while($linha = mysqli_fetch_array($resultado)){
        ?>
            <div style="width:100%; border:1px solid; margin-top: 4rem">
                
                <h3> <?php echo $linha["a"]; ?> </h3>
                <h3> <?php echo $linha["b"]; ?> </h3>
                <h3> <?php echo $linha["c"]; ?> </h3>
                <h3> <?php echo $linha["d"]; ?> </h3>
                <h3> <?php echo $linha["e"]; ?> </h3>
            </div>
    
    <div >
      
    <label class="form-label" style="margin-left: 20%; font-size: 30px; font-weight: 400;">Pergunta:</label>
    <h1> <?php echo $linha["pergunta"]; ?> </h1>
    </div>
    <div class="form-check" style="display: flex; margin-top: 2rem;">
    <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck" name="correta" value="A" required>
    <label class="form-check-label" style="margin-top: 5px;" for="validationFormCheck">A)</label>
    <input class="form-control" style="margin-left: 5px;" type="text" name="A" required/>
  </div>
    <div class="form-check" style="display: flex; margin-top: 2rem;">
    <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck2" name="correta" value="B" required>
    <label class="form-check-label" for="validationFormCheck2" style="margin-top: 5px;">B)</label>
    <input class="form-control" style="margin-left: 5px;" type="text" name="B"required />
  </div>
    <div class="form-check" style="display: flex; margin-top: 2rem;">
    <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck3" name="correta" value="C" required>
    <label class="form-check-label" for="validationFormCheck3" style="margin-top: 5px;">C)</label>
    <input class="form-control" style="margin-left: 5px;" type="text" name="C"required />
  </div>
    <div class="form-check" style="display: flex; margin-top: 2rem;">
    <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck4" name="correta" value="D" required>
    <label class="form-check-label" style="margin-top: 5px;" for="validationFormCheck4">D)</label>
    <input class="form-control" style="margin-left: 5px;" type="text" name="D" required />
  </div>
    <div class="form-check" style="display: flex; margin-top: 2rem;">
    <input type="radio" class="form-check-input" style="margin-top: 10px;" id="validationFormCheck4" name="correta" value="E" required>
    <label class="form-check-label" style="margin-top: 5px;" for="validationFormCheck4">E)</label>
    <input class="form-control" style="margin-left: 5px;" type="text" name="E" required />
  </div>
<br><br>

<?php
    }
?>
 

<br><br>


<button type="submit" class="button" style="background-color: green; color: white; font-weight: 700; font-size: 40px; width: 100%; height: 100px">Enviar Resposta</button>

</div>
<div class="fim">
<h1>Já Acabou o formulario? agora é só deixar os alunos responderem:</h1>
<button type="submit" class="button" style="background-color: blue; color: white; width: 70%; font-weight: 700; font-size: 20px; font-size: 40px;  height: 100px; margin-left:15%; margin-right:20%">Responder Perguntas</button>
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