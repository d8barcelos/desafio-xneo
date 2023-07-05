$(document).ready(function () {
  function showData() {
    $.ajax({
      url: "actions/show.php",
      type: "post",
      success: function (result) {
        $("#data").html(result);
      },
    });
  }
  showData();

  function totalTask() {
    $.ajax({
      url: "task.php",
      type: "post",
      success: function (result) {
        $("#total_task").html(result);
      },
    });
  }
  totalTask();

  $("#btn").on("click", function (e) {
    e.preventDefault();
    txt = $("#txt").val();

    $.ajax({
      url: "actions/insert.php",
      type: "post",
      data: { txt: txt },
      success: function (result) {
        if (result == 1) {
          txt = $("#txt").val("");
          alert("Tarefa adicionada!");
          showData();
          totalTask();
        } else {
          console.log(result);
        }
      },
    });
  });

  $(document).on("click", "#delete", function () {
    id = $(this).data("id");
    element = $(this);

    $.ajax({
      url: "actions/delete.php",
      type: "post",
      data: { id: id },
      success: function (result) {
        if (result == 1) {
          $(element).closest("li").fadeOut();
          showData();
          totalTask();
        }
      },
    });
  });

  $(document).on("click", "#clear", function () {
    $.ajax({
      url: "actions/clear.php",
      type: "post",
      success: function (result) {
        if (result == 1) {
          showData();
          totalTask();
        }
      },
    });
  });

  $(document).on("click", ".edit-btn", function () {
    var taskId = $(this).data("id");
    var taskText = $(this).siblings("p").text();

    $("#editId").val(taskId);
    $("#editTxt").val(taskText);

    $("#editModal").fadeIn();
  });

  $(document).on("click", ".close", function () {
    $("#editModal").fadeOut();
  });

  $(document).on("click", "#updateBtn", function () {
    var taskId = $("#editId").val();
    var taskText = $("#editTxt").val();

    $.ajax({
      url: "actions/update.php",
      type: "post",
      data: { id: taskId, txt: taskText },
      success: function (result) {
        if (result == 1) {
          alert("Tarefa atualizada!");
          $("#editModal").hide();
          showData();
        }
      },
    });
  });
});
