<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bad Word</title>
  </head>
  <body>
    <form action="bad-word.php" method="POST">
      <div>
        <label for="paragraph"> Paragrafo</label>
        <textarea
          style="width: 640px; height: 480px"
          name="paragraph"
          id="paragraph"
        ></textarea>
      </div>

      <div>
        <label for="badWord"> Brutta Parola</label>
        <input type="text" name="badWord" id="badWord" />
      </div>

      <button>Invia</button>
    </form>
  </body>
</html>
