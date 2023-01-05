
import { getUseMessage } from './components/Message.vue';

$(document).ready(function() {
  
    $('#searchInput').keyup(function() {
      var search = $(this).val();
      $.ajax({
        url: '/search',
        type: 'GET',
        data: {search: search},
        success: function(response) {
          // Clear the search results
          $('#searchResults').empty();
          // Iterate over the search results and display them
          $.each(response, function(index, user) {
            var userId = user.id;
            $('#searchResults').append(
              //  '<div style="border-bottom: 1px solid; width: 250px">' + user.firstname + '</div>'

              '<li class="nav-item iq-chat-list active">'+

                    '<a href=" "style="display: block" data-bs-toggle="tab" role="tab" aria-controls="user-content-101" aria-selected="true" @click="getUserMessage('+userId+')" :id="'+userId+'">'+
                        '<div class="position-relative" style="margin-top:10px; position: relative">'+
                            '<img src="assets/images/user/user.png" class="avatar-50 rounded" loading="lazy"/>'+
                        '</div>'+
                        '<div style=" align-items: center; width:100px;">'+
                            '<div class="d-flex flex-grow-1 flex-column">'+
                                '<div class="d-flex align-items-center gap-1">'+
                                    '<p class="mb-0 text-ellipsis short-1 flex-grow-1 iq-userlist-name">'+
                                      user.firstname +' '+ user.lastname+'</p>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</a>'+
                '</li>'
     
            );
            getUserMessage(userId);
          });
        }
      }).delay(500);
    });
  
  

  // $(document).click(function() {
  //   $('#searchResults').hide();
  // });
});