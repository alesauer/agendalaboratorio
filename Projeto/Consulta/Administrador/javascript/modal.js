 $(document).ready(function(){

    $('a[data-confirm]').click(function(ev){
        var href = $(this).attr('href');

        if(!$('#confirm-excluir').length){

            $('body').append('<div class="ls-modal" id="modalSmall confirm-excluir"><div class="ls-modal-small"><div class="ls-modal-header"><h4 id="titulomodal" class="ls-modal-title">Novo usuário</h4></div><div class="ls-modal-body"><form id="" action="" class="ls-form row"><fieldset><label class="ls-label col-md-12 col-xs-12"><b class="ls-label-text">Nome*</b><input type="text" name="nome" placeholder="Digite seu nome" class="ls-field" required></label><label class="ls-label col-md-12 col-xs-12"><b class="ls-label-text">E-mail*</b><input type="text" name="nome" placeholder="Digite seu e-mail" class="ls-field" required></fieldset><fieldset><label class="ls-label col-md-12 col-xs-12"><b class="ls-label-text">CPF*</b><input type="text" name="nome" placeholder="000.000.000-00" class="ls-field ls-mask-cpf" required></label><label class="ls-label col-md-12 col-xs-12"><b class="ls-label-text">Perfil</b><div class="ls-custom-select"><select name="" class="ls-select"><option>Selecione</option><option>Ativos</option><option>Desativados</option></select></div></label></fieldset><fieldset><label class="ls-label col-md-12"><b class="ls-label-text">Senha</b><div class="ls-prefix-group"><input type="password" id="password_field" name="password" value="" ><a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field" href="#"></a></div></label><label class="ls-label col-md-12"><b class="ls-label-text">Confirme sua senha</b><div class="ls-prefix-group"><input type="password"  id="password_field2" name="password" value="" ><a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password_field2" href="#"></a></div></label></fieldset><fieldset><label class="ls-label col-md-12 col-xs-12"><b class="ls-label-text">Período de aula</b><div class="ls-custom-select"><select name="" class="ls-select"><option>Selecione</option><option>Manhã</option><option>Noite</option></select></div></label><div class="ls-label col-md-12 col-xs-12"><p class="ls-label-text">Pode reservar?</p><label class="ls-label-text"><input type="radio" name="plataforms" class="ls-field-radio">Sim</label><label class="ls-label-text"><input type="radio" name="plataforms" class="ls-field-radio">Não</label></div></form></div><div class="ls-modal-footer"><button class="ls-btn ls-float-right" data-dismiss="modal">Cancelar</button><a id="dataconfirmOk"  class="ls-btn-primary">Salvar</a></div></div></div>');      
        }
            $('#dataconfirmOk').attr('href', href);
            locastyle.modal.open("#confirm-excluir");
            return false;

 })




 });
 
 
 