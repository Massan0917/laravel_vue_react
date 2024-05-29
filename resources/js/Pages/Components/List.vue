<script setup>

    import { ref } from 'vue'
    const todos = ref([]);
    const headers = ref([
        { title: 'タイトル' , value: 'title' },
        { title: '内容'     , value: 'content' },
        { title: '優先度'   , value: 'priority' },
        { title: '進捗'     , value: 'progress' },
        { title: '重要度'   , value: 'severity' },
        { title: '期限'     , value: 'deadline' },
    ]);

    const getTodos = () => {
        axios.get('api/get/1').then(response => {
            todos.value = response.data.data;
        });
    }
    
    getTodos();
</script>

<template>
    <v-container>
        <v-row>
            <v-col>
              <v-data-table
                :headers="headers"
                :items="todos"
              ></v-data-table>
            </v-col>
        </v-row>
    </v-container>
</template>