import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        cds: []
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/scripts/json-script.php')
            .then(response => {
              // handle success
              //console.log(response.data);
              this.cds = response.data;  
            })
            .catch(error => {
              // handle error
              console.log(error);
            })
        },
});