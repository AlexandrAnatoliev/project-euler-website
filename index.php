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

      <?php for ($i = 6; $i >= 0; $i--) { ?>
        <aside class="article-preview" aria-label=$article[$i]['aria_label']>
          <h4><?= $article[$i]['header'] ?></h4>
          <p><?= $article[$i]['preview'] ?> <?= $article[$i]['link'] ?></p>
        </aside>
      <?php } ?>

    <?php include_once 'includes/footer.php'; ?>
  </body>
</html>

