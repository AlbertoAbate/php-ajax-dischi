import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        cds: [],
        actualAuthor: "all"
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

        methods: {
            selectAuthor () {
                axios.get("http://localhost/php-ajax-dischi/scripts/json-script.php")
            
            .then( response => {
                let cdsList = response.data.response;
                if (this.actualAuthor !== "all") {
                    cdsList = cdsList.filter( element => element.author.toLowerCase() === this.actualAuthor );
                }
    
                this.cds = cdsList
              })
            .catch(error => {
                // handle error
                console.log(error);
              });
            }
    
        }
});