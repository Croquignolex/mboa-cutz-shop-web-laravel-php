// VueInfiniteLoading loader by vue-infinite-loading.min.js file

const baseUrl = document.getElementById('app').dataset.url;

Vue.component('articles-component', {
    template: buildArticleComponent(),

    mounted() {
        console.log('Component mounted.')
    },

    data: function() {
        return {
            articles: [''],
            page: 1,
        };
    },

    methods: {
        infiniteHandler($state) {
            let thisComponent = this;
            let url = `${baseUrl}?page=${this.page}`;

            this.$http.get(url)
                .then(response => { return response.json(); })
                .then(data => {
                    console.log({data})
                    $.each(data, function(key, value) {
                        thisComponent.articles.push(value);
                        console.log({value})
                    });
                    $state.loaded();
                });

            this.page = this.page + 1;
        },
    }
});

new Vue({el: '#app'});

// Build article component
function buildArticleComponent() {
    return `
        <div class="row d-flex">
            <div class="col-md-4 d-flex" v-for="article in articles">
                <div class="blog-entry align-self-stretch">
                    <a v-bind:href="article.show_url" class="block-20">
                        <img src="" alt="...">
                    </a>
                    <div class="text py-4 d-block">
                        <div class="meta">
                            <div><span class="icon-calendar"></span> {{ article.show_url }}</div>
                            <div><span class="icon-chat"></span> mmmmmmmmmmmmmm</div>
                        </div>
                        <div class="meta">
                            <div><span class="icon-person"></span> gggggggggggggggggggggggg</div>
                        </div>
                        <h3 class="heading mt-2">
                            <a href="#">
                               fffffffffffffffffffffffffffff
                            </a>
                        </h3>
                        <p>fffffffffffffffffffff</p>
                    </div>
                </div>
            </div>
            <infinite-loading @distance="1" @infinite="infiniteHandler"></infinite-loading>
        </div>
    `;
}