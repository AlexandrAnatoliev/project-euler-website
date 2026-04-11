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

      <?php for ($i = 3; $i >= 0; $i--) { ?>
        <aside class="article-preview" aria-label=$article[$i]['aria_label']>
          <h4><?= $article[$i]['header'] ?></h4>
          <p><?= $article[$i]['preview'] ?> <?= $article[$i]['link'] ?></p>
        </aside>
      <?php } ?>

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

