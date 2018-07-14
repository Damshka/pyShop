<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes</title>
    <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>

</head>
<body>
<main>
     <h1>Your notes</h1>
    <button class="new">+</button>
    <button class="latest">⇅</button>
    <div class='grid'>

     <?php
            require_once 'allNotes.php';
             $id = $_COOKIE['user_id'];
            showAllNotes($id);

     ?>
    </div>

     <div class="newNote">
         <div class='close'></div>
        <form action="newNote.php" method="post">
            <label for="title">Заголовок</label>
            <input type="text" name="title" id="title" required>
            <br>
            <label for="note_text">Содержание заметки</label>
            <textarea rows="10" cols="45" name="note_text" id="note_text" required></textarea>
            <br>
            <input type="submit" value="Создать">
        </form>
     </div>
</main>
</body>
</html>