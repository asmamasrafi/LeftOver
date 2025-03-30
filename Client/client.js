
var heartIcons = document.querySelectorAll(".heart-icon");

heartIcons.forEach(function(heartIcon) {
  var productElement = heartIcon.closest(".dashboard-cart");
  var productId = productElement.getAttribute("data-product-id");
  var isLiked = localStorage.getItem(productId);

  if (isLiked === "true") {
    heartIcon.classList.add("active");
    addProductToFavoris(productElement);
  }

  heartIcon.addEventListener("click", function() {
    if (heartIcon.classList.contains("active")) {
      heartIcon.classList.remove("active");
      localStorage.setItem(productId, "false");
      removeProductFromFavoris(productElement);
    } else {
      heartIcon.classList.add("active");
      localStorage.setItem(productId, "true");
      addProductToFavoris(productElement);
    }
   
  });
});

function addProductToFavoris(productElement) {
  var favorisProducts = document.querySelector(".dashbord-favouris");
  var clonedProductElement = productElement.cloneNode(true);
  favorisProducts.appendChild(clonedProductElement);
 
}

function removeProductFromFavoris(productElement) {
  var favorisProducts = document.querySelector(".dashbord-favouris");
  var productToRemove = favorisProducts.querySelector('[data-product-id="' + productElement.getAttribute("data-product-id") + '"]');
  favorisProducts.removeChild(productToRemove);

}



const dashbordFavouris = document.querySelector(".dashbord-favouris");
const card1 = document.querySelector(".card1");

if (dashbordFavouris.children.length > 0) {
  card1.style.display = "none";
} else {
  card1.style.display = "block";
}






var notificationIcon = document.querySelector(".bx-bell");
var notificationPopup = document.querySelector(".Notification-poop");

notificationIcon.addEventListener("click", function() {
  notificationIcon.querySelector(".notification-count").style.display = "none";
  notificationPopup.classList.toggle("show");
});










