function Haystack()
{
  this.baseUrl;
  this.init = function()
  {
    this.setListeners();
  };
  this.setListeners = function()
  {
    //Comment.
    var sCreate = '#applicant.read .row.create';
    $(sCreate + ' form').submit(function(e){
      var t = $(this);
      var url = t.attr('action');
      $.ajax
      (
        {
          url: url, 
          type: 'POST',
          data: t.serialize(),
          success: function(response)
          {
            if(response.success)
            {
              $('#applicant.read .row.comments').append(response.view);
              $(sCreate + ' textarea').val('');
            }
          }
        }
      );
      e.preventDefault();
    });
    //
    //Internship application.
    $('#internship.read .button.apply').click(function(e){
      var t = $(this);
      var href = t.attr('href');
      $.ajax({url: href, success: function(response){
        if(response.success)
        {
          t.addClass('disabled');
        }
      }});
      e.preventDefault();
    });
    //
    $('.delete').click(function(e){
      if(confirm('Are you sure?'))
      {
        var t = $(this);
        var url = t.attr('href');
        $.ajax({url: url, success: function(response){
          if(response.success)
          {
            var p = t.parent().parent().parent();
            var el = p.children('#' + response.id);
            el.remove(); 
          }
        }});
      }
      e.preventDefault();
    });
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