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


// счетчик товаров для корзины


// Срипт корзины
function addToCart() {
  let quantity = parseInt(document.getElementById('quantity').value);
  let title = document.getElementById('title').textContent;
  let article = document.getElementById('article').textContent;
  let photo = document.getElementById('photo').src;
  let product_quantity = parseInt(document.getElementById('quantity_product').textContent);
  let cost = document.getElementById('cost').textContent;

  let productData = {
      'title': title,
      'article': article,
      'photo': photo,
      'quantity': quantity,
      'product_quantity': product_quantity,
      'cost': cost
  };

  if (isNaN(quantity) || isNaN(product_quantity) || quantity <= 0 || quantity > product_quantity) {
      alert('Введите корректное значение или ваше значение больше количества товаров в магазине');
  } else {
      // Проверяем, есть ли уже данные в куках для корзины
      var cartData = JSON.parse(localStorage.getItem('cart')) || [];

      // Добавляем новый товар в куки
      cartData.push(productData);

      // Сохраняем обновленные данные в куках
      localStorage.setItem('cart', JSON.stringify(cartData));

      alert('Товар добавлен в корзину!');
  }
}

