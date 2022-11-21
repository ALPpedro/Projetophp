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
<body style="margin: 0px; padding: 0px; background-color: rgb(196, 196, 196)" >
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
<h3>Monte sua prova de forma simples e rápida</h3></div> 
</div>

<form action="./index.php" method="post" class=" needs-validation" novalidate>
    <div class="col-md-4">
    <label class="form-label">Pergunta</label>
    <textarea class="form-control" name="pergunta" required></textarea>
    <div class="valid-feedback">
        Validado!
    </div>
    <div class="invalid-feedback">
        Informe uma pergunta
    </div>
    </div>

    <div class="col-md-4">
    <label class="form-label">Pergunta</label>
    <textarea class="form-control" name="pergunta" required></textarea>
    <div class="valid-feedback">
        Validado!
    </div>
    <div class="invalid-feedback">
        Informe uma pergunta
    </div>
    </div>
    <div class="form-check">
    <input type="radio" class="form-check-input" id="validationFormCheck" name="correta" required>
    <label class="form-check-label" for="validationFormCheck">A)</label>
    <input type="text" name="A" />
  </div>
  <div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="validationFormCheck2" name="correta" required>
    <label class="form-check-label" for="validationFormCheck2">Or toggle this other radio</label>
    <div class="invalid-feedback">More example invalid feedback text</div>
  </div>



<br><br>

<label>A)</label>
<input type="radio" name="correta" value="A" />


<br><br>

<label>B)</label>
<input  type="radio" name="correta" value="B" />
<input type="text" name="B" />

<br><br>

<label>C)</label>
<input type="radio" name="correta" value="C" />
<input type="text" name="C" />

<br><br>

<label>D)</label>
<input type="radio" name="correta" value="D" />
<input type="text" name="D" />

<br><br>

<label>E)</label>
<input type="radio" name="correta" value="E" />
<input type="text" name="E" />

<br><br>

<button type="submit" class="bg-primary">Salvar Pergunta</button>

</form>

<?php
    $query = "select * from questoes order by id desc";
    $resultado = mysqli_query($conexao, $query);

    while($linha = mysqli_fetch_array($resultado)){
        ?>
            <div style="width:100%; border:1px solid;">
                <h1> <?php echo $linha["pergunta"]; ?> </h1>
                <h3> <?php echo $linha["a"]; ?> </h3>
                <h3> <?php echo $linha["b"]; ?> </h3>
                <h3> <?php echo $linha["c"]; ?> </h3>
                <h3> <?php echo $linha["d"]; ?> </h3>
                <h3> <?php echo $linha["e"]; ?> </h3>
            </div>
        <?php
    }
?>
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