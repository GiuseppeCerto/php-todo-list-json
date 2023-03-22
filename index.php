<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP JSON ToDo List</title>
</head>
<body>

    <div id="app">
        <section>
            <div class="container mt-4">
                <h1>{{ title }}</h1>
            </div>
            <div class="container mt-5">
                <ul class="list-group">
                    <li v-for="toDo in toDo" :key="toDo" class="list-group-item">{{toDo}}</li>
                </ul>

                <input @keyup.enter="newTask" v-model="newToDo" class="form-control mt-4" type="text" name="todo" placeholder="New ToDo" aria-label="default input example">
            </div>
        </section>
    </div>
    

    <script src='./app.js'></script>
</body>
</html>