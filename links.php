<?php
// This is intended to be used for testing
?>

<html>

<body>
  <div>
    <h2>Link List</h2>
    <table>
      <tr>
        <th>Name</th>
        <th>Link</th>
      </tr>
      <?php
      $file = file_get_contents('links.json');
      $data = json_decode($file, true);
      foreach (array_keys($data) as $name) {
        echo "<tr>";
        echo "<td><a href='https://dan9.org/link/go/" . $name . "'>" . $name . "</a></td>";
        echo "<td>" . $data[$name] . "</td>";
        echo "</tr>";
      }
      ?>
    </table>
  </div>
</body>

</html>