<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/styles/main.css">

    <title>Project Euler Blog: Решенные задачи</title>
    <meta name="description"
          content="Решенные задачи проекта Эйлер">
  </head>
  <body>
    <?php include_once 'includes/header.php'; ?>

    <section>
      <h1 id="top">Project Euler: Решенные задачи</h1>

      <p>Решенные задачи проекта Эйлер.</p>
    </section>

    <section>
      <?php include_once 'includes/articles.php'; ?>

      <?php for ($i = 0; $i < count($article); $i++) { ?>
        <aside class="article-preview" aria-label=$article[$i]['aria_label']>
          <h4><?= $article[$i]['header'] ?></h4>
          <p><?= $article[$i]['preview'] ?> <?= $article[$i]['link'] ?></p>
        </aside>
      <?php } ?>
    </section>

      <aside class="article-preview" aria-label="article 5">
        <h4>Числа, кратные 3 или 5</h4>
        <p> Решая эту задачу, постарался не только отработать конструкции языка <b>PHP</b>,
        но и сделал небольшой <b>онлайн-калькулятор</b>, позволяющий проверить ваши вычисления...
        <a href="project-euler-1-php.php"><b>читать</b></a> </p>
      </aside>

      <aside class="article-preview" aria-label="article 7">
        <h4>Четные числа Фибоначчи</h4>
        <p>Реализация на PHP с онлайн-калькулятором для проверки вычислений"...
        <a href="project-euler-2-php.php"><b>читать</b></a> </p>
      </aside>
    </section>

    <?php include_once 'includes/footer.php'; ?>
  </body>
</html>

