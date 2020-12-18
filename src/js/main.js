import Vue from 'vue';
import axios from 'axios';

const spotify = new Vue ({
    el: '#spotify',
    data: {
        user: 'Frankie',
        albums: [],
    },
    created() {
        //console.log(window.location.href);
        const dataUrl = window.location.href + 'scripts/database.php';

        console.log('Bella Vue!');

        axios.get(dataUrl)
            .then(response => {
                // handle success
                console.log(response.data);
                this.albums = response.data;
            })
            .catch(error => {
                // handle error
                console.log(error);
            })
    },
});



        
        