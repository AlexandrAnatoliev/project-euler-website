<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/styles/main.css">

    <title>Project Euler Blog</title>
    <meta name="description"
          content="Мой блог в котором я решаю задачи проекта Эйлер">
  </head>
  <body>
    <?php include_once 'includes/header.php'; ?>

    <section>
      <h1 id="top">Project Euler Blog</h1>

      <p>Мой блог, в котором я решаю задачи проекта Эйлер, изучаю программирование
      и делаю заметки о том, что узнал нового и интересного.</p>
    </section>

    <section>
      <?php include_once 'includes/articles.php'; ?>

      <aside class="article-preview" aria-label=$article[0]['aria_label']>
        <h4><?= $article[0]['header'] ?></h4>
        <p><?= $article[0]['preview'] ?> <?= $article[0]['link'] ?></p>
      </aside>

      <aside class="article-preview" aria-label="article 2">
        <h4>Установка XAMPP на сервер</h4>
        <p>Краткий гайд...
        <a href="ustanovka-xampp-na-server.php"><b>читать</b></a> </p>
      </aside>

      <aside class="article-preview" aria-label="article 3">
        <h4>Простой сайт на HTML</h4>
        <p>Чтобы сделать сайт доступным из любой точки мира, самым простым вариантом
        будет запустить его HTML-страницу на VPS-сервере с XAMPP.
        Весь процесс можно разбить на несколько простых шагов...
        <a href="prostoj-sajt-na-html.php"><b>читать</b></a> </p>
      </aside>

      <aside class="article-preview" aria-label="article 4">
        <h4>Установка SSL-сертификата на сайт</h4>
        <p>Браузеры помечают сайты без HTTPS как «небезопасные».
        Чтобы сайт работал через HTTPS небходимо установить SSL-сертификат...
        <a href="ustanovka-ssl-sertifikata-na-sajt.php"><b>читать</b></a> </p>
      </aside>

      <aside class="article-preview" aria-label="article 5">
        <h4>Проект Эйлер 1 задача на PHP</h4>
        <p> Решая эту задачу, постарался не только отработать конструкции языка <b>PHP</b>,
        но и сделал небольшой <b>онлайн-калькулятор</b>, позволяющий проверить ваши вычисления...
        <a href="project-euler-1-php.php"><b>читать</b></a> </p>
      </aside>

      <aside class="article-preview" aria-label="article 6">
        <h4>Project-Euler Open Source</h4>
        <p><b>Project-Euler</b> - это опенсорс проект, который помогает изучить
        и попрактиковать конструкции различных языков программирования...
        <a href="project-euler-open-source.php"><b>читать</b></a> </p>
      </aside>

      <aside class="article-preview" aria-label="article 7">
        <h4>Проект Эйлер 2 задача на PHP</h4>
        <p>Четные числа Фибоначчи: реализация на PHP с онлайн-калькулятором для проверки вычислений"...
        <a href="project-euler-2-php.php"><b>читать</b></a> </p>
      </aside>
    </section>

    <?php include_once 'includes/footer.php'; ?>
  </body>
</html>

