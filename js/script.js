new Vue({
    el: '#app',
    data: {
      todos: [],
      newTodo: ''
    },
    mounted() {
      this.fetchTodos();
    },
    methods: {
      fetchTodos() {
        // Utilizza Axios per effettuare una richiesta GET a un endpoint PHP
        axios.get('./model/todos.json')
          .then(response => {
            this.todos = response.data.todos;
          })
          .catch(error => {
            console.error('Errore nel recupero dei Todo:', error);
          });
      },
      addTodo() {
        if (this.newTodo !== '') {
          this.todos.push(this.newTodo);
          this.saveTodos();
          this.newTodo = '';
        }
      },
      removeTodo(index) {
        this.todos.splice(index, 1);
        this.saveTodos();
      },
      saveTodos() {
        // Utilizza Axios per inviare una richiesta POST a un endpoint PHP
        axios.post('./model/todos.json', { todos: this.todos })
          .then(response => {
            console.log('Dati salvati con successo:', response.data);
          })
          .catch(error => {
            console.error('Errore nel salvataggio dei Todo:', error);
          });
      }
    }
  });
  