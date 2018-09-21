var sdsprojectsComet = Class.create();
sdsprojectsComet.prototype = {
  timestamp: 0,
  url: base_url + 'sdsprojectsBackEnd.php',
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
        this.comet2.timestamp = response['timestamp'];
        this.comet2.handleResponse(response);
        this.comet2.noerror = true;
      },
      onComplete: function(transport) {
        // send a new ajax request when this request is finished
        if (!this.comet2.noerror)
          // if a connection problem occurs, try to reconnect each 5 seconds
          setTimeout(function(){ comet2.connect() }, 5000);
        else
          this.comet2.connect();
        this.comet2.noerror = false;
      }
    });
    this.ajax.comet2 = this;
  },

  disconnect: function()
  {


  },

  handleResponse: function(response)
  {
    // $('content').innerHTML += '<div>' + response['msg'] + '</div>';
    dt_projectmonitoring.ajax.reload();
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
var comet2 = new sdsprojectsComet();
comet2.connect();
