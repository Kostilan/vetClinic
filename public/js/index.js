$(document).ready(function() {
    let modal = document.getElementById('modal');
    let modalClose = document.getElementById('modal-close');
    let m_body = document.getElementById('m_body');
  
    function sendHtml(event) {
        event.preventDefault();
        modal.style.display = 'block';
        
        $.ajax({
          url: this.href,
          method: 'GET',
          success: function(response) {
            console.log(response);
            m_body.innerHTML = response;
          },
          error: function(error) {
            console.error('Error:', error);
          }
        });
      }
    $(document).on("click", "#log_in, #sign_in", sendHtml); // вместо того, что выше. Привяжет обработчик событий к документу и будет срабатывать для всех элементов с id "login" и "sign", даже если они добавлены динамически.
  
    modalClose.addEventListener("click", function() {
      modal.style.display = 'none';
      m_body.innerHTML = "";
    });  
  });

  $(document).ready(function() {
    let bodyAccount = document.getElementById('bodyAccount');
  
    function sendHtml(event) {
        event.preventDefault();
        
        $.ajax({
          url: this.href,
          method: 'GET',
          success: function(response) {
            console.log(response);
            bodyAccount.innerHTML = response;
          },
          error: function(error) {
            console.error('Error:', error);
          }
        });
      }
    $(document).on("click", "#accountUser, #accountBookmark, #accountBooks", sendHtml); // Привяжет обработчик событий к документу и будет срабатывать для всех элементов с id "login" и "sign", даже если они добавлены динамически.
  });
  
  $(document).on("submit", "#profileUpdateForm", function(event) {
    event.preventDefault();

    $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        data: $(this).serialize(),
        success: function(response) {
        $('#bodyAccount').html(response);

            // Вместо вывода в консоль, вы можете обновить содержимое страницы или закрыть модальное окно
            // Например, если у вас есть div с id "bodyAccount", вы можете использовать:
            // $('#bodyAccount').html(response);
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
});