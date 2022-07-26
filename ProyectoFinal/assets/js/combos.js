$(document).ready(function () {
  $("#provincia").change(function () {
    $("#provincia option:selected").each(function () {
      idprovincia = $(this).val();
      $.post(
        "../controller/getLocalidad.php",
        { idprovincia: idprovincia },
        function (data) {
          $("#localidad").html(data);
        }
      );
    });
  });
});
