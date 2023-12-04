<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  
    <title>PHP Todo</title>
</head>
<body>

  <div id="app">
    <h1>Lista Todo</h1>
    <input type="text" v-model="newTodo">
    <button @click="addTodo">Aggiungi</button>

    <ul>
      <li v-for="(todo, index) in todos" :key="index">
        {{ todo }}
        <button @click="removeTodo(index)">Rimuovi</button>
      </li>
    </ul>
  </div>

  
  <?php
// read_todos.php - Per leggere i Todo dal file JSON
$file = '/model/todos.json';
$data = file_get_contents($file);
echo $data;
?>

<?php
// write_todos.php - Per scrivere i Todo nel file JSON
$file = '/model/todos.json';
$postData = file_get_contents('php://input');
$data = json_decode($postData, true);
file_put_contents($file, json_encode($data));
?>



  <script src="./js/script.js"></script>

</body>
</html>
