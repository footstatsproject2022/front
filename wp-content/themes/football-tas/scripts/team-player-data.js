jQuery(function($){

    load_team_player();

    function load_team_player()
    {
        var URL     = "/football/wp-json/api/v1/team/";
        var dataObj = {
            squad_id : admin.squad_id,
        };

        jQuery.ajax({
            type: 'POST',
            url: URL,
            data: dataObj,
            dataType: "json",
            beforeSend: function() {
                jQuery("#team-players").html("Please wait...");
            },
            success: function(response)
            {
               jQuery("#team-players").html(response);
               team_players_scroller();
            },
            error: function(error){
                console.log(error);
                alert('something went wrong, please try again later');
            }
        });
    }


    function team_players_scroller()
    {
        
        console.log("calling...");
        
        var window_width = jQuery(window).width();
        if( window_width > 991 ){
            var content_height = jQuery("#team-player-content").height();
            if( content_height > 200 ){
                jQuery("#team-players .team-players-list").height(content_height);
            }
        }
    }


    //Team player data
    jQuery(document).on("click", ".team-player-item", function(){
        jQuery(this).parent().addClass('active').siblings().removeClass('active');
        
        var playerId = jQuery(this).data("playerid");
        var year     = 2021; 
        load_player_statistics(playerId, year);

    });

    jQuery(document).on("change", "#market-value-filter" ,function(){
        var playerId = jQuery("#team-players li.active .team-player-item").data("playerid");
        var year     = jQuery(this).val(); 
        load_player_statistics(playerId, year);
    });


    function load_player_statistics(playerId, year)
    {

        var URL     = "/football/wp-json/api/v1/team/player/statistics";
        var dataObj = {
            playerId : playerId,
            year : year, 
        };

        google.charts.load('current', {
            packages: ['corechart']
        }).then(function () {
            var options = {
                title: '',
                height:350,
                pointSize: 10,
                curveType: 'function',
                legend: { position: 'bottom' },
                series: {
                  0: { color: '#d2246b' },
                },
                hAxis: {
                  title: '',
                },
                vAxis: {
                  format: "short",
                },
            };
            var chart = new google.visualization.LineChart(document.getElementById('app-player-market-value'));

            jQuery.ajax({
                url: URL,
                type: "POST",
                data: dataObj,
                success: function(response)
                {   
                    //details 
                    jQuery("#app-player-details").html(response.details);

                    //chart create
                    var market_value = Object.entries(response.graph);
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', ''); //months
                    data.addColumn('number', ''); //value

                    data.addRows(market_value);
                    chart.draw(data, options);


                    var current_market_value =  response.current_market_value;
                        current_market_value = parseFloat(current_market_value).toFixed(2);

                    var currentValHeading = '<div class="d-flex justify-content-between">\
                                                <h4>Market Value <small style="font-size:14px;color:#777">Current: &euro; '+current_market_value+'</small></h4>\
                                                <div class="select-box">\
                                                    <select class="custom-select" id="market-value-filter">\
                                                        <option '+ (year == 2019 ? "selected" : "")  +'>2019</option>\
                                                        <option '+ (year == 2020 ? "selected" : "")  +'>2020</option>\
                                                        <option '+ (year == 2021 ? "selected" : "")  +'>2021</option>\
                                                        <option '+ (year == 2022 ? "selected" : "")  +'>2022</option>\
                                                    </select>\
                                                </div>\
                                             </div>';

                    //console.log(currentValHeading);

                    jQuery("#market-value-heading").html(currentValHeading); 
                    
                    //tabs
                    jQuery("#app-player-tabs").html(response.tabs);
                    
                    //team_players_scroller();
                    
                    //console.log("scroller manage...");
                    

                },
                error: function(error){
                    console.log(error);
                    alert('something went wrong, please try again later');
                }
            });
        
        });
    }


});