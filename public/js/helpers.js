nonBelievers = {
    initMap: function(id, lat, lon, zoom, desc) {
      var map = L.map(id).setView([lat, lon], zoom);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([lat, lon]).addTo(map)
          .bindPopup(desc)
          .openPopup();

    }
};