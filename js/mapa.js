var geoJsonData ={
    "type": "FeatureCollection",
    "features": [
      {
        "type": "Feature",
        "properties": {
          "name": "Majadahonda",
          "stroke": "#b95f5f",
          "stroke-width": 2,
          "stroke-opacity": 1,
          "fill": "#c18181",
          "fill-opacity": 0.5
        },
        "geometry": {
          "coordinates": [
            [
              [
                -3.8928753762690462,
                40.47694246611502
              ],
              [
                -3.8780326719661957,
                40.44665209289306
              ],
              [
                -3.854418158835813,
                40.44800293265115
              ],
              [
                -3.8248246964623434,
                40.447235631567594
              ],
              [
                -3.7972924782438042,
                40.46865139078042
              ],
              [
                -3.8686798024006066,
                40.482734656369445
              ],
              [
                -3.8928753762690462,
                40.47694246611502
              ]
            ]
          ],
          "type": "Polygon"
        }
      },
      {
        "type": "Feature",
        "properties": {
          "name": "Las Rozas",
          "stroke": "#b95f5f",
          "stroke-width": 2,
          "stroke-opacity": 1,
          "fill": "#c18181",
          "fill-opacity": 0.5
        },
        "geometry": {
          "coordinates": [
            [
              [
                -3.89271613884074,
                40.47703615851188
              ],
              [
                -3.8687356608691346,
                40.48273082772752
              ],
              [
                -3.8411588205129306,
                40.477440166877955
              ],
              [
                -3.8564396653559925,
                40.496966664575126
              ],
              [
                -3.8882141753414032,
                40.56761401368112
              ],
              [
                -3.9350213029897816,
                40.549335594925
              ],
              [
                -3.9368727913748387,
                40.51944096483379
              ],
              [
                -3.89271613884074,
                40.47703615851188
              ]
            ]
          ],
          "type": "Polygon"
        },
        "id": 1
      },
      {
        "type": "Feature",
        "properties": {
          "name": "Pozuelo de Alarcón",
          "stroke": "#b95f5f",
          "stroke-width": 2,
          "stroke-opacity": 1,
          "fill": "#c18181",
          "fill-opacity": 0.5
        },
        "geometry": {
          "coordinates": [
            [
              [
                -3.7969577597380635,
                40.468782046986036
              ],
              [
                -3.8247514170970476,
                40.447184508151764
              ],
              [
                -3.8546382016293705,
                40.44789234060514
              ],
              [
                -3.877914157539834,
                40.44668413646363
              ],
              [
                -3.851362209517305,
                40.42567999473317
              ],
              [
                -3.785098751643659,
                40.41520293467258
              ],
              [
                -3.7576418399682154,
                40.44723781434493
              ],
              [
                -3.7596574654353674,
                40.472483758701316
              ],
              [
                -3.7726738250941594,
                40.475118980610006
              ],
              [
                -3.7969577597380635,
                40.468782046986036
              ]
            ]
          ],
          "type": "Polygon"
        }
      },
      {
        "type": "Feature",
        "properties": {
          "name": "Villanueva del Pardillo",
          "stroke": "#b95f5f",
          "stroke-width": 2,
          "stroke-opacity": 1,
          "fill": "#c18181",
          "fill-opacity": 0.5
        },
        "geometry": {
          "coordinates": [
            [
              [
                -3.967985143587782,
                40.503094096312935
              ],
              [
                -3.972845669530159,
                40.501884868431716
              ],
              [
                -3.9665066509378732,
                40.47881036805853
              ],
              [
                -3.9392347502768246,
                40.476455573302275
              ],
              [
                -3.938584624382969,
                40.49088158699979
              ],
              [
                -3.967985143587782,
                40.503094096312935
              ]
            ]
          ],
          "type": "Polygon"
        }
      },
      {
        "type": "Feature",
        "properties": {
          "name": "Villafranca",
          "stroke": "#b95f5f",
          "stroke-width": 2,
          "stroke-opacity": 1,
          "fill": "#c18181",
          "fill-opacity": 0.5
        },
        "geometry": {
          "coordinates": [
            [
              [
                -3.9396425277805918,
                40.47622940797976
              ],
              [
                -3.966907135268798,
                40.478966201471735
              ],
              [
                -3.96436156566088,
                40.46289465442072
              ],
              [
                -3.9335037372063084,
                40.458506658080495
              ],
              [
                -3.9396425277805918,
                40.47622940797976
              ]
            ]
          ],
          "type": "Polygon"
        }
      }
    ]
  };

  var lightMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; OpenStreetMap &copy; CARTO'
});

var satelliteMap = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
    attribution: '&copy; Esri &mdash; Source: Esri, Maxar, Earthstar Geographics'
});

// Agregar el mapa inicial
var map = L.map('map', {
    center: [40.48795973053694, -3.8618792468498953], // Coordenadas de inicio
    zoom: 11,
    layers: [lightMap] // Mapa predeterminado
});

// Control de capas para cambiar entre mapas
L.control.layers({
    "Blanco y Negro": lightMap,
    "Satélite": satelliteMap
}).addTo(map);



// Agregar tooltip flotante
var tooltip = document.getElementById("tooltip");

// Crear los polígonos con estilos dinámicos y hover
L.geoJson(geoJsonData, {
    style: function (feature) {
        return {
            color: feature.properties.stroke,
            weight: feature.properties["stroke-width"],
            opacity: feature.properties["stroke-opacity"],
            fillColor: feature.properties.fill,
            fillOpacity: feature.properties["fill-opacity"],
        };
    },
    onEachFeature: function (feature, layer) {
        layer.bindTooltip(feature.properties.name, {
            permanent: true,  // Solo aparece en hover
            direction: "center",
            className: "custom-tooltip"
        });
    },
    
}).addTo(map);