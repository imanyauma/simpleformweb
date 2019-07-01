<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'connection.php'; ?>
    <h3>Add Data</h3>
    <form class="" action="insert.php" method="post">
      <table>
        <tr>
          <td>Your Name</td>
          <td> <input type="text" name="name" id="name" autocomplete="off"> </td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" id="email" autocomplete="off"></td>
        </tr>
        <tr>
          <td>Job</td>
          <td><input type="text" name="job" id="job" autocomplete="off"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="SUBMIT"></td>
        </tr>
      </table>
  </body>
</html>
