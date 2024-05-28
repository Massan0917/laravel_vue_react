<script setup>
  import { ref } from 'vue'
  import axios from 'axios';


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
        <v-table>
            <thead>
                <tr  style="border-color: white; border-width: 2px;">
                <th>タスク名</th>
                <th>内容</th>
                <th>優先度</th>
                <th>重度</th>
                <th>進捗</th>
                <th>締め切り</th>
                </tr>
            </thead>
            <tbody v-for="(todo) in todos">
                <tr>
                <td>{{ todo.title }}</td>
                <td>{{ todo.content }}</td>
                <td>{{ todo.priority }}</td>
                <td>{{ todo.severity }}</td>
                <td>{{ todo.progress }}</td>
                <td>{{ todo.deadline }}</td>
                </tr>
            </tbody>
        </v-table>
      <p class="font-serif ...">The quick brown fox ...</p>

      <button @click="registTask">タスク登録</button><br>
      <button @click="deleteTask">タスク削除</button><br>
      <button @click="editTask">タスク編集</button>
    </body>
    
</template>
