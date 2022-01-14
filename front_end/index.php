<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Mail Send</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
				<h2>Send Mail</h2>
				<p class="lead" style="color:indigo"><strong>Seu app de envio de e-mails particular!</strong></p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="processa_envio.php" method="POST">
							<div class="form-group">
								<label for="para">Para</label>
								<input type="email" class="form-control" id="para" name="para" placeholder="email@email.com.br" required>
							</div>

							<div class="form-group">
								<label for="assunto">Assunto</label>
								<input type="text" class="form-control" id="assunto"  name="assunto" placeholder="Assundo do e-mail" required>
							</div>

							<div class="form-group">
								<label for="mensagem">Mensagem</label>
								<textarea class="form-control" id="mensagem" name="mensagem" required></textarea>
							</div>

							<button type="submit" class="btn btn-info btn-lg">Enviar Mensagem</button>
						</form>
					</div>
				</div>
      		</div>
      	</div>

	</body>
</html>