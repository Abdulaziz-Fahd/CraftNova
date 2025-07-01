<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Graphic Design Showcase</title>
  <style>
  
  
:root {
      --background: #FAF9F6;     /* Elegant light canvas */
      --primary-text: #2E2E2E;   /* Charcoal black */
      --accent1: black;        /* Bold Coral Red */
      --accent2: white;        /* Digital Blue */
      --accent3: black;        /* Creative Yellow */
      --accent4: #8338EC;        /* Neon Purple */
     --font: 'Poppins', sans-serif;

}

    * {
      box-sizing: border-box;
    }
    
    html, body {
      height: 100%;
      display: flex;
      flex-direction: column;
      margin: 0;
      padding: 0;
      font-family: var(--font);
      background-color: var(--black);
      color: var(--white);
      overflow-x: hidden;
    }



    html, body {
      margin: 0;
      padding: 0;
      height: 100vh;
      overflow: hidden; /* prevent full-page scroll */
      font-family: var(--font);
      background-color: var(--black);
      color: var(--white);
    }

    nav {
      width: 100%;
      background-color: var(--accent2);
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 999;
      border-bottom: 3px solid #333;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: var(--white);
    }

    .nav-links {
      display: flex;
      gap: 1.5rem;
    }

    .nav-links a {
      text-decoration: none;
      color: var(--accent1);
      transition: color 0.3s;
    }

    .nav-links a:hover {
      color: var(--white);
    }

    .outer-scroll {
      height: calc(100vh - 64px);
      overflow-y: auto;
      padding: 2rem;
    }

    .content {
        flex: 1;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2.5rem;
        padding: 3rem;
        justify-items: center;
    }

    .main-image {
      width: 90%;
      cursor: pointer;
      border-radius: 16px;
      transition: transform 0.3s ease;
    }

    .main-image:hover {
      transform: scale(1.05);
    }

    .popup {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: rgba(0, 0, 0, 0.97);
      z-index: 1000;
      flex-direction: column;
    }
    .close-btn {
      position: fixed;
      top: 20px;
      right: 30px;
      background: white;
      color: black;
      border: none;
      font-size: 1.2rem;
      padding: 10px 16px;
      border-radius: 8px;
      cursor: pointer;
      z-index: 1101;
      transition: background 0.3s, transform 0.2s;
    }
    
    .close-btn:hover {
      background: #ddd;
      transform: scale(1.1);
    }


    #popup-scrollbox {
      margin-top: 80px;
      height: calc(100vh - 80px);
      overflow-y: auto;
      padding: 20px;
    }

    #popup-scrollbox img {
      width: 100%;
      max-width: 800px;
      margin: 40px auto;
      display: block;
      border-radius: 12px;
    }
        
    footer {
      background-color: var(--accent2);
      color: var(--white);
      text-align: center;
      padding: 1rem;
      font-size: 0.95rem;
      margin-top: 2rem;
      border-top: 3px solid #333;
    }





    /* Optional: style scrollbars */
    .outer-scroll::-webkit-scrollbar,
    #popup-scrollbox::-webkit-scrollbar {
      width: 6px;
    }

    .outer-scroll::-webkit-scrollbar-thumb,
    #popup-scrollbox::-webkit-scrollbar-thumb {
      background-color: #888;
      border-radius: 6px;
    }

    @media (max-width: 600px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
      }
      .main-image {
        max-width: 90vw;
      }
    }
  </style>
</head>
<body>

  <nav>
    <div class="logo">DesignHub</div>
    <div class="nav-links">
      <a href="#">Home</a>
      <a href="#">About Us</a>
    </div>
  </nav>

  <!-- Main scrollable content -->
  <div class="outer-scroll">
    <div class="content" id="gallery">
      <img src="img1.png" alt="Design 1" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img2.png" alt="Design 2" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img3.png" alt="Design 3" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img1.png" alt="Design 4" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img2.png" alt="Design 5" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img3.png" alt="Design 6" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img1.png" alt="Design 4" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img2.png" alt="Design 5" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img1.png" alt="Design 1" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img2.png" alt="Design 2" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img3.png" alt="Design 3" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img1.png" alt="Design 4" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img2.png" alt="Design 5" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img3.png" alt="Design 6" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img1.png" alt="Design 4" class="main-image" data-related="img2.png,img3.png,img4.png">
      <img src="img2.png" alt="Design 5" class="main-image" data-related="img2.png,img3.png,img4.png">     
 
    </div>
  </div>

  <!-- Popup modal with its own scroll -->
  <div class="popup" id="popup">
    <button class="close-btn" onclick="closePopup()">Close ✖</button>
    <div id="popup-scrollbox"></div>
  </div>
  
  
      <!-- FOOTER -->
    <footer>
      &copy; 2025 DesignHub. All rights reserved.
    </footer>



  <script>
    const galleryImages = document.querySelectorAll('.main-image');
    const popup = document.getElementById('popup');
    const popupContent = document.getElementById('popup-scrollbox');

    galleryImages.forEach(img => {
      img.addEventListener('click', () => {
        popupContent.innerHTML = '';
        const relatedImages = img.dataset.related.split(',');
        relatedImages.forEach(src => {
          const image = document.createElement('img');
          image.src = `photos/${src}`;
          popupContent.appendChild(image);
        });
        popup.style.display = 'flex';
      });
    });

    function closePopup() {
      popup.style.display = 'none';
      popupContent.innerHTML = '';
    }
  </script>

</body>
</html>