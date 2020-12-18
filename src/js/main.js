import Vue from 'vue';
import axios from 'axios';

const spotify = new Vue ({
    el: '#spotify',
    data: {
        user: 'Frankie',
        albums: [],
        authors: [],
        activeArtist: 'all',
        dataUrl: window.location.href + 'scripts/database.php',
    },
    created() {
        console.log('Bella Vue!');

        axios.get(this.dataUrl)
            .then(result => {
                // handle success
                console.log(result.data);
                this.albums = result.data;
                this.authors = result.data;
            })
            .catch(error => {
                // handle error
                console.log(error);
            })
    },
    methods: {
        getArtist(){
          const dataUlr = window.location.href + 'partials/database.php';
    
          axios.get(this.dataUrl, {
                params: {
                  author: this.activeArtist,
                }
            })
            .then(result => {
                this.albums = result.data;
            })
    
            .catch(error => { 
                // handle error
                console.log('errore:', error); 
            })
        }
      }
    });



        
        