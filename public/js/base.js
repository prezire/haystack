function Haystack()
{
  this.baseUrl;
  this.init = function()
  {
    this.setListeners();
  };
  this.setListeners = function()
  {
    $('#home.index .btnShowListing').click(function(e){
      $('#home.index .expandable').slideToggle();
      e.preventDefault();
    });
    //BUG: Doesn't click.
    $('#comment.index .cbApproved').click(function(){
      var t = $(this);
      var id = t.attr('id');
      var approved = t.is(':checked');
      var url = 'comment/updateApproved/' + 
                id + 
                '/' + 
                approved;
      $.ajax
      (
        {
          url: url, 
          success: function(response){
            var r = response;
            if(r.success)
            {
              //
            }
            else
            {
              //
            }
          }
        }
      );
    });
  };
}