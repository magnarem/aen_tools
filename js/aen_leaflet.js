(function($, Drupal, drupalSettings) {

//var lMap = drupalSettings.leaflet[0].lMap;

    Drupal.behaviors.aen_tools = {
        attach: function (context, drupalSettings) {
         // console.log("aen_leaflet behaviour");
	//	var lMap = drupalSettings.leaflet[0].lMap;
        	//  $(document).bind('load', function(e, map, lMap) {
              //console.log("aen_leaflet behaviour - bind function");
              //	  $(document).bind('leaflet-map', function(e, map, lMap) {

			   var crs = new L.Proj.CRS('EPSG:32661', '+proj=stere +lat_0=90 +lat_ts=90 +lon_0=0 +k=0.994 +x_0=2000000 +y_0=2000000 +ellps=WGS84 +datum=WGS84 +units=m +no_defs',
				   {
					   //origin: [2000000.00,42447.08],
			    	 //bounds: [[1994055.62,5405875.53],[2000969.46,2555456.55]],
			 resolutions: [
                4891.96999883583 * 8,
                4891.96999883583 * 4,
                4891.96999883583 * 2,
                4891.96999883583,
                2445.98499994708,
                1222.99250010583,
                611.496250052917,
                305.748124894166,
                152.8740625,
                76.4370312632292,
                38.2185156316146,
                19.1092578131615,
                9.55462890525781,
                4.77731445262891,
                2.38865722657904,
                1.19432861315723,
                0.597164306578613,
                0.298582153289307,
                0.298582153289307 / 2,
                0.298582153289307 / 4,
                0.298582153289307 / 8,
                0.298582153289307 / 16
            ],

  });
//var center = lMap.getCenter();
//lMap.options.crs = crs;
//lMap.continuousWorld = false;

//			  map.setView(center);

//lMap._resetView(lMap.getCenter(), lMap.getZoom(), true);
//	console.log(map);
//			  console.log(lMap);
	//});

	}, 
};
})(jQuery, Drupal, drupalSettings);
