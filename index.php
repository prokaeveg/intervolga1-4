<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Выполнение тестовых заданий</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 	<h1>1. PHP и HTML. Напишите код на PHP.</h1>
 	<br>
 	В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
	Нужно в переменную $b записать сокращенный текст новости по правилам: - обрезать до 180 символов - приписать многоточие - последние 2 слова и многоточие сделать ссылкой на полный текст новости.
	Какие проблемы вы видите в решении этой задачи? Что может пойти не так?
	<br><br>
	<?php
		$a = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

		$link = 'localhost';

		echo "Полный текст новости в переменной а:<br> ", $a;

		$c = trim(substr($a, 0, 180));
		$exp = explode(" ",$c);
		$max = max(array_keys($exp));
		$repl = $exp[$max-1]." ".$exp[$max];
		echo "<br><br>Итоговый текст в переменной c: <br>";
		echo preg_replace("/($repl)/i", "<a href='urlhere'>\\1...</a>", $c);
	?>


	<h1>2. Веб-разработка</h1>
	<br>
	На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.  
	Обратите внимание на размер и пропорции.
	<br><br>
	<div style="background: url(img/image.png) center left #fc0; background-size: cover; height: 100px; width: 200px;">
    </div>

    <p>у картинки большой размер, я установил ее в виде фона и добавил заливку цветом, чтобы если загрузка картинки опаздывает
        <br> будет виден фоновый цвет, как только картинка загрузится она заменит собой цвет фона</p>
	</div>

	<h1>3. БД</h1>
	<p>Чем отличаются эти запросы:<br>
	1. SELECT * FROM a, b WHERE a.id=b.a_id;<br>
	2. SELECT * FROM a JOIN b ON a.id=b.a_id;<br>
	</p>
	<p>По сути, эти два запроса ничем не отличаются, результат их работы будет одинаковый, но если представить себе запрос из 4-5 связываний и где условия прописаны в секции where и там же будут прописаны условия фильтрации, не входящие в условия связывания, такой запрос невозможно прочитать. Поэтому второй вариант лучше с точки зрения стиля и удобства понимания кода</p>

	<h1>4. Массивы</h1>
	<p>Дан массив из 100 элементов. Требуется вывести количество пар одинаковых элементов.</p>
	<?php
		$count = 0;
		$array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51, -51, 4, 5, 3, 4, 4, 4, 8, 9, 0, 0];
		foreach ($array as &$elem){
			echo $elem, " ";
		}
		for ($i=0;$i<count($array); $i++){
			if ($array[$i] == $array[$i-1])
				$count ++;
		}
		echo "<br>",$count;
	?>
 </body>
 </html>