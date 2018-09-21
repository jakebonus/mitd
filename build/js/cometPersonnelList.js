var personnellistComet = Class.create();
personnellistComet.prototype = {
  timestamp: 0,
  url: base_url + 'personnellistBackEnd.php',
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
        this.comet3.timestamp = response['timestamp'];
        this.comet3.handleResponse(response);
        this.comet3.noerror = true;
      },
      onComplete: function(transport) {
        // send a new ajax request when this request is finished
        if (!this.comet3.noerror)
          // if a connection problem occurs, try to reconnect each 5 seconds
          setTimeout(function(){ comet3.connect() }, 5000);
        else
          this.comet3.connect();
        this.comet3.noerror = false;
      }
    });
    this.ajax.comet3 = this;
  },

  disconnect: function()
  {


  },

  handleResponse: function(response)
  {
    // $('content').innerHTML += '<div>' + response['msg'] + '</div>';
    dt_personnellist.ajax.reload();
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
var comet3 = new personnellistComet();
comet3.connect();
