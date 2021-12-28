<div class="blog_left_content">

    <div class="contact_page_map">
        <div id="my_location"></div> <!-- this code is for google map -->
    </div> <!-- contact_page_map end -->

    <div class="single_blog padding_bottom">

        <div class="single_blog_content contact_page_content_lists">

            <div class="contact_page_info">
                <ul>
                    
                    <li><a href="mailto:phanthithanhthuy1509c@gmail.com"><i class="fa fa-envelope"></i>phanthithanhthuy1509@gmail.com</a></li>
                    <li><a href="tel:+84961389705"><i class="fa fa-phone"></i> + 84 961389705</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> Phú An, Phú Vang, Thừa Thiên Huế</a></li>
                    
                </ul>
            </div>

            <div class="contact_page_form">
                <h2>Để lại lời nhắn cho mình</h2>
                <form action="#" method="post">
                    <input name="name" type="text" placeholder="Tên: ">
                    <input name="email" type="email" placeholder="Email: ">
                    <textarea name="message" placeholder="Lời nhắn: "></textarea>
                    <input name="submit" type="submit" value="GỬI LỜI NHẮN">
                </form>
            </div>

        </div> <!-- single_blog_content end -->

    </div> <!-- single_blog end -->
</div>



<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(16.5133335,107.6404209);

function initialize() {
    var mapProp = {
        center: myCenter,
        scrollwheel: false,
        zoom: 14,
        styles: [{
            "featureType": "landscape",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 65
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "poi",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 51
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road.highway",
            "stylers": [{
                "saturation": -100
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "road.arterial",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 30
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "road.local",
            "stylers": [{
                "saturation": -100
            }, {
                "lightness": 40
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "transit",
            "stylers": [{
                "saturation": -100
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "administrative.province",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [{
                "visibility": "on"
            }, {
                "lightness": -25
            }, {
                "saturation": -100
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "hue": "#ffff00"
            }, {
                "lightness": -25
            }, {
                "saturation": -97
            }]
        }],
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    };

    var map = new google.maps.Map(document.getElementById("my_location"), mapProp);

    var marker = new google.maps.Marker({
        position: myCenter,
        icon: 'public/img/map_maker.png',
    });

    marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>