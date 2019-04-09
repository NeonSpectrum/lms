require('./bootstrap')

$('#btnTogglePassword').click(function() {
  let i = $(this).find('i')
  let shown = i.hasClass('fa-eye-slash')
  let input = $(this)
    .closest('.form-group')
    .find('input')

  if (shown) {
    i.removeClass('fa-eye-slash').addClass('fa-eye')
    input.attr('type', 'password')
  } else {
    i.removeClass('fa-eye').addClass('fa-eye-slash')
    input.attr('type', 'text')
  }
})

$('form[name=frmLogin]').submit(function(e) {
  e.preventDefault()

  $(this)
    .find('input')
    .prop('readonly', true)
  $(this)
    .find('button')
    .prop('disabled', true)

  $.ajax({
    type: 'POST',
    data: $(this).serialize(),
    dataType: 'json'
  })
    .done(response => {
      if (response.success) {
        alert(response.message)
        location.href = '/'
      } else {
        alert(response.message)
      }
    })
    .always(() => {
      $(this)
        .find('input')
        .prop('readonly', false)
      $(this)
        .find('button')
        .prop('disabled', false)
    })
})

// $(document).mousemove(function(e) {
//   let x = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX))
//   let y = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientY))

//   $('.login-bg').css('background-position-x', x + 'px')
//   $('.login-bg').css('background-position-y', y + 'px')
// })
