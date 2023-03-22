const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'ToDo List',
            toDo: [],
            newToDo: '',
        }
    },
    methods:{
        newTask(){
            this.newToDo
        },
        fetchTodoList(){
            axios
            .get('./server.php')
            .then((res) => {
                console.log(res.data)
                this.toDo = res.data
            })
            .catch((err) => {
                this.toDo = []
            })
        }
    },
    mounted(){
        this.fetchTodoList()
    },
}).mount('#app')