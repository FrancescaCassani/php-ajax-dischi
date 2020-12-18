import Vue from 'vue';
import axios from 'axios';

const spotify = new Vue ({
    el: '#spotify',
    data: {
        user: 'Frankie',
        albums: [],
        activeArtist: 'all',
    },
    created() {
        //console.log(window.location.href);
        const dataUrl = window.location.href + 'scripts/database.php';

        console.log('Bella Vue!');

        axios.get(dataUrl)
            .then(result => {
                // handle success
                console.log(result.data);
                this.albums = result.data;
            })
            .catch(error => {
                // handle error
                console.log(error);
            })
        
    },
    methods: {
        getArtist() {
        //Call API
        //console.log(window.location.href);
        const dataUrl = window.location.href + 'scripts/database.php';

        axios.get(dataUrl)
            .then(result => {
                // handle success
                let artistList = result.data;

                if(this.activeArtist !== 'all') {
                    artistList = artistList.filter( (element) => {
                      return element.author.toLowerCase() === this.activeArtist
                    });
                }

                this.albums = artistList;
            })
            .catch(error => {
                // handle error
                console.log(error);
            })

        }

    }
});



        
        