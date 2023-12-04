<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <title>PHP Todo</title>
</head>
<body>

  <div id="app">
    <div class="container ">
    <h1>Lista Todo</h1>
    <input type="text" v-model="newTodo">
    <button class="btn btn-primary" @click="addTodo">Aggiungi</button>
    <div>
      <ul>
        <li v-for="(todo, index) in todos" :key="index">
          {{ todo }}
          <button class="btn" @click="removeTodo(index)"><i class="fa-solid fa-xmark" style="color: #000000;">x</i></button>
        </li>
      </ul>
    </div>

    
    </div>
    
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
