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

            console.log(this.newToDo)
            
            $data = {
                todo: this.newToDo
            }
            axios
            .post('./server.php', $data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            })
            .then(res => {
                this.toDo = res.data
                this.newToDo = ''
            })
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