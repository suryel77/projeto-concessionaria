<h1>Cadastrar Venda</h1>
<form action="?page=salvar-venda" method="POST">
		<input type="hidden" name="acao" value="cadastrar">
		
		<div class="mb-3">
			<label>nome
				<input type="text" name="nome_venda" class="form-control">
			</label>
		</div>

		<div class="mb-3">
			<label>E-mail
				<input type="email" name="email_venda" class="form-control">
			</label>
		</div>

		<div class="mb-3">
			<label>Telefone
				<input type="text" name="telefone_venda" class="form-control">
			</label>
		</div>

		<div>
			<button type="submit" class="btn-primary">Enviar</button>
		</div>

</form>