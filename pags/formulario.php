<?php
	$namePage = 'Formulários';
	include('pags/sem-slide.php');
?>



<section class="formularios padding-40">
	<div class="container text-center">
		<h1 class="titulo padding-20">
			Trabalhando com Formulários no HTML5
		</h1>

		<form>
			<!-- Tipos HTML4 -->
			<input type="text" name="nome" placeholder="Insira seu nome">
			<br>
			<label>
				Insira a senha: 
				<input type="password" name="senha" placeholder="Insira sua senha">
			</label>
			<br>
			<textarea name="descricao" placeholder="Informe a descrição"></textarea>
			<br>
			<label>
				Concordo com os termos:
				<input type="checkbox" name="check">
			</label>
			<br>
			<label>
				Mulher: <input type="radio" name="sexo" value="F">				
			</label>
			<label>
				Homem: <input type="radio" name="sexo" value="M">				
			</label>
			<br>
			<select name="select">
				<option>Escolha o Estado</option>
				<option value="GO">Goiás</option>
				<option value="MG">Minas Gerais</option>
				<option value="SP">São Paulo</option>
			</select>
			<br>

			<button>Enviar</button>
			<input type="submit" name="enviar" value="Enviar Agora">
		</form>
	</div>
</section>