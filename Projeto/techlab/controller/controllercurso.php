<?php


// Cria as linhas com os dados do curso
function listaCurso(){
    
    
//QUERY que será executada no bando de dados
    $query = "SELECT C.ID AS ID ,C.DESCRICAO AS 'DESC' ,C.TIPO_CURSO_ID AS TIPO_CURSO_ID , T.DESCRICAO AS DESCTIPO FROM CURSO AS C LEFT JOIN TIPO_CURSO AS T ON  C.TIPO_CURSO_ID = T.TIPO ORDER BY  C.ID;";
    $resultado = mysqli_query(buscaconexao(),$query);
//Resultado da QUERY executada no bando de dados
    while($curso = mysqli_fetch_assoc($resultado)){
    // mysqli_fetch_assoc Transforma o resultado do select em um conjunto onde o dado que busta na tabela pode ser referênciado pelo nome da coluna.
        // Cria a LINHA  
        echo "<!-- LINHA DO CURSO -->
            <tr>
                <td><a href='' title='' class='ls-ico-screen'>".$curso["DESCTIPO"]."</a></td>
                <td>".$curso["DESC"]."</td>
                  <td>
                        <button  data-ls-module='modal' data-target='#modalSmall".$curso['ID']."' class='ls-btn ls-ico-pencil'></button>
                        <button  data-ls-module='modal' data-target='#deletemodalSmall".$curso['ID']."' class='ls-btn ls-ico-remove'></button>
                            <!-- MODAL PARA EDITAR -->
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
                                        <label class='ls-label col-md-4  col-md-11' id='filtrar'>
                                            <b class='ls-label-text'>Tipo do curso:</b>
                                                <div class='ls-custom-select'>
                                                    <select name='listaCursoModal' class='ls-select'>".listaTipoCurso2($curso["TIPO_CURSO_ID"])."</select>
                                                </div>
                                        </label>
                                        <div class='ls-modal-footer'>
                                              <button class='ls-btn-dark ls-float-right ls-ico-close' data-dismiss='modal' style='margin: 3px;'>Cancelar</button>
                                              <button type='submit' class='ls-btn-dark ls-ico-checkmark' style='margin: 3px;'>Salvar</button>   
                                        </div>
                                    </form>
                              </div>
                            </div>
                          </div>    
                          <!-- MODAL PARA DELETAR -->
                          <div class='ls-modal' id='deletemodalSmall".$curso['ID']."'>
                            <div class='ls-modal-small'>
                              <div class='ls-modal-header'>
                                <button data-dismiss='modal'>&times;</button>
                                <h4 class='ls-modal-title'>Excluir curso</h4>
                              </div>
                              <div class='ls-modal-body'>
                                 <form action='controller/excluirCurso.php'  method='post' class='ls-form-inline row' >
                                  <input type='hidden' name='ID' placeholder='' required  value='".$curso['ID']."'>
                                <p><h3>Confirma exclusão do registro? 
                                <br><br><center><p style='color: red; font-size:20px'>".utf8_encode($curso["DESC"])."</p></h3></center>
                                  <br><p> Essa operação não pode ser desfeita.</p>
                              </div>
                              <div class='ls-modal-footer'>
                                
                                <button type='submit' class='ls-btn-primary-danger ls-ico-remove'>Excluir</button>
</form>                              

                              
<button class='ls-btn-dark ls-float-right ls-ico-close' data-dismiss='modal'>Fechar</button>
                                 </div>
                            </div>
                          </div>
                    </td>
             </tr> ";    
        
    }
 
}


//FUNÇÂO PARA LISTAR OS TIPOS DE CURSO
function listaTipoCurso(){
    $query = "select * from TIPO_CURSO";
    $resultado = mysqli_query(buscaconexao(),$query);
    while($tipoCurso = mysqli_fetch_assoc($resultado)){
          echo"<option value='".$tipoCurso["TIPO"]."'>".$tipoCurso["DESCRICAO"]."</option>";
    }
    
}

//FUNÇÂO PARA LISTAR OS TIPOS DE CURSO NOS CAMPOS DE SELEÇÃO 
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
