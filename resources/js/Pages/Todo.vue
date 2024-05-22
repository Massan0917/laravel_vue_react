<script setup>
  import { ref } from 'vue'
  import axios from 'axios';

  const drawer = ref(null)
  axios.get('api/get/1').then(response => {
    console.log(response.data);
  });
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
    </body>
    
</template>
