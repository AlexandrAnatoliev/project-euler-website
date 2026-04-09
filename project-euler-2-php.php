<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/styles/main.css">

    <title>Project Euler Blog: Проект Эйлер 2 задача на PHP </title>
    <meta name="description"
          content="Проект Эйлера 2 задача (четные числа Фибоначчи),
            реализация на PHP с онлайн-калькулятором для проверки вычислений">
  </head>

  <body>
    <?php include_once 'includes/header.php'; ?>

    <section>
      <h1 id="top">Проект Эйлер 2 задача на PHP</h1>

      <p> Решая эту задачу, постарался не только отработать конструкции языка <b>PHP</b>,
      но и сделать небольшой <b>онлайн-калькулятор</b>, позволяющий проверить ваши вычисления.</p>
    </section>

    <section>
      <h3>Четные числа Фибоначчи</h3>
      <p><i>
        Каждый следующий элемент ряда Фибоначчи получается при сложении двух предыдущих.
        Начиная с 1 и 2, первые 11 элементов будут:
      </i></p>
      <p>
        <b><i>1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...</b></i>
      </p>
      <p><i>
        Найдите сумму всех четных элементов ряда Фибоначчи, которые не превышают четыре миллиона.
      </i></p>
    </section>

    <section>
      <article class="calculator">
        <h3>Онлайн-калькулятор: "Поиск ближайшего числа Фибоначчи"</h3>

        <form method="post">
          <label for="max_fib">Введите максимальное число:</label>
          <input type="number" step="any" id="max_fib" name="max_fib" required><br>
          <br>
          <input type="submit" value="Найти">
        </form>

        <?php
            // Получаем введенные значения из запроса
            $max_fib_str = $_POST['max_fib'] ?? null;

            // Проверяем, что параметры не null и не пустые
            if ($max_fib_str !== null && $max_fib_str !== '' && is_numeric($max_fib_str)) {
                try {
                    $first_fib  = 1;
                    $second_fib = 2;

                    // Преобразуем строки в числа
                    $max_fib = (float)$max_fib_str;

                    while ($second_fib <= $max_fib) {
                        $next_fib   = $first_fib + $second_fib;
                        $first_fib  = $second_fib;
                        $second_fib = $next_fib;
                    }
                    echo '<p>Ближайшее число Фибоначчи, меньшее ' . $max_fib . ' = ' . $first_fib . '</p>';
                } catch (Exception $e) {
                    // Обработка ошибки ввода
                    echo '<p style="color: red;">Ошибка: Пожалуйста, введите корректные числовые значения.</p>';
                }
            } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Если была отправлена форма, но данные некорректны
                echo '<p style="color: red;">Ошибка: Пожалуйста, введите корректные числовые значения.</p>';
            }
        ?>
      </article>
    </section>

    <section>
      <h3>Описание алгоритма работы программы</h3>

