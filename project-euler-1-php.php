<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/styles/main.css">

    <title>Project Euler Blog: Проект Эйлер 1 задача на PHP </title>
    <meta name="description"
          content="Проект Эйлера 1 задача (числа, кратные 3 или 5) прозволяет отработать конструкции языка PHP"> 
  </head>
  <body>
    <header>
      <div class="favicon">
        <a href="/"><img src="favicon.ico" alt="Проект Эйлера блог"
                                           class="favicon"></a>
      </div>
      <div class="github">
        <a href="https://github.com/AlexandrAnatoliev"><img
           src="images/logo/github.svg" alt="Ссылка на github"
                                        class="github"></a>
      </div>

      <nav>
        <ul>
          <li><a href="index.html"><b>Project Euler Blog</b></a></li>
        </ul>
      </nav>
    </header>

    <section>
      <h1 id="top">Проект Эйлер 1 задача на PHP</h1>

      <p> Решая эту задачу, постарался не только отработать конструкции языка <b>PHP</b>, 
      но и сделал небольшой <b>онлайн-калькулятор</b>, позволяющий проверить ваши вычисления.</p>
    </section>

    <section>
      <h3>Числа, кратные 3 или 5</h3>

      <p><i>Если выписать все натуральные числа меньше <b>10</b>,
        кратные <b>3</b> или <b>5</b>, то получим <b>3, 5, 6</b> и <b>9</b>.
        Сумма этих чисел равна <b>23</b>.<br /> Найдите сумму всех
        чисел меньше <b>1000</b>, кратных <b>3</b> или <b>5</b>.</i></p>
    </section>

    <section>
      <article class="calculator">
        <h3>Онлайн-калькулятор: "Определение кратности двух чисел"</h3>

        <form method="post">
          <label for="number1">Введите первое число:</label>
          <input type="number" step="any" id="number1" name="number1" required><br>
          <br>
          <label for="number2">Введите второе число:</label>
          <input type="number" step="any" id="number2" name="number2" required><br>
          <br>
          <input type="submit" value="Определить делимость">
        </form>

        <?php
            // Получаем введенные значения из запроса
            $num1Str = $_POST['number1'] ?? null;
            $num2Str = $_POST['number2'] ?? null;

            // Проверяем, что параметры не null и не пустые
            if ($num1Str !== null && $num2Str !== null && $num1Str !== '' && $num2Str !== '' && is_numeric($num1Str) && is_numeric($num2Str)) {
                try {
                    // Преобразуем строки в числа
                    $num1 = (float)$num1Str;
                    $num2 = (float)$num2Str;

                    // Проверка деления на ноль
                    if ($num2 == 0) {
                        echo '<p style="color: red;">Ошибка: Деление на ноль невозможно.</p>';
                    } elseif (fmod($num1, $num2) == 0) {
                        echo "<p>Число <strong>$num1</strong> делится на число <strong>$num2</strong> нацело.</p>";
                    } else {
                        echo "<p>Числа <strong>$num1</strong> и <strong>$num2</strong> не делятся нацело.</p>";
                    }
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
      <aside class="article-preview">
        <h4>Навигация по статьям</h4>
        <ul>
          <li><a href="vydelenie-css-v-otdelnyj-repozitorij.html"><b>Выделение CSS-настроек в отдельный репозиторий</b></a></li>
          <li><a href="ustanovka-xampp-na-server.html"><b>Установка XAMPP на сервер</b></a></li>
          <li><b>Простой сайт на HTML</b></li>
          <li><a href="ustanovka-ssl-sertifikata-na-sajt.html"><b>Установка SSL-сертификата на сайт</b></a></li>
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
