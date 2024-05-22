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

  axios.get('api/get/1').then(response => {
    console.log(response.data);
  });

  function onclick() {
    axios.post('api/register', postData.value).then(response => {
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
                <th>State</th>
                <th>City</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Indiana</td>
                <td>Indianapolis</td>
                </tr>
                <tr>
                <td>Ohio</td>
                <td>Columbus</td>-
                </tr>
                <tr>
                <td>Michigan</td>
                <td>Detroit</td>
                </tr>
            </tbody>
        </v-table>
    <p class="font-serif ...">The quick brown fox ...</p>
    <button @click="onclick">Click me</button>
    </body>
    
</template>
