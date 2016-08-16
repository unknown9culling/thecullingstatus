function updateStatus() {
  $.get("/backend/query.php?" + Date.now(), function(res) {
    json = JSON.parse(res)
    if(json.us === true) {
      $('.status-na').removeClass('status-down').addClass('status-up');
    } else {
      $('.status-na').removeClass('status-up').addClass('status-down');
    }
    if(json.eu === true) {
      $('.status-eu').removeClass('status-down').addClass('status-up');
    } else {
      $('.status-eu').removeClass('status-up').addClass('status-down');
    }
    if(json.ocn === true) {
      $('.status-ocn').removeClass('status-down').addClass('status-up');
    } else {
      $('.status-ocn').removeClass('status-up').addClass('status-down');
    }
  })
}

window.onload = function() {
  updateStatus();
}
