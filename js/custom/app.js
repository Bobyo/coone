(function(){

        function SomewhatEQColumns() {
            var bigColheight = $('.big-left-column').height(),
                smallTallColumn = $('.single-tall-one');

            smallTallColumn.css('height', bigColheight);
        }

        $(window).on('resize', Foundation.utils.debounce(function(e){
            if(!Foundation.utils.is_small_only()) {
                SomewhatEQColumns();
            }
        }, 300));

        if(Foundation.utils.is_large_up()) {
            SomewhatEQColumns();
        }

        var behanceApikey = '65DA1gBnSCtJQJSCbuPMJvhLieEyDUlf',
            behanceCollection = '43134841',
            behanceCollectionApi = 'https://www.behance.net/v2/collections/'+behanceCollection+'/projects?callback=?&api_key='+behanceApikey;

            function setPublicProjects() {
                var projectData    = JSON.parse(sessionStorage.getItem('behanceProject'));

                var firstObj  = [];
                var secondObj = [];

                $.each(projectData.projects, function (i, v) {

                    firstObj.push('<div class="columns small-12 medium-3 large-3" data-equalizer-watch><a href="'+ projectData.projects[i].url +'"><img src="'+ projectData.projects[i].covers['404'] +'" /></a><div class="padded-content bg-color white"><h4><a href="'+ projectData.projects[i].url +'">' + projectData.projects[i].name + '</h4></div></a></div>');
                    return i < 3;

                });

                $('.row.first').append(firstObj.join(''));

            };
            if(sessionStorage.getItem('behanceProject')) {
                setPublicProjects();
            } else {
                $.getJSON(behanceCollectionApi, function(project) {
                    var data = JSON.stringify(project);
                    sessionStorage.setItem('behanceProject', data);
                    setPublicProjects();
                });
            };

})();
