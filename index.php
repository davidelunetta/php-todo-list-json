<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
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

  <script src="/js/script.js"></script>
</body>
</html>
