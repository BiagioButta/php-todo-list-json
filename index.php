<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div id="app">

        <div class="container">

            <div class="row row-cols-1 justify-content-center">

                <div class="col my-5">
                    <input type="text" v-model="newTodoText" name="newTodoText" id="newTodoText"
                        placeholder="inserisci">
                    <button @click="sendData">invia</button>
                </div>
                <div class="col">
                    <ul>Lista
                        <li v-for="(todo, index) in myData" :key="index" :class="todo.done ? 'done' : ''"
                            @click="toggleTodo(index)">{{todo.text}} <span @click.stop="deleteTodo(index)">canc</span>
                        </li>
                    </ul>
                </div>

            </div>

        </div>



    </div>
    <script src="./js/script.js"></script>
</body>

</html>