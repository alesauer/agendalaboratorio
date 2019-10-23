function testasenha(senha1, senha2) {
    if ((senha1.value).length < 4 || (senha2.value).length < 4) {
      //document.getElementById("alerta-senha").innerHTML = "<strong>Erro!</strong> Senha deverá conter no minimo 4 caracteres.";
    } else {

      if (senha1.value != senha2.value) {
       // document.getElementById("alerta-senha").innerHTML = "<strong>Erro!</strong> Campo Nova Senha e Confirmar Senha devem ser iguais.";
      }

    }

  }