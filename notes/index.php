<?php
  
  require_once('./Connection.php');
  $connection = new Connection();

  if(isset($_GET['id'])){
    $notes = $connection->getSingleNote($_GET['id']);
    $updateMode = true;
  }else{
    $notes = $connection->getNotes();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/index.css">
  <link rel="stylesheet" href="../styles/notes/index.css">
  <title>Notes Application</title>
</head>
<body>
  <?php
    include('../partials/navigation.php');
  ?>
  <header>
    <h1>Notes Application</h1>
  </header>
  
  <section class='createNote'>
    <form action="<?php echo isset($updateMode)?'update.php':'create.php' ?>" method='POST'>
      <input type="hidden" name="id" value="<?php echo isset($updateMode) ? $notes[0]['id'] : ''?>">
      <input type="text" name="title" id="" placeholder='Notes title' autocomplete='text' value='<?php echo isset($updateMode)? $notes[0]['title'] : "" ?>'>
      <textarea name="description" id="" cols="30" rows="4" placeholder='Notes description'><?php echo isset($updateMode)? $notes[0]['description'] : '' ?></textarea>
      <button type="submit"><?php echo isset($updateMode) ? "Update Note" : "New note" ?></button>
    </form>
  </section>
  <section class='notes'>
    
      <?php
        foreach($notes as $note):
      ?>
      <div class="notes__each">
        <a href="?id=<?php echo $note['id']; ?>"  class="notes__each--title"><?php echo $note['title'] ?></a>
        <p class="notes__each--description"><?php echo $note['description'] ?></p>
        <small><?php echo $note['create_date'] ?></small>
        <form action="delete.php" method='POST'>
          <input type="hidden" name="id" value='<?php echo $note['id'] ?>'>
          <button class="close" type='submit'>X</button>
        </form>
        
      </div>
        
      <?php
        endforeach;
      ?>

  </section>
  <script src='../js/index.js'></script>
</body>
</html>