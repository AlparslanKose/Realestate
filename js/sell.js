
// JavaScript
const advertisementContainer = document.getElementById('advertisement-container');
const advertisementForm = document.getElementById('advertisement-form');

advertisementForm.addEventListener('submit', function (event) {
  event.preventDefault();

  // Get form input values
  const title = document.getElementById('title').value;
  const name = document.getElementById('name').value;
  const surname = document.getElementById('surname').value;
  const phoneNumber = document.getElementById('phoneNumber').value;
  const email = document.getElementById('email').value;
  const address = document.getElementById('address').value;
  const size = document.getElementById('size').value;
  const rooms = document.getElementById('rooms').value;
  const price = document.getElementById('price').value;
  const image = document.getElementById('picture').files[0];

 // Create advertisement container
  const adContainer = document.createElement('div');
  adContainer.className = 'advertisement';

  // Create advertisement title
  const adTitle = document.createElement('h2');
  adTitle.textContent = title;
  adContainer.appendChild(adTitle);
  
  // Create advertisement name
  const adName = document.createElement('p');
  adName.textContent = `Name: $${name}`;
  adContainer.appendChild(adName);

  // Create advertisement surname
  const adSurName = document.createElement('p');
  adSurName.textContent = `Surname: $${surname}`;
  adContainer.appendChild(adSurName);
  
    // Create advertisement phonenumber
  const adPhoneNumber = document.createElement('p');
  adPhoneNumber.textContent = `phoneNumber: $${phoneNumber}`;
  adContainer.appendChild(adPhoneNumber);
  
      // Create advertisement email
  const adEmail = document.createElement('p');
  adEmail.textContent = `Email: $${email}`;
  adContainer.appendChild(adEmail);
  
  // Create advertisement location
  const adLocation = document.createElement('p');
  adLocation.textContent = `Location: ${address}`;
  adContainer.appendChild(adLocation);
  
        // Create advertisement size
  const adSize = document.createElement('p');
  adSize.textContent = `Size: $${size}`;
  adContainer.appendChild(adSize);
  
          // Create advertisement rooms
  const adRooms = document.createElement('p');
  adRooms.textContent = `Rooms: $${rooms}`;
  adContainer.appendChild(adRooms);
  
  // Create advertisement price
  const adPrice = document.createElement('p');
  adPrice.textContent = `Price: $${price}`;
  adContainer.appendChild(adPrice);

  // Create advertisement image
  const adImage = document.createElement('img');
  adImage.src = URL.createObjectURL(image);
  adImage.alt = 'Advertisement Image';
  adContainer.appendChild(adImage);
  

  // Insert the advertisement container into the advertisement container element
  advertisementContainer.appendChild(adContainer);

  // Reset the form
  advertisementForm.reset();
});



