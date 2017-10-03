<?php 
   $NomeAluno = $_POST["NomeAluno"];
   $NomeDisciplina = $_POST["NomeDisciplina"];
   $NomeCurso = $_POST["NomeCurso"];
   $linkImg = $_POST["linkImagem"];
    $NotaTrab1 = $_POST["Notatrab"];
   $Nota1 = $_POST["Nota1"];
   $Nota2 = $_POST["Nota2"];
   $Nota3 = $_POST["Nota3"];
   $NomeProf = $_POST["NomeProf"];
   $NomeCoordenador = $_POST["NomeCoordenador"];
   $FaculdadeNome = "Promove";
   $Declar = "Declaração";
   $nao = '';

   function calcular ($NotaALUNO,$Total) {
    return round (($NotaALUNO/$Total)*100);
   }
    $NotaTOTAL = $Nota1 + $Nota2 + $Nota3 + $NotaTrab1;
    if ( $NotaTOTAL >= 90) {
    $Resultado = "Excelente";
   }
    elseif ( $NotaTOTAL >= 80){
    $Resultado = "Ótimo";
   }
    elseif ( $NotaTOTAL >= 70){
    $Resultado = "Bom";
   }
    elseif ( $NotaTOTAL >= 60){
    $Resultado = "Ruim";
   }
    elseif ( $NotaTOTAL < 60){
    $Resultado = "Péssimo";
    $nao = "<span class='nao' > NÃO</span>";
   }
  ?>
  <!DOCTYPE html>
  <html>
   <head>
   <title>
      Declaração
   </title>
   <link rel="stylesheet" type="text/css" href="css/index.css" >
    </head>
   <body>
   <center>
    <img src =
   <?php  echo '"' .$linkImg. '"' ?> title= <?php echo '""' .$FaculdadeNome. '""' ?> alt='Faculdade' Width="420">
   <h1> <?php echo $Declar ?> </h1>
   </center>

   <center> Declaramos, para os devidos fins, <?php echo $NomeAluno.''?> <?= $nao ?>  Concluiu Satisfatoriamente as Atividades da <p> Disciplina
   <? echo $NomeDisciplina.'' ?> do curso de <?php echo  $NomeCurso ?> .<p/></center>
   <hr>
   <hr>
   <p><center>Segue o Desempenho de <?php echo $NomeAluno ?></center> </p>
   <table border = 1 align = "center">
   <thead>
            <th>
                Critérios
            </th>
            <th>
                Valor Total
            </th>
            <th>
                Nota do Aluno
            </th>
            <th>
                Desempenho
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    Prova 1
                </td>
                <td>
                    15
                </td>
                <td>
                    <?php echo $Nota1 ?></td>
                <td>
                    <?php echo calcular ($Nota1,15) ?>%</td>
            </tr>
            <tr>
                <td>
                    Prova 2
                </td>
                <td>
                    25
                </td>
                <td>
                    <?php echo $Nota2 ?></td>
                <td>
                    <?php echo calcular ($Nota2,25) ?>%</td>
            </tr>
            <tr>
                <td>
                    Prova 3
                </td>
                <td>
                    35
                </td>
                <td>
                    <?= $Nota3 ?></td>
                <td>
                    <?php echo calcular ($Nota3,35) ?>%</td>
            </tr>
            <tr>
                <td>
                    Trabalhos
                </td>
                <td>
                    25
                </td>
                <td>
                    <?= $NotaTrab1 ?></td>
                <td>
                    <?php echo calcular ($NotaTrab1,25) ?>%</td>
            </tr>
        </tbody>
    </table>
    <p align = "center">
                Com esse resultado, o conceito de 
                <?php echo $NomeAluno ?> 
                foi 
                <span class="Resultado"><?php echo $Resultado . ','?></span>
                já que sua nota total foi de    
                <span class="Pontos"><?php echo $NotaTOTAL?></span>
                pontos 
            </span>
         <center>
            <p>
                Belo Horizonte, 
                <?php echo date('d/m/y'); ?> 
            </p>
            <p>
                ____________________________________ 
                <br>
                <?php echo $NomeProf?> - Professor(a)
            </p>
            <p>
                ____________________________________ 
                <br>
                <?php echo $NomeCoordenador?> - Coordenador(a) 
            </p>
         </center>
		</center>

  </html>
