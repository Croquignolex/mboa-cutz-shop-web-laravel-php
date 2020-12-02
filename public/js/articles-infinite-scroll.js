// VueInfiniteLoading loader by vue-infinite-loading.min.js file
// I can then use the component <infinite-loading></infinite-loading>

const baseUrl = document.getElementById('articles-infinite-scroll').dataset.url;

new Vue({
    el: '#articles-infinite-scroll',

    components: {
        'articles-component' : articlesComponent()
    }
});

// Build articles component
function articlesComponent() {
    return {
        template: articleComponentTemplate(),

        data: function() {
            return {
                articles: [],
                page: 1,
            };
        },

        methods: {
            infiniteHandler($state) {
                let vm = this;
                let url = `${baseUrl}?page=${this.page}`;

                this.$http.get(url)
                    .then(response => { return response.json(); })
                    .then(data => {
                        // Manage
                        if(data.length !== 0) {
                            // Get data and set into array
                            $.each(data, function(key, value) {
                                vm.articles.push(value);
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

// Build article component template
function articleComponentTemplate() {
    return `
        <div class="row d-flex">  
            <!-- Loader -->
            <div class="col-md-4 d-flex" v-for="article in articles" :key="article.id">
                <div class="blog-entry align-self-stretch">
                    <a :href="article.show_url" class="block-20">
                        <img :src="article.image" alt="...">
                    </a>
                    <div class="text py-4 d-block">
                        <div class="meta">
                            <div><span class="icon-calendar"></span> {{ article.creation_date }}</div>
                            <div><span class="icon-chat"></span> {{ article.comments }}</div>
                        </div>
                        <div class="meta">
                            <div><span class="icon-person"></span> {{ article.creator }}</div>
                        </div>
                        <h3 class="heading mt-2">
                            <a :href="article.show_url">{{ article.name }}</a>
                        </h3> 
                    </div>
                </div>
            </div>  
            <!-- Loader -->
            <div class="col-md-4 d-flex"> 
                 <infinite-loading @infinite="infiniteHandler" spinner="spiral">
                    <div slot="no-more"></div>
                    <div slot="no-results"></div>
                 </infinite-loading>    
            </div> 
        </div>
    `;
}