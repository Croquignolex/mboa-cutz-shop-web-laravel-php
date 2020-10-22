Vue.component('articles-component', {
    template: buildArticleComponent(),

    data: function() {
        return {

        };
    },

    methods: {

    }
});

new Vue({el: '#app'});

// Build article component
function buildArticleComponent() {
    return `
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                Hello word
            </div>
        </div>
    `;
}