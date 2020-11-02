// VueInfiniteLoading loader by vue-infinite-loading.min.js file
// I can then use the component <infinite-loading></infinite-loading>

const baseUrl = document.getElementById('article-comments-infinite-scroll').dataset.url;

new Vue({
    el: '#article-comments-infinite-scroll',

    components: {
        'article-comments-component' : articleCommentsComponent()
    }
});

// Build article comments component
function articleCommentsComponent() {
    return {
        template: articleCommentsComponentTemplate(),

        data: function () {
            return {
                page: 1,
                comments: []
            };
        },

        methods: {
            infiniteHandler($state) {
                let vm = this;
                let url = `${baseUrl}?page=${this.page}`;

                this.$http.get(url)
                    .then(response => {
                        return response.json();
                    })
                    .then(data => {
                        // Manage
                        if (data.length !== 0) {
                            // Get data and set into array
                            $.each(data, function (key, value) {
                                vm.comments.push(value);
                            });
                            this.page += 1;
                            // Load back
                            $state.loaded()
                        } else {
                            // Stop loading
                            $state.complete()
                        }
                    });
            }
        }
    }
}

// Build article comments component template
function articleCommentsComponentTemplate() {
    return ` 
        <ul class="comment-list"> 
            <!-- Comments -->
            <li class="comment" v-for="comment in comments" :key="comment.id"> 
                <div class="vcard bio">
                    <img :src="comment.creator_image" alt="...">
                </div>
                <div class="comment-body">
                    <h3>{{ comment.creator_name }}</h3>
                    <div class="meta">{{ comment.creation_date }}</div>
                    <p>{{ comment.description }}</p>
                </div>
            </li>
            <!-- Loader -->
            <li class="comment">
                <infinite-loading @infinite="infiniteHandler" spinner="spiral">
                    <div slot="no-more"></div>
                    <div slot="no-results"></div>
                </infinite-loading>    
            </li>  
        </ul>   
    `;
}

