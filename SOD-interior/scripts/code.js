/*  new Awesomplete('input[type="email"]', {
    list: ['gmail.com','yahoo.com','hotmail.com','aol.com','msn.com','yahoo.co.in','live.com',
    'rediffmail.com','ymail.com','outlook.com', 'yahoo.in', 'mail.com'],
    data: function (text, input) {
      return input.slice(0, input.indexOf("@")) + "@" + text;
    },
    filter: Awesomplete.FILTER_STARTSWITH,
    sort: false
  });
*/


function openModal(title, content) {
    $('#modaltitle').html(title);
    $('#modalcontent').html(content);
}


