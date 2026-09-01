<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--
    Crie um formulario que recebe: nome, curso, idade e tipo de participação (participante ou apresentador).
    O formulário deve enviar as informaçõe svia POST.
    Na pagina de processamento, valide os dados informados e crie funçoes para:
        exibir uma mensagem de saudação
        verifivar se é maior de idade
        informar o tipo de participação
    Ao dinal, exiba os dados na tela.
    -->

    <form action="processa.php" method="POST"> <!--GET - passa pela url    POST - não passa-->
        <div class="form-group mb-3">
            <label>Nome:</label>
            <input type="text" name="nome">
        </div>
        <br><br>


        <div class="form-group mb-3">
            <label>Idade:</label>
            <input type="text" name="idade">
        </div>
        <br><br>

        <div class="form-group mb-3">
            <label class="form-label">Curso:</label>
            <select class="form-control" name="curso">
                <option>TIN</option>
                <option>TAI</option>
                <option>TST</option>
            </select>
        </div>
        <br><br>

        <div class="form-group mb-3">
           <label class="form-label">Curso:</label>
            <select class="form-control" name="partici">
                <option>Participante</option>
                <option>Apresentador</option>
            </select>
        </div>
        <br><br>

        <button type="submit">Enviar</button>
    </form>


</body>

</html>