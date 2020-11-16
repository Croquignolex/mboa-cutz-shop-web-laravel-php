// VueInfiniteLoading loader by vue-infinite-loading.min.js file
// I can then use the component <infinite-loading></infinite-loading>

const baseUrl = document.getElementById('events-infinite-scroll').dataset.url;

new Vue({
    el: '#events-infinite-scroll',

    components: {
        'events-component' : eventsComponent()
    }
});

// Build events component
function eventsComponent() {
    return {
        template: eventComponentTemplate(),

        data: function() {
            return {
                events: [],
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
                                vm.events.push(value);
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

// Build event component template
function eventComponentTemplate() {
    return `
       <div>
            <!-- Loader --> 
            <div class="row d-flex" v-for="event in events" :key="event.id">  
                <div class="col-md-6 d-flex mt-5">
                    <div class="img img-about" v-bind:style="{'background-image': 'url(' + event.image + ')'}"></div>
                </div>
                <div class="col-md-6 px-5 mt-5 border-bottom border-secondary">
                    <h2 class="mb-4">{{ event.name }}</h2> 
                    <div><span class="icon-calendar"></span> <strong class="text-white">{{ event.start_date }}</strong> - {{ event.end_date }}</div>
                    <div><span class="icon-map-marker"></span> {{ event.localisation }}</div>  
                    <p class="my-2">{{ event.description }}</p>
                    <iframe :src="event.map" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div> 
            </div>    
            <div class="row d-flex">  
                <!-- Loader -->
                <div class="col-md-4 d-flex"> 
                     <infinite-loading @infinite="infiniteHandler" spinner="spiral">
                        <div slot="no-more"></div>
                        <div slot="no-results"></div>
                     </infinite-loading>    
                </div> 
            </div>
       </div>
    `;
}