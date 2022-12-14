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
<?php 

include "conexao.php" ;

if( isset ($_POST ) && !empty($_POST) ){
    $pergunta = $_POST["pergunta"];
    $a = $_POST["A"];
    $b = $_POST["B"];
    $c = $_POST["C"];
    $d = $_POST["D"];
    $e = $_POST["E"];
    $correta = $_POST["correta"];

    $query = "insert into questoes (pergunta,a,b,c,d,e,correta) ";
    $query = $query." values('$pergunta','$a','$b','$c','$d','$e','$correta')";
    $resultado = mysqli_query($conexao, $query);
}
?>

<div class="topo"> <div class="texto"><h1>Bem Vindo a Provas Rápidas</h1>
<h3>Responda todas as questões</h3></div> 
</div>

<form action="./index.php" method="post" class=" needs-validation" style="width: 100%; justify-content: center; display: flex;" novalidate>
<div style="width: 70%">
    <div >
    <label class="form-label" style="margin-left: 20%; font-size: 30px; font-weight: 400;">Pergunta:</label>
    <textarea class="form-control" name="pergunta" style="width: 80%;" required></textarea>

    <div class="valid-feedback">
        Validado!
    </div>
    <div class="invalid-feedback">
        Informe uma pergunta
    </div>
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
 

<br><br>


<button type="submit" class="button" style="background-color: green; color: white; font-weight: 700; font-size: 40px; width: 100%; height: 100px">Salvar Pergunta</button>

</div>
</form>
<div class="fim">
<h1>Já Acabou o formulario? agora é só deixar os alunos responderem:</h1>
<a href="responder.php" > <button type="submit" class="button" style="background-color: blue; color: white; width: 70%; font-weight: 700; font-size: 20px; font-size: 40px;  height: 100px; margin-left:15%; margin-right:20%">Responder Perguntas</button>
</a>
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