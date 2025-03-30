let products = {
    data: [
      {
        productName: "Mister Cook",
        category: "Topwear",
        Bagname:"Surprise Bag",
        price: "30",
        image: "images/image17.jpg",
        logoimg: "images/logo1.png",
        time: "récupérer aujourd'hui : 15:30 -19:00",
        left:"2 rest",
      },
      {
        productName: "Mc Donald's",
        category: "Topwear",
        Bagname:"Surprise Bag",
        price: "49",
        image: "images/image16.jpg",
        logoimg: "images/McDonalds-Logo__1_-modified-removebg-preview (1).png",
        time: "récupérer aujourd'hui : 15:30 -19:00",
        left:"2 rest",
      },
      
      {
        productName: "KFS",
        category: "Topwear",
        Bagname:"Surprise Bag",
        price: "29",
        image: "images/120904083_129764615542915_2123990694166447632_n.jpg",
        logoimg: "images/logo7.png",
        time: "récupérer aujourd'hui : 15:30 -19:00",
        left:"2 rest",
      },
      {
        productName: "Le Petit Pecheur",
        category: "Topwear",
        Bagname:"Surprise Bag",
        price: "129",
        image: "images/kaitlin-dowis-VjM2t7VH9Uo-unsplash.jpg",
        logoimg: "images/logo4.png",
        time: "récupérer aujourd'hui : 15:30 -19:00",
        left:"2 rest",
      },
      {
        productName: "Fresh Mania",
        category: "Bottomwear",
        Bagname:"Surprise Bag",
        price: "89",
        image: "images/image15.jpg",
        logoimg: "images/logo8.png",
        time: "récupérer aujourd'hui : 15:30 -19:00",
        left:"2 rest",
      },
      {
        productName: "Le Sesame Patisserie",
        category: "Jacket",
        Bagname:"Surprise Bag",
        price: "189",
        image: "images/elisheva-gohar-nyekPQwZbgw-unsplash.jpg",
        logoimg: "images/logo2.png",
        time: "récupérer aujourd'hui : 15:30 -19:00",
        left:"2 rest",
      },
      {
        productName: "Frunk's Burgers",
        category: "Topwear",
        Bagname:"Surprise Bag",
        price: "49",
        image: "images/image14.jpg",
        logoimg: "images/logo6.png",
        time: "récupérer aujourd'hui : 15:30 -19:00",
        left:"2 rest",
      },
    ],
  };
  
  for (let i of products.data) {
    //Create Card
    let card = document.createElement("div");
    //Card should have category and should stay hidden initially
    card.classList.add("card", i.category, "hide");

    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");

    //img tag
    let image = document.createElement("img");
    image.setAttribute("src", i.image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);


     //logo tag
     let logoimg = document.createElement("img");
     logoimg.setAttribute("src", i.logoimg);
     card.appendChild(logoimg);
    logoimg.classList.add("logoimg");
    
    //container
    let container = document.createElement("div");
    container.classList.add("container");
    //product name
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = i.productName.toUpperCase();
    container.appendChild(name);
 //bag name
    let  Bagname = document.createElement("h4");
    Bagname.classList.add("Bagname");
    Bagname.innerText = i.Bagname.toUpperCase();
    container.appendChild(Bagname);
    //price
    let price = document.createElement("h6");
    price.innerText =  i.price+"DH" ;
    container.appendChild(price);
  
    //time
    let time = document.createElement("p");
    time.innerText =  i.time;
    container.appendChild(time);

//left
    let  left = document.createElement("span");
   left.classList.add("left");
    left.innerText =  i.left;
  container.appendChild(left);

    card.appendChild(container);
    document.getElementById("products").appendChild(card);
  }
  
  //parameter passed from button (Parameter same as category)
  function filterProduct(value) {
    //Button class code
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach((button) => {
      //check if value equals innerText
      if (value.toUpperCase() == button.innerText.toUpperCase()) {
        button.classList.add("active");
      } else {
        button.classList.remove("active");
      }
    });
  
    //select all cards
    let elements = document.querySelectorAll(".card");
    //loop through all cards
    elements.forEach((element) => {
      //display all cards on 'all' button click
      if (value == "all") {
        element.classList.remove("hide");
      } else {
        //Check if element contains category class
        if (element.classList.contains(value)) {
          //display element based on category
          element.classList.remove("hide");
        } else {
          //hide other elements
          element.classList.add("hide");
        }
      }
    });
  }
  
  //Search button click
  document.getElementById("search").addEventListener("click", () => {
    //initializations
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");
  
    //loop through all elements
    elements.forEach((element, index) => {
      //check if text includes the search value
      if (element.innerText.includes(searchInput.toUpperCase())) {
        //display matching card
        cards[index].classList.remove("hide");
      } else {
        //hide others
        cards[index].classList.add("hide");
      }
    });
  });
  
  //Initially display all products
  window.onload = () => {
    filterProduct("all");
  };