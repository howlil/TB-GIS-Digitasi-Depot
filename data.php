<?php
$connection = pg_connect("host='localhost' port='5432' user='postgres' password='postgres' dbname='tubesgis'");

$sql = "SELECT
          gid,
          id_banguna,
          nama_bangu,
          alamat,
          
          ST_AsGeoJSON(geom) AS geometry,
          ST_Y(ST_CENTROID(geom)) AS lat,
          ST_X(ST_CENTROID(geom)) AS lng
        FROM depot_air_region
        ";
$geojson = array(
    'type'      => 'FeatureCollection',
    'features'  => array()
);
$query = pg_query($connection, $sql);
if (pg_num_rows($query) == 0) return 0;
while ($row = pg_fetch_assoc($query)) {
    $feature = array(
        "type" => 'Feature',
        'geometry' => json_decode($row['geometry'], true),
        'properties' => array(
            'gid' => $row['gid'],
            'id_banguna' => $row['id_banguna'],
            'nama_bangu' => $row['  nama_bangu'],
            'alamat' => $row['alamat'],
            'center' => array(
                'lat' => $row['lat'],
                'lng' => $row['lng']
            )
        )
    );
    array_push($geojson['features'], $feature);
}
echo json_encode($geojson);