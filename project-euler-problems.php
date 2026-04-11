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
        <?php if ($article[$i]['topic'] == 'problem') { ?>
          <aside class="article-preview" aria-label=$article[$i]['aria_label']>
            <h4><?= $article[$i]['header'] ?></h4>
            <p><?= $article[$i]['preview'] ?> <?= $article[$i]['link'] ?></p>
          </aside>
        <?php } ?>
      <?php } ?>
    </section>

    <?php include_once 'includes/footer.php'; ?>
  </body>
</html>

