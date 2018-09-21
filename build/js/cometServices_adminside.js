var servicesAdminSideComet = Class.create();
servicesAdminSideComet.prototype = {
  timestamp: 0,
  url: base_url + 'servicesBackEnd.php',
  noerror: true,
  initialize: function() { },

  connect: function()
  {
    this.ajax = new Ajax.Request(this.url, {
      method: 'get',
      parameters: { 'timestamp' : this.timestamp },
      onSuccess: function(transport) {
        // handle the server response
        var response = transport.responseText.evalJSON();
        this.comet1.timestamp = response['timestamp'];
        this.comet1.handleResponse(response);
        this.comet1.noerror = true;
      },
      onComplete: function(transport) {
        // send a new ajax request when this request is finished
        if (!this.comet1.noerror)
          // if a connection problem occurs, try to reconnect each 5 seconds
          setTimeout(function(){ comet4.connect() }, 5000);
        else
          this.comet1.connect();
        this.comet1.noerror = false;
      }
    });
    this.ajax.comet1 = this;
  },

  disconnect: function()
  {


  },

  handleResponse: function(response)
  {
    // $('content').innerHTML += '<div>' + response['msg'] + '</div>';
    dt_service.ajax.reload();
    console.log('sss');
  },

  doRequest: function(request)
  {
    new Ajax.Request(this.url, {
      method: 'get',
      parameters: { 'msg' : request }
    });
  }
}

var comet4 = new servicesAdminSideComet();
comet4.connect();
