/* Fazer validação dos campos. Modelo já pronto para e-mail e cpf falta somente adaptar!

function validacaoEmail(field, field2) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);
    var cpf = field2.value;

    if ((usuario.length >= 1) &&
      (dominio.length >= 3) &&
      (usuario.search("@") == -1) &&
      (dominio.search("@") == -1) &&
      (usuario.search(" ") == -1) &&
      (dominio.search(" ") == -1) &&
      (dominio.search(".") != -1) &&
      (dominio.indexOf(".") >= 1) &&
      (dominio.lastIndexOf(".") < dominio.length - 1)) {

      if (cpf.length < 11) {
        document.getElementById("alerta-email").innerHTML = "<strong>Erro!</strong> CPF inválido.";
        
      }
    } else {
      if (cpf.length < 11) {
        document.getElementById("alerta-email").innerHTML = "<strong>Erro!</strong> E-mail e CPF inválidos";
        
      } else {
        document.getElementById("alerta-email").innerHTML = "<strong>Erro!</strong> E-mail inválido. Os endereços de e-mail devem seguir o padrão xx@xx.xx. ";
        
      }
    }
  }

  $(document).ready(function () { 
      var $seuCampoCpf = $("#cpf");
      $seuCampoCpf.mask('000.000.000-00', {reverse: true});
  }); */