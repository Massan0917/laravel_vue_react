<script setup>
  import { ref } from 'vue'
  import axios from 'axios';
  import List from './Components/List.vue';

  const postData = ref({
    "title" : "task2",
    "content" : "content2",
    "priority" : "高",
    "progress" : "未着手",
    "severity" : "中",
    "deadline" : "2024-12-31",
    "user_id" : "1"
    });

  const editData = ref({
    "id" : 1,
    "title" : "edit_task2",
    "content" : "content2",
    "priority" : "低",
    "progress" : "着手中",
    "severity" : "低",
    "deadline" : "2024-12-31",
    });

  const headers = ref([
    { title: 'タイトル' , value: 'title' },
    { title: '内容'     , value: 'content' },
    { title: '優先度'   , value: 'priority' },
    { title: '進捗'     , value: 'progress' },
    { title: '重要度'   , value: 'severity' },
    { title: '期限'     , value: 'deadline' },
  ]);

  const todos = ref([]);
  getTodos();

  function getTodos() {
    axios.get('api/get/1').then(response => {
      todos.value = response.data.data;
    });
  }

  function registTask() {
    axios.post('api/register', postData.value).then(response => {
      console.log(response.data);
    });
    alert('Hello World');
  }

  function deleteTask() {
    axios.delete('api/delete', {data : {"id" : 4}} ).then(response => {
      console.log(response.data);
    });
    alert('Hello World');
  }

  function editTask() {
    axios.put('api/edit', editData.value).then(response => {
      console.log(response.data);
    });
    alert('Hello World');
  }
</script>

<template>
    <body>
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

        <list/>

      <button @click="registTask">タスク登録</button><br>
      <button @click="deleteTask">タスク削除</button><br>
      <button @click="editTask">タスク編集</button>
    </body>
</template>