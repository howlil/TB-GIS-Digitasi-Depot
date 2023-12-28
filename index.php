<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <title>TUBES GIS KEL 3 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnnzmm550Bo1McFJZ_MCaQ5IKha6TH8G8&callback=initMap">
    </script>
    <style>
    .card {
        width: 100%;
        max-width: 18rem;
    }

    .card:hover {
        scale: 1.02;
        transition: all .5s ease-out;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }


    p {
        font-size: 20px;
        margin: 0px;
    }
    </style>
</head>

<body>
    <Header class=" sticky-top">
        <nav class="navbar navbar-expand-lg bg-success py-3">
            <div class="container-fluid">
                <div class="container d-flex justify-content-between">
                    <a class="navbar-brand fs-3 fw-bold text-white" href="#">KELOMPOK 3</a>
                    <div class="" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active fs-5 text-white" aria-current="page" href="#map">Digitasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link   fs-5 text-white" href="#anggota">Anggota Kelompok</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </Header>
    <Main>
        <div class="container my-5">
            <div id="content">
                <div class="my-5 fw-bold fs-2 text-center" id="header">Digitasi Depot Air Kelompok 3</div>
                <div class="rounded" style="width: 80%; height: 500px; margin:0px auto;  border-style:ridge" id="map">
                </div>
                <!-- <div class="row mt-3">
                    <div class=" col col-md-6" style="width: 50%; height: 500px; float:left; border-style:ridge"
                        id="map">
                    </div>

                    <div class=" col col-md-6" style="width: 50%; min-height: 500px; float:left; border-style:ridge">
                        info windows detail
                    </div>
                </div> -->
            </div>
            <div class=" my-5" id="anggota">
                <h2 class="text-center">
                    Anggota Kelompok 3
                    <div class="d-flex flex-wrap  justify-content-around mt-5" style="width:80%; margin: 0px auto;">

                        <!-- Kartu 1: Mhd Ulil Abshar -->
                        <div class="card mb-4">
                            <img src="img/man.png" class="card-img-top" alt="Mhd Ulil Abshar">
                            <div class="card-body">
                                <p class="card-text">Mhd Ulil Abshar</p>
                                <p class="card-text">2211521003</p>
                            </div>
                        </div>

                        <!-- Kartu 2: Nadia Deari Hanifah -->
                        <div class="card mb-4">
                            <img src="img/woman.png" class="card-img-top" alt="Nadia Deari Hanifah">
                            <div class="card-body">
                                <p class="card-text">Nadia Deari Hanifah</p>
                                <p class="card-text">2211521004</p>
                            </div>
                        </div>

                        <!-- Kartu 3: Izza Try Malinda -->
                        <div class="card mb-4">
                            <img src="img/woman.png" class="card-img-top" alt="Nadia Deari Hanifah">
                            <div class="card-body">
                                <p class="card-text">Izza Try Malinda</p>
                                <p class="card-text">2211521014</p>
                            </div>
                        </div>

                        <!-- Kartu 4: Umar Abdullah Azzam -->
                        <div class="card mb-4">
                            <img src="img/man.png" class="card-img-top" alt="Mhd Ulil Abshar">

                            <div class="card-body">
                                <p class="card-text">Umar Abdullah Azzam</p>
                                <p class="card-text">2211521019</p>
                            </div>
                        </div>

                        <!-- Kartu 5: Ruchil Amelinda -->
                        <div class="card mb-4">
                            <img src="img/woman.png" class="card-img-top" alt="Nadia Deari Hanifah">
                            <div class="card-body">
                                <p class="card-text">Ruchil Amelinda</p>
                                <p class="card-text">2211522006</p>
                            </div>
                        </div>

                        <!-- Kartu 6: Triana Zahara Nurhaliza -->
                        <div class="card mb-4">
                            <img src="img/woman.png" class="card-img-top" alt="Nadia Deari Hanifah">

                            <div class="card-body">
                                <p class="card-text">Triana Zahara Nurhaliza</p>
                                <p class="card-text">2211522008</p>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <img src="img/man.png" class="card-img-top" alt="Mhd Ulil Abshar">
                            <div class="card-body">
                                <p class="card-text">M. Faiz Al-Dzikro</p>
                                <p class="card-text">2211523028</p>
                            </div>
                        </div>

                        <!-- Kartu 7: Rania Shofi Malika -->
                        <div class="card mb-4">
                            <img src="img/woman.png" class="card-img-top" alt="Nadia Deari Hanifah">

                            <div class="card-body">
                                <p class="card-text">Rania Shofi Malika</p>
                                <p class="card-text">2211523014</p>
                            </div>
                        </div>

                        <!-- Kartu 8: Chalvina Suja Rahayu -->
                        <div class="card mb-4">
                            <img src="img/woman.png" class="card-img-top" alt="Nadia Deari Hanifah">

                            <div class="card-body">
                                <p class="card-text">Chalvina Suja Rahayu</p>
                                <p class="card-text">2211523026</p>
                            </div>
                        </div>


                    </div>

                </h2>
            </div>
        </div>

    </Main>


    <Footer class=" container-fluid bg-black p-5 ">
        <h5 class="text-white text-center fs-6 fw-normal">&copy; 2023 Kelompok 3 Kelas B. Tugas Besar Praktikum GIS.
        </h5>
    </Footer>
    <!-- <script>
    var map;
    var show_digitation;
    var infoWindow;

    function initMap() {
        var uluru = {
            lat: -0.92923,
            lng: 100.38289

        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });
        var uluru1 = {
            lat: -0.92938,
            lng: 100.38785

        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru1
        });
        var uluru2 = {
            lat: -0.93152,
            lng: 100.38918

        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru2
        });
        var uluru3 = {
            lat: -0.93267,
            lng: 100.38775
        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru3
        });
        var uluru4 = {
            lat: -0.93232,
            lng: 100.38738

        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru4
        });
        var uluru5 = {
            lat: -0.93518,
            lng: 100.38849


        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru5
        });
        var uluru6 = {
            lat: -0.93535,
            lng: 100.39344


        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru6
        });
        var uluru7 = {
            lat: -0.93519,
            lng: 100.39555


        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru7
        });



        // Membuat InfoWindow untuk peta
        infoWindow = new google.maps.InfoWindow({
            map: map
        });

        // Panggil fungsi untuk menampilkan digitasi
        showDigitasi(infoWindow);

        // Kodingan Geolokasi
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    // Menambahkan marker geolokasi pada peta
                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        title: 'Lokasi Saya',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP
                    });

                    var marker1 = new google.maps.Marker({
                        position: uluru,
                        map: map,
                        title: 'Depot Air Minum Bening ',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker2 = new google.maps.Marker({
                        position: uluru1,
                        map: map,
                        title: 'Surya Depot Air',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker3 = new google.maps.Marker({
                        position: uluru2,
                        map: map,
                        title: 'Rj.Mineral (DepotAir Minum Isi Ulang)',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker4 = new google.maps.Marker({
                        position: uluru3,
                        map: map,
                        title: 'Depot Air Minum Aisha                         ',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker5 = new google.maps.Marker({
                        position: uluru4,
                        map: map,
                        title: 'Depot Air Minum Mineral Edelweiss',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker6 = new google.maps.Marker({
                        position: uluru5,
                        map: map,
                        title: 'Depot Luthfi                         ',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker7 = new google.maps.Marker({
                        position: uluru6,
                        map: map,
                        title: 'Depot Riyani                         ',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker8 = new google.maps.Marker({
                        position: uluru7,
                        map: map,
                        title: 'Depot Air Minum Diru Water',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });

                    // Menambahkan event listener untuk marker geolokasi
                    marker.addListener('click', toggleBounce);

                    function toggleBounce() {
                        if (marker.getAnimation() !== null) {
                            marker.setAnimation(null);
                        } else {
                            marker.setAnimation(google.maps.Animation.BOUNCE);
                        }
                    }

                    // Menampilkan InfoWindow pada lokasi geolokasi
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Kamu Disini');
                    map.setCenter(pos);
                },
                function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
        } else {
            // Jika browser tidak mendukung geolokasi
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }
    // Fungsi untuk menampilkan digitasi
    function showDigitasi(infoWindow) {
        // Menggunakan AJAX untuk mengambil data digitasi dari 'data.php'
        $.ajax({
            url: 'data.php',
            dataType: 'json',
            cache: false,
            success: function(arrays) {

                for (i = 0; i < arrays.features.length; i++) {
                    var data = arrays.features[i];
                    var arrayGeometries = data.geometry.coordinates;
                    var p1 = '<p> id_banguna : ' + data.properties.id_banguna + '</p>';
                    var p2 = p1 + ' &nbsp ';
                    var p3 = '<p> nama_bangu : ' + data.properties.nama_bangu + '</p>';
                    var p4 = p3 + ' &nbsp ';

                    var idTitik = 0;
                    var hitungTitik = [];
                    while (idTitik < arrayGeometries[0][0].length) {
                        var aa = arrayGeometries[0][0][idTitik][0];
                        var bb = arrayGeometries[0][0][idTitik][1];
                        hitungTitik[idTitik] = {
                            lat: bb,
                            lng: aa
                        };
                        idTitik += 1;
                    }

                    // Membuat poligon dan menambahkannya ke peta
                    show_digitation = new google.maps.Polygon({
                        paths: hitungTitik,
                        strokeColor: 'red',
                        strokeOpacity: 1,
                        strokeWeight: 0.5,
                        fillColor: 'red',
                        fillOpacity: 0.55,
                    });

                    // Menambahkan atribut data-content ke objek show_digitation
                    show_digitation.set("data-content", p4);
                    show_digitation.setMap(map);

                    // Menambahkan event listener untuk menampilkan InfoWindow saat diklik
                    show_digitation.addListener('click', function(event) {
                        var lat = event.latLng.lat();
                        var lng = event.latLng.lng();
                        var info = {
                            lat: lat,
                            lng: lng
                        };
                        var content = this.get(
                            "data-content"); // Mengambil konten dari atribut data-content
                        infoWindow.setContent(content);
                        infoWindow.setPosition(info);
                        map.setCenter(info);
                        infoWindow.open(map);
                    });
                }
            }

        });
    }
    // Menangani kesalahan geolokasi
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent('Kesalahan Layanan geolokasi.' + 'Error:<i>Browser</i> anda tidak mendukung geolokasi.');
    }
    </script> -->
    <script>
    var map;
    var show_digitation;
    var infoWindow;

    function initMap() {
        var uluru = {
            lat: -0.92923,
            lng: 100.38289

        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
        });
        var uluru1 = {
            lat: -0.92938,
            lng: 100.38785

        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru1
        });
        var uluru2 = {
            lat: -0.93152,
            lng: 100.38918

        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru2
        });
        var uluru3 = {
            lat: -0.93267,
            lng: 100.38775
        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru3
        });
        var uluru4 = {
            lat: -0.93232,
            lng: 100.38738

        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru4
        });
        var uluru5 = {
            lat: -0.93518,
            lng: 100.38849


        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru5
        });
        var uluru6 = {
            lat: -0.93535,
            lng: 100.39344


        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru6
        });
        var uluru7 = {
            lat: -0.93519,
            lng: 100.39555


        };
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru7
        });



        // Membuat InfoWindow untuk peta
        infoWindow = new google.maps.InfoWindow({
            map: map
        });

        // Panggil fungsi untuk menampilkan digitasi
        showDigitasi(infoWindow);

        // Kodingan Geolokasi
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    // Menambahkan marker geolokasi pada peta
                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        title: 'Lokasi Saya',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP
                    });

                    var marker1 = new google.maps.Marker({
                        position: uluru,
                        map: map,
                        title: 'Depot Air Minum Bening ',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker2 = new google.maps.Marker({
                        position: uluru1,
                        map: map,
                        title: 'Surya Depot Air',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker3 = new google.maps.Marker({
                        position: uluru2,
                        map: map,
                        title: 'Rj.Mineral (DepotAir Minum Isi Ulang)',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker4 = new google.maps.Marker({
                        position: uluru3,
                        map: map,
                        title: 'Depot Air Minum Aisha                         ',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker5 = new google.maps.Marker({
                        position: uluru4,
                        map: map,
                        title: 'Depot Air Minum Mineral Edelweiss',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker6 = new google.maps.Marker({
                        position: uluru5,
                        map: map,
                        title: 'Depot Luthfi                         ',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker7 = new google.maps.Marker({
                        position: uluru6,
                        map: map,
                        title: 'Depot Riyani                         ',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });
                    var marker8 = new google.maps.Marker({
                        position: uluru7,
                        map: map,
                        title: 'Depot Air Minum Diru Water',
                        icon: 'http://maps.google.com/mapfiles/ms/icons/green-dot.png',
                        draggable: true,
                        animation: google.maps.Animation.DROP

                    });

                    // Menambahkan event listener untuk marker geolokasi
                    marker.addListener('click', toggleBounce);

                    function toggleBounce() {
                        if (marker.getAnimation() !== null) {
                            marker.setAnimation(null);
                        } else {
                            marker.setAnimation(google.maps.Animation.BOUNCE);
                        }
                    }

                    // Menampilkan InfoWindow pada lokasi geolokasi
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Kamu Disini');
                    map.setCenter(pos);
                },
                function() {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
        } else {
            // Jika browser tidak mendukung geolokasi
            handleLocationError(false, infoWindow, map.getCenter());
        }
    }

    /*----------------------------------------------------------------------------------------------------------------------------------*/
    // Fungsi untuk menampilkan digitasi
    function showDigitasi(infoWindow) {
        // Menggunakan AJAX untuk mengambil data digitasi dari 'data.php'
        $.ajax({
            url: 'data.php',
            dataType: 'json',
            cache: false,
            success: function(arrays) {
                for (i = 0; i < arrays.features.length; i++) {
                    var data = arrays.features[i];
                    var arrayGeometries = data.geometry.coordinates;
                    var p1 = '<p> id_banguna: ' + data.properties.id_banguna + '</p>';
                    var p12 = '<p> nama_bangu: ' + data.properties.nama_bangu + '</p>';
                    var p14 = '<p> alamat: ' + data.properties.alamat + '</p>';
                    var p2 = p1 + p12 + p14;
                    // var p2 = p1 + ' &nbsp ' +p12;


                    var idTitik = 0;
                    var hitungTitik = [];
                    while (idTitik < arrayGeometries[0][0].length) {
                        var aa = arrayGeometries[0][0][idTitik][0];
                        var bb = arrayGeometries[0][0][idTitik][1];
                        hitungTitik[idTitik] = {
                            lat: bb,
                            lng: aa
                        };
                        idTitik += 1;
                    }

                    // Membuat poligon dan menambahkannya ke peta
                    show_digitation = new google.maps.Polygon({
                        paths: hitungTitik,
                        strokeColor: 'red',
                        strokeOpacity: 1,
                        strokeWeight: 0.5,
                        fillColor: 'green',
                        fillOpacity: 0.35,
                    });

                    // Menambahkan atribut data-content ke objek show_digitation
                    show_digitation.set("data-content", p2);
                    show_digitation.setMap(map);

                    // Menambahkan event listener untuk menampilkan InfoWindow saat diklik
                    show_digitation.addListener('click', function(event) {
                        var lat = event.latLng.lat();
                        var lng = event.latLng.lng();
                        var info = {
                            lat: lat,
                            lng: lng
                        };
                        var content = this.get(
                            "data-content"); // Mengambil konten dari atribut data-content
                        infoWindow.setContent(content);
                        infoWindow.setPosition(info);
                        map.setCenter(info);
                        infoWindow.open(map);
                    });
                }
            }
        });
    }
    /*----------------------------------------------------------------------------------------------------------------------------------*/
    // Menangani kesalahan geolokasi
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent('Kesalahan Layanan geolokasi.' + 'Error:<i>Browser</i> anda tidak mendukung geolokasi.');
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>