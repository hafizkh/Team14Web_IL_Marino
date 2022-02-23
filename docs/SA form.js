const fname = document.getElementById('firstname')
const mail = document.getElementById('mail')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (fname.value === '' || fname.value == null) {
    messages.push('Please Enter a Name')
  }

  if (mail.value ==='') {
    messages.push('Please Enter an Email Address')
  }
  


  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})
