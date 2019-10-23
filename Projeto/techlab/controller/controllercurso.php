<?php



function listaCurso(){
    
    $query = "SELECT C.ID AS ID ,C.DESCRICAO AS 'DESC' ,C.TIPO_CURSO_ID AS TIPO_CURSO_ID , T.DESCRICAO AS DESCTIPO FROM CURSO AS C LEFT JOIN TIPO_CURSO AS T ON  C.TIPO_CURSO_ID = T.TIPO;";
    $resultado = mysqli_query(buscaconexao(),$query);

    while($curso = mysqli_fetch_assoc($resultado)){
    
          echo "
            <tr>
                <td><a href='' title='' class='ls-ico-screen'>".utf8_encode($curso["DESCTIPO"])."</a></td>
                <td>".utf8_encode($curso["DESC"])."</td>
                  <td>
                        <button  data-ls-module='modal' data-target='#modalSmall".$curso['ID']."' class='ls-btn ls-ico-pencil'></button>
                          <div class='ls-modal' id='modalSmall".$curso['ID']."'>
                            <div class='ls-modal-small'>
                              <div class='ls-modal-header'>
                                <button data-dismiss='modal'>&times;</button>
                                <h4 class='ls-modal-title'>Editar Curso</h4>
                              </div>
                              <div class='ls-modal-body'>
                                  <form action='controller/editarCurso.php'  method='post' class='ls-form-inline row' >
                                        <label class='ls-label col-md-11'>
                                                <b class='ls-label-text'>Curso: </b>
                                                <input type='text'  name='DESC' placeholder='' required  value='".utf8_encode($curso['DESC'])."'>
                                                <input type='hidden' name='ID' placeholder='' required  value='".$curso['ID']."'>
                                         </label>


                                    <label class='ls-label col-md-4 col-xs-12' id='filtrar'>
                                      <b class='ls-label-text'>Filtrar por:</b>
                                      <div class='ls-custom-select'>
                                        <select name='listaCursoModal' class='ls-select'>
                                            ".listaTipoCurso2($curso["TIPO_CURSO_ID"])."
                                        </select>
                                      </div>
                                    </label>
                              <div class='ls-modal-footer'>
                                      
                                        <button class='ls-btn-dark ls-float-right ls-ico-close' data-dismiss='modal' style='margin: 3px;'>Cancelar</button>
                                        <button type='submit' class='ls-btn-dark ls-ico-remove' style='margin: 3px;'>Excluir</button>
                                        <button type='submit' class='ls-btn-dark ls-ico-checkmark' style='margin: 3px;'>Salvar</button>
                                       
                              </div>
                                        </form>
                              </div>
                            </div>
                          </div>
                    </td>
             </tr> ";    
        
    }
 
}


function listaTipoCurso(){
    $query = "select * from TIPO_CURSO";
    $resultado = mysqli_query(buscaconexao(),$query);
    while($tipoCurso = mysqli_fetch_assoc($resultado)){
          echo"<option value='".$tipoCurso["TIPO"]."'>".$tipoCurso["DESCRICAO"]."</option>";
    }
    
}

function listaTipoCurso2($idSelecionado){
    $op="";
    $query2 = "select * from TIPO_CURSO";
    $resultado2 = mysqli_query(buscaconexao(),$query2);
    while($tipoCurso2 = mysqli_fetch_assoc($resultado2)){
        if($idSelecionado==$tipoCurso2["TIPO"] ) {
            $op .= "<option selected value='".$tipoCurso2["TIPO"]."'>".$tipoCurso2["DESCRICAO"]."</option>";
        }else{
            $op .= "<option value='".$tipoCurso2["TIPO"]."'>".$tipoCurso2["DESCRICAO"]."</option>";
        }
        
    }
    return $op;
    
}
