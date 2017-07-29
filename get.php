<?php
$host = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
define('PATH_IMG', $host.'/pict/');
define('BASE_URL', $host.$_SERVER['REQUEST_URI']);

if(isset($_REQUEST['you'])) {
	$nama = $_REQUEST['you'];
} else {
	$nama = "Nama Kamu";
}
$data = [
	[
		'img' => 'aqua.jpg',
		'desk' => 'waifu kamu adalah Aqua-sama.. si dewi sableng'
	],
	[
		'img' => 'askontlo.jpg',
		'desk' => 'waifu kamu adalah Astolfo. Yang sabar aja gan!'
	],
	[
		'img' => 'chitoge.png',
		'desk' => 'waifu kamu adalah Chitoge. Si the best girl! dibanding yang sirambut hitam'
	],
	[
		'img' => 'emilia.png',
		'desk' => 'waifu kamu adalah Emilia-tan. Ini dabest girl gan! dibanding sirambut biru'
	],
	[
		'img' => 'julie.jpg',
		'desk' => 'waifu kamu adalah Julie. ini mantap! bisa sekamar di asrama'
	],
	[
		'img' => 'kaori.jpg',
		'desk' => 'waifu kamu adalah Kaori. Yang sabar aja gan! waifumu dah wafat mz..'
	],
	[
		'img' => 'kotori.jpeg',
		'desk' => 'waifu kamu adalah Kotori-chan. waifumu idol mz..'
	],
	[
		'img' => 'kurumi.jpg',
		'desk' => 'waifu kamu adalah Kurumi. Wadoo kelar hidup lu bisa zafkiel juga'
	],
	[
		'img' => 'nico.jpg',
		'desk' => 'waifu kamu adalah Nico. yang sabar aja gan! waifumu tydac berisi mz..'
	],
	[
		'img' => 'onodera.jpg',
		'desk' => 'waifu kamu adalah Onodera. Yang sabar aja gan! Tetap siblonde selalu dihati'
	],
	[
		'img' => 'pico.jpg',
		'desk' => 'waifu kamu adalah Pico. Ini salah satu waifu terbaik yang ada di list waifu disini. kamu sangat beruntung mz..'
	],
	[
		'img' => 'rem.png',
		'desk' => 'waifu kamu adalah Rem. waifumu latjur mz..'
	],
	[
		'img' => 'asuna.png',
		'desk' => 'waifu kamu adalah Asuna. No comment.. pokoknya da best'
	],
	[
		'img' => 'kou.jpg',
		'desk' => 'waifu kamu adalah Kou. waifumu jago buat gem mz..'
	],
	[
		'img' => 'maki.png',
		'desk' => 'waifu kamu adalah Maki. waifumu idol tsundere mz..'
	],
	[
		'img' => 'saber.png',
		'desk' => 'waifu kamu adalah Saber. waifumu jago maen pedang mz..'
	],
	[
		'img' => 'sena.jpg',
		'desk' => 'waifu kamu adalah Sena. Wadoo.. no comment oppainya gan!'
	],
	[
		'img' => 'shinobu.jpeg',
		'desk' => 'waifu kamu adalah Shinobu. Dih.. tercyduck'
	],
	[
		'img' => 'tohka.jpg',
		'desk' => 'waifu kamu adalah Tohka. Polos bisa diena2 mz..'
	],
	[
		'img' => 'tomoe.jpg',
		'desk' => 'waifu kamu adalah Tachibana Tomoe. waifumu sadis mz.. milf rasa loli'
	],
	[
		'img' => 'totsuka.png',
		'desk' => 'waifu kamu adalah Totsuka. Memikat banyak hati pria'
	],
	[
		'img' => 'yoshiko.jpg',
		'desk' => 'waifu kamu adalah Yoshiko. Enak nih.. bisa kasih pisang tiap hari!'
	],
	[
		'img' => 'ueno.png',
		'desk' => 'waifu kamu adalah Ueno. Segeralah ganti waifumu..'
	],
	[
		'img' => 'katou.jpg',
		'desk' => 'waifu kamu adalah Katou Megumi. Da best girl!'
	]
];
$rand = array_rand($data,1);
$pict = PATH_IMG.$data[$rand]['img'];
$title = $nama . ' '.$data[$rand]['desk'];
$desk = '<strong>'.$nama . '</strong> ' . $data[$rand]['desk'];
?>