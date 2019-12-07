<?php

Kirby::plugin('hear/parse-diploma-csv', [
	'hooks' => [
		'page.updatete:before' => function () {
			throw new Exception('Nope');
		}
	]
]);