<pre class="vimcode">
<span class="LineNr">1  </span><span class="Special">&lt;?php</span>
<span class="LineNr">2  </span><span class="Statement">$</span><span class="Identifier">first_fib</span>  <span class="Statement">=</span> <span class="Constant">1</span>;
<span class="LineNr">3  </span><span class="Statement">$</span><span class="Identifier">second_fib</span> <span class="Statement">=</span> <span class="Constant">2</span>;
<span class="LineNr">4  </span><span class="Statement">$</span><span class="Identifier">max_fib</span>    <span class="Statement">=</span> <span class="Constant">4000000</span>;
<span class="LineNr">5  </span><span class="Statement">$</span><span class="Identifier">answer</span>     <span class="Statement">=</span> <span class="Constant">0</span>;
<span class="LineNr">6  </span><span class="Statement">while</span> <span class="Special">(</span><span class="Statement">$</span><span class="Identifier">second_fib</span> <span class="Statement"><=</span> <span class="Statement">$</span><span class="Identifier">max_fib</span><span class="Special">)</span> <span class="Special">{</span>
<span class="LineNr">7  </span>    <span class="Statement">if</span> <span class="Special">(</span><span class="Statement">$</span><span class="Identifier">second_fib</span> <span class="Statement">%</span> <span class="Constant">2</span> <span class="Statement">==</span> <span class="Constant">0</span> <span class="Special">)</span> <span class="Special">{</span>
<span class="LineNr">8  </span>        <span class="Statement">$</span><span class="Identifier">answer</span> <span class="Statement">+=</span> <span class="Statement">$</span><span class="Identifier">second_fib</span>;
<span class="LineNr">9  </span>    <span class="Special">}</span>
<span class="LineNr">10 </span><span class="Statement">$</span><span class="Identifier">next_fib</span>   <span class="Statement">=</span> <span class="Statement">$</span><span class="Identifier">first_fib</span> <span class="Statement">+</span> <span class="Statement">$</span><span class="Identifier">second_fib</span>;
<span class="LineNr">11 </span><span class="Statement">$</span><span class="Identifier">first_fib</span>  <span class="Statement">=</span> <span class="Statement">$</span><span class="Identifier">second_fib</span>;
<span class="LineNr">12 </span><span class="Statement">$</span><span class="Identifier">second_fib</span> <span class="Statement">=</span> <span class="Statement">$</span><span class="Identifier">next_fib</span>;
<span class="LineNr">13 </span><span class="Special">}</span>
<span class="LineNr">14 </span><span class="PreProc">echo</span> <span class="Constant">'Answer = '</span> <span class="Statement">.</span> <span class="Statement">$</span><span class="Identifier">answer</span>;
<span class="LineNr">15 </span><span class="Special">?&gt;</span>
</pre>

      <p>Во-первых, нужно помнить, что согласно заданию, и самому
      определению чисел Фибоначчи: “следующий элемент получается при
      сложении двух предыдущих”.</p>
      <div class="vimcode" id='vimCodeElement'>
        <span class="LineNr">10 </span><span class="Statement">$</span><span class="Identifier">next_fib</span>   <span class="Statement">=</span> <span class="Statement">$</span><span class="Identifier">first_fib</span> <span class="Statement">+</span> <span class="Statement">$</span><span class="Identifier">second_fib</span>;
      </div>

      <p>
        Во-вторых, четное число делится на <b>2</b> без остатка:
      </p>
      <div class="vimcode">
        <span class="LineNr">7  </span>    <span class="Statement">if</span> <span class="Special">(</span><span class="Statement">$</span><span class="Identifier">second_fib</span> <span class="Statement">%</span> <span class="Constant">2</span> <span class="Statement">==</span> <span class="Constant">0</span> <span class="Special">)</span> <span class="Special">{</span>
      </div>

      <p>Ну и главное, не нужно вычислять каждый элемент ряда каждый раз заново.<br>
      Поэтому как только будет получено число Фибоначчи, следующее за первыми двумя:</p>
      <div class="vimcode">
        <span class="LineNr">10 </span><span class="Statement">$</span><span class="Identifier">next_fib</span>   <span class="Statement">=</span> <span class="Statement">$</span><span class="Identifier">first_fib</span> <span class="Statement">+</span> <span class="Statement">$</span><span class="Identifier">second_fib</span>;
      </div>

      <p>...значения обновляются:</p>
      <div class="vimcode">
        <span class="LineNr">11 </span><span class="Statement">$</span><span class="Identifier">first_fib</span>  <span class="Statement">=</span> <span class="Statement">$</span><span class="Identifier">second_fib</span>;
      </div>
      <p>...первое число принимает значение второго:</p>

      <div class="vimcode">
        <span class="LineNr">12 </span><span class="Statement">$</span><span class="Identifier">second_fib</span> <span class="Statement">=</span> <span class="Statement">$</span><span class="Identifier">next_fib</span>;
      </div>

      <p>
        ...второе – третьего (суммы первых двух).<br /> Такой цикл продолжается снова
        и снова до тех пор, пока в итоге не дойдет до искомых <b>4 000 000</b>.</p>

    <section>
      <h2>Для контрибьютеров</h2>

      <p>Вы можете предложить свой вариант решения задачи и прислать в виде pull request.</p>

      <aside class="article-preview" aria-label="article 6">
        <h4>Project-Euler Open Source</h4>
        <p><b>Project-Euler</b> - это опенсорс проект, который помогает изучить
        и попрактиковать конструкции различных языков программирования...
        <a href="project-euler-open-source.php"><b>читать</b></a> </p>
      </aside>

      <p>В случае, если вы заметили какие то неточности в статье или хотите предложить
      какие-либо изменения в верстке этого сайта, вы всегда можете создать pull request
      в этот проект.</p>

      <aside class="article-preview" aria-label="article 3">
        <h4>Простой сайт на HTML</h4>
        <p>Чтобы сделать сайт доступным из любой точки мира, самым простым вариантом
        будет запустить его HTML-страницу на VPS-сервере с XAMPP.
        Весь процесс можно разбить на несколько простых шагов...
        <a href="prostoj-sajt-na-html.php"><b>читать</b></a> </p>
      </aside>

      <p>Если у вас есть идеи по CSS-настройкам этого сайта, тогда прочитайте эту статью.</p>
      <aside class="article-preview" aria-label="article 1">
        <h4>Выделение CSS-настроек в отдельный репозиторий</h4>
        <p>Project-Euler-CSS - это CSS-настройки для моего блога Project-Euler-Blog.
        Выделение CSS-настроек в отдельный репозиторий позволяет
        использовать их повторно в разных проектах и избавляет от необходимости
        вносить одни и те же изменения в каждый проект...
        <a href="vydelenie-css-v-otdelnyj-repozitorij.php"><b>читать</b></a> </p>
      </aside>
    </section>

    <section>
      <aside class="article-preview" aria-label="nav menu">
        <h4>Навигация по статьям</h4>
        <ul>
          <li><a href="project-euler-1-php.php"><b>Проект Эйлер 1 задача на PHP</b></a></li>
          <li><a href="project-euler-open-source.php"><b>Project Euler Open Source</b></a></li>
          <li><b>Проект Эйлер 2 задача на PHP</b></li>
        </ul>
      </aside>

      <footer>
        <ul>
          <li><a href="#top"><b>Наверх</b></a></li>
        </ul>
      </footer>
    </section>
  </body>
</html>
