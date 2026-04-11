<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="src/styles/main.css">

    <title>Project Euler Blog: Projects</title>
    <meta name="description"
          content="Мои проекты на PHP и других технологиях">
  </head>
  <body>
    <?php include_once 'includes/header.php'; ?>

    <section>
      <h1 id="top">Projects</h1>

      <p>Мои проекты на PHP и других технологиях.</p>
    </section>

    <section>
      <?php include_once 'includes/articles.php'; ?>

      <?php for ($i = 0; $i < count($article); $i++) { ?>
        <?php if ($article[$i]['topic'] == 'project') { ?>
          <aside class="article-preview" aria-label=$article[$i]['aria_label']>
            <h4><?= $article[$i]['alt_header'] ?></h4>
            <p><?= $article[$i]['preview'] ?> <?= $article[$i]['link'] ?></p>
          </aside>
        <?php } ?>
      <?php } ?>
    </section>

    <?php include_once 'includes/footer.php'; ?>
  </body>
</html>

