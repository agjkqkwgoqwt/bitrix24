<?
require_once('crest.php');
// put an example below
echo '<PRE>';
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
echo '</PRE>';