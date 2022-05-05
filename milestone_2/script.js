console.log('Ok js');

const app = new Vue({
    el: '#app',

    data: {

        songs: []

    },

    mounted() {

        axios.get('http://localhost/php-ajax-dischi/milestone_2/data.php').then((response) => {

            console.log(response);
            return this.songs = response.data;
        })
    }
})