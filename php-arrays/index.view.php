<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Arrays</title>
  </head>
  <body>

    <ul>
      <!-- <?php foreach ($names as $name) {
        echo "<li>$name</li>";
      } ?> -->

      <!-- the above can be rewritten as below -->

      <!-- <?php foreach ($animals as $animal) : ?>

        <li><?= $animal; ?></li>

      <?php endforeach; ?> -->

      <!-- filtering through associative arrays -->
      <!-- ucwords() capitalizes word -->

      <!-- <?php foreach ($task as $todo => $value) : ?>

        <li><strong><?= ucwords($todo) ?>: </strong> <?= $value ?></li>

      <?php endforeach; ?> -->

      <li>
        <strong>Name: </strong> <?= $task['title']; ?>
      </li>
      <li>
        <strong>Due date: </strong> <?= $task['due']; ?>
      </li>
      <li>
        <strong>Staff responsible: </strong> <?= $task['assigned_to']; ?>
      </li>
      <li>
        <!-- with ternary syntax -->
        <!-- <strong>Status: </strong> <?= $task['completed'] ? '&#9989' : 'Incomplete'; ?> -->

        <!-- with shorthand for if/else -->
        <strong>Status: </strong>
        <?php if ($task['completed']) : ?>

          <span class="icon">&#9989;</span>

        <?php else : ?>

          <span class="icon">Incomplete</span>

        <?php endif; ?>
      </li>
      <li>

        <strong>Priority level: </strong>

        <?php if ($task['required']) : ?>

          <span>Top priority</span>

        <?php else : ?>

          <span>Procrastinate at will</span>

        <?php endif; ?>

      </li>

    </ul>

  </body>
</html>
