<html>

<head>
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="/general.css" type="text/css">
  <style>
    <?php
    if (!isset($_GET['link'])) {
      echo "#added {display: none;}";
    } ?>
  </style>
</head>

<body>
  <div id="contain">
    <h1>
      Link Shortener
    </h1>
    <div id="added">
      Your link has been added!
      <div id="link">
        <?php
        $link;
        if (isset($_GET['link'])) {
          $link =  $_GET['link'];
        } else {
          $link = '';
        }
        ?>
        <a class="emp" href="https://dan9.org/link/go/<?php echo $link; ?>">
          <?php echo $link; ?>
        </a>
      </div>
    </div>
    <div id="create">
      <form action="createLink.php" method="post">
        <input type="text" name="link" required placeholder="https://example.com" />
        <!-- <input type="text" name="name" placeholder="MyLink (optional)" /> -->
        <div><input type="submit" value="Shorten" />
        </div>
      </form>
    </div>
  </div>
</body>

</html>