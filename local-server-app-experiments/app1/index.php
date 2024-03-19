<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quick start. Local server-side application</title>
</head>
<body>
	<div id="name">
		<?php
		require_once (__DIR__.'/crest.php');

		print_r(CRest::call(
			'crm.lead.add',
			[
				'fields' =>[
					'TITLE' => 'Название лида',//Заголовок*[string]
					'NAME' => 'Имя',//Имя[string]
					'LAST_NAME' => 'Фамилия',//Фамилия[string]
				]
			])
		);
		?>
	</div>
</body>
</html>

