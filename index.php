<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Desafio XNEO</title>
</head>

<body>
  <div class="wrapper">
    <form class="form">
      <div class="inputBox">
        <input type="text" id="txt" placeholder="Adicione uma tarefa" required>
        <button class="create-btn" id="btn"><i class="fa fa-plus"></i></button>

      </div>
    </form>
    <ul id="data">

    </ul>
    <div class="footer">
      <p id="total_task"></p>
      <button id="clear">Excluir</button>
    </div>
  </div>

  <div id="editModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Editar Tarefa</h2>
      <form id="editForm">
        <input type="hidden" id="editId">
        <label for="editTxt">Texto da Tarefa:</label>
        <textarea id="editTxt" rows="3" required></textarea>
        <button type="submit" id="updateBtn">Atualizar</button>
      </form>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>