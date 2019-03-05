// $('.radio_btn label').click(function () {
//
//   var form_price = $(this).attr('data-price');
//
//   $('#form_price').text(form_price);
//
// });

const labels = document.querySelectorAll('.radio_btn label');

if (labels.length) {
  Array.from(labels).forEach(l => {
    l.addEventListener('click', function (e) {
      document.getElementById('form-price').innerText = e.target.dataset.price;
    })
  })
}