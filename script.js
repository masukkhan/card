document.getElementById('creditCardForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const formData = new FormData(this);
  let data = '';
  formData.forEach((value, key) => {
    data += `${key}: ${value}\n`;
  });

  // Store the form data in localStorage
  localStorage.setItem('creditCardData', data);

  alert('Form data stored in localStorage.');
});
