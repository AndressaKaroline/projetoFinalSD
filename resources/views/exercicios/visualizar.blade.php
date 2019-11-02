<div class="modal fade" id="personaisModal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Dados do Personal</h4>
            </div>
            <div class="modal-body">
                <div class="form-group col-sm-12">
                    <label for="nome">Nome Completo: </label>
                    <input id="nome" name="nome" value="{{ old('nome') }}" class="form-control" placeholder="Maria" disabled>
                </div>
                <div class="form-group col-sm-6">
                    <label for="dataNascimento">Data de Nascimento: </label>
                    <input type="date" id="dataNascimento" name="dataNascimento" class="form-control" disabled>
                </div>
                <div class="form-group col-sm-6">
                    <label for="idade">Idade: </label>
                    <input id="idade" name="idade" class="form-control" placeholder="Idade" disabled>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-3" for="rg">RG: </label>
                    <input id="rg" name="rg" class="form-control" placeholder="RG" disabled>
                </div>
                <div class="form-group col-sm-6">
                    <label class="control-label col-sm-1" for="cpf">CPF: </label>
                    <input id="cpf" name="cpf" class="form-control cpf-mask" placeholder="CPF" disabled>
                </div>
                <div class="form-group col-sm-12">
                    <label class="control-label col-sm-3" for="address">Endereço: </label>
                    <input id="address" name="address" class="form-control" placeholder="Endereço" disabled>
                </div>
                <div class="form-group col-sm-12">
                    <label class="control-label col-sm-3" for="country">Município: </label>
                    <input id="country" name="country" class="form-control" placeholder="Município" disabled>
                </div>
                <div class="form-group col-sm-12">
                    <label class="control-label col-sm-3" for="telephone">Telefone: </label>
                    <input id="telephone" name="telephone" class="form-control" placeholder="Telefone" disabled>
                </div>
                <div class="form-group col-sm-12">
                    <label class="control-label col-sm-3" for="plano">Salário: </label>
                    <input type="text" name="" class="form-control" value="R$ 1.500,00" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
