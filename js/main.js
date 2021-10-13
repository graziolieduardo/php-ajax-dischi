Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        albums: [],
        filteredAlbums: [],
        genres: [],
        selectValue: ''
    },
    methods: {
        filteredList() {
            if (this.selectValue == 'all') {
                return this.filteredAlbums = this.albums;
            }
            this.filteredAlbums = this.albums.filter((element) => {
                if (element.genre == this.selectValue) {
                    return element
                }
            });
        }
    },
    created() {
        axios.get('api/server.php')
            .then(res => {
                this.albums = res.data;
                console.log(res);
                for (let i = 0; i < this.albums.length; i++) {
                    if(!this.genres.includes(this.albums[i].genre)) {
                        this.genres.push(this.albums[i].genre);
                    }
                }
            });
        this.filteredList();
    }
}); 