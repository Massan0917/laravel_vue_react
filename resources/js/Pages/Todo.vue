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

      <list/>

      <button @click="registTask">タスク登録</button><br>
      <button @click="deleteTask">タスク削除</button><br>
      <button @click="editTask">タスク編集</button>
    </body>
</template>