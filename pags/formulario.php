<?php
	$namePage = 'Formulários';
	include('pags/sem-slide.php');
?>



<section class="formularios padding-40">
	<div class="container text-center">
		<h1 class="titulo padding-20">
			Trabalhando com Formulários no HTML5
		</h1>

		<div class="row">
			<div class="col-md-6">
				<!-- Tipos HTML4 -->
				<form>			
					<p>Formulários no HTML4</p>
					<input type="text" name="nome" placeholder="Insira seu nome">
					<br>

						<input type="password" name="senha" placeholder="Insira sua senha">
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
			<!-- Final Formulário HTML4 -->

			<!-- Formulário HTML5 -->
			<div class="col-md-6">
				<p>Novos elementos de formulário HTML5</p>
				<form>
					<div class="form-group">
						<input type="tel" name="telefone" placeholder="Telefone"> <!-- O type tel é mais semantico do que visual -->
					</div>

					<div class="form-group">
						<input type="search" name="search" placeholder="Search"> <!-- O type search é mais semantico do que visual -->
					</div>

					<div class="form-group">
						<input type="url" name="url" placeholder="Insira a url">  <!-- O type url já possui uma certa validação, mas precisa de um submit -->
					</div>

					<div class="form-group">
						<input type="email" name="email" placeholder="E-mail">  <!-- O type email já possui uma certa validação, mas precisa de um submit -->
					</div>

					<div class="form-group">
						<input type="date" name="date">
					</div>

					<div class="form-group">
						<input type="time" name="time">
					</div>

					<div class="form-group">
						<input type="month" name="mes">
					</div>

					<div class="form-group">
						<input type="datetime-local" name="dateTime">
					</div>

					<div class="form-group">
						<input type="number" name="numero">
					</div>

					<div class="form-group">
						0 <input type="range" name="intervaloNumerico" min="0" max="10" value="8"> 10
					</div>

					<div class="form-group">
						<input type="color" name="cores">
					</div>

					<div class="form-group">
						<input type="submit" name="enviar" value="Submeter"> 
					</div>
				</form>
			</div>
			<!-- Final Formulário HTML5 -->
		</div>
	</div>
</section>