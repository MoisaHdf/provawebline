<?php
				// Conectar ao banco de dados
				$conn = mysqli_connect("localhost:3306", "root", "1234", "provapratica");

				// Checar se a conexão foi bem-sucedida
				if (!$conn) {
					die("Falha na conexão: " . mysqli_connect_error());
				}

				// Selecionar as montadoras do banco de dados
				$sql = "SELECT * FROM montadoras";
				$result = mysqli_query($conn, $sql);

				// Exibir as opções de montadoras em um campo de seleção
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<option value='" . $row["id"] . "'>" . $row["nome"] . "</option>";
					}
				}

				// Fechar a conexão com o banco de dados
				mysqli_close($conn);
			?>