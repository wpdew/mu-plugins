<?php
/**
 * @package Hello_Dolly
 * @version 1.7.1
 */
/*
Plugin Name: muplug
Plugin URI: http://wordpress.org/plugins/hellosearch/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Aleks Moroz
Version: 1.7.1
Author URI: http://vseprosto.top/
*/

function muplug_dolly_get_lyric() {
	/** These are the lyrics to Hello Dolly */
	$lyrics = "Кто ищет, вынужден блуждать.
Никогда не знаешь, где найдёшь, где потеряешь.
Ничто не утеряно окончательно...
В поисках ответа натолкнешься на вопросы...
Находишь всегда то, что не искал...
За чем пойдешь, то и найдешь.
Потеряешь - не жалей, найдёшь - не радуйся.
Не доходите до крайности в поисках золотой середины!
Рыба ищет, где глубже, а мы - где рыба.
Кто ищет — тот найдет.
Дойдя до конца, люди смеются над страхами, мучившими их вначале.
Чтобы дойти до цели, надо идти. 
Это своего рода забава, делать невозможное. 
К черту все! Берись и делай! 
Мы сами должны стать теми переменами, которые хотим видеть в мире.
Делай что можешь, с тем, что у тебя есть, там, где ты находишься.
Кто хочет сдвинуть мир, пусть сдвинет себя!
Пока у тебя есть попытка - ты не проиграл! 
Я этого хочу. Значит, это будет.
Я не терпел поражений. Я просто нашёл 10 000 способов, которые не работают.
Почувствуй себя сегодня тем, кем хочешь стать завтра.
Никогда не бойся делать то, что не умеешь, иначе ничему не научишься.
Если это получилось у других, получится и у вас.
";

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function muplug_dolly() {
	$chosen = muplug_dolly_get_lyric();
	echo "<span id='dolly'> $chosen </span>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'muplug_dolly' );

// We need some CSS to position the paragraph
function muplug_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	.block-editor-page #dolly {
		display: none;
	}
	</style>
	";
}

add_action( 'admin_head', 'muplug_css' );

?>
