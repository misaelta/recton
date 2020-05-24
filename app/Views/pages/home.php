<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
				
			</div>
			<div class="card-body">
				<form action="login"  method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="email" type="text" class="form-control" placeholder="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="senha" type="password" class="form-control" placeholder="senha">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Me Lembre
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a style="margin-right:2px; color:#fff" href="cadastrar">Cadastro Candidato</a>
					<a  style="margin-right:2px; color:#fff" href="cadastrarEmpresa">Cadastro Empresa</a>
				</div>
				<div class="d-flex justify-content-center">
					<a style="margin-right:2px; color:#fff" href="#">Esqueceu a senha?</a>
				</div>
			</div>
		</div>
	</div>
</div>