<?php $pageTitle = 'Технология покраски | Как с нами можно связаться';
       $pageDescription = 'сайт компании Технологии Покраски. Мы занимаемся покраской деревянных поверхностей различного типа, а также сопутствующими работами по дереву.';
       $pageKeywords = 'покраска коттеджа, заказать покраску коттеджа, покраска сруба, заказать покрасу сруба, покраска сруба на заказ';
?> 

    <?php 
    $animatedTada = '';
    include("layouts/header.php"); 
    ?>  
    
<div class="wrapper">
	 <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          center: {lat: 59.94119403, lng: 30.27695507},
          zoom: 18
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
        async defer></script>
</div>
	<?php include("layouts/footer.php"); ?> 
</body>
</html>