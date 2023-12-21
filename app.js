let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Cheese Kottu',
        image: '1.jpg',
        price: 1100 
    },
    {
        id: 2,
        name: 'Naasi Goreng',
        image: '2.jpg',
        price: 1200
    },
    {
        id: 3,
        name: 'Pizza',
        image: '3.jpg',
        price: 3400
    },
    {
        id: 4,
        name: 'Fried Rice',
        image: '4.jpg',
        price: 1000
    },
    {
        id: 5,
        name: 'Noodles',
        image: '5.webp',
        price: 900
    },
    {
        id: 6,
        name: 'Burger',
        image: '6.jpg',
        price: 800
    },
    {
        id: 7,
        name: 'Chicken Noodles Soup',
        image: '7.jpg',
        price: 1300
    },
    {
        id: 8,
        name: 'Minestrone',
        image: '8.webp',
        price: 1000
    },
    {
        id: 9,
        name: 'Cheddar Soup',
        image: '9.jpg',
        price: 1100
    },
    {
        id: 10,
        name: 'Caesar Salad',
        image: '10.jpg',
        price: 1250
    },
    {
        id: 11,
        name: 'Greek Salad',
        image: '11.jpg',
        price: 1350
    },
    {
        id: 12,
        name: 'Caprese Salad',
        image: '12.jpg',
        price: 1450
    },
    {
        id: 13,
        name: 'Coffee',
        image: '13.webp',
        price: 500
    },
    {
        id: 14,
        name: 'Soft Drinks',
        image: '14.webp',
        price: 300
    },
    {
        id: 15,
        name: 'Juices',
        image: '15.webp',
        price: 400
    },
    {
        id: 16,
        name: 'Peach Iced Tea',
        image: '16.jpg',
        price: 450
    },
    {
        id: 17,
        name: 'Mocktails',
        image: '17.jpg',
        price: 550
    },
    {
        id: 18,
        name: 'Milkshakes',
        image: '18.jpg',
        price: 600
    },
    {
        id: 19,
        name: 'Cake',
        image: '19.webp',
        price: 1000
    },
    {
        id: 20,
        name: 'Ice Cream',
        image: '20.webp',
        price: 400
    },
    {
        id: 21,
        name: 'Puddings and Custards',
        image: '21.PNG',
        price: 700
    },
    {
        id: 22,
        name: 'Pies and Tarts',
        image: '22.jpg',
        price: 800
    },
    {
        id: 23,
        name: 'Pastries',
        image: '23.jpg',
        price: 900
    },
    {
        id: 24,
        name: 'Fruit-Based Desserts',
        image: '24.jpg',
        price: 950
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
        <img src="image/${value.image}" style="height: 200px; transition: transform 0.3s ease-in-out;">

        <style>
        
        img:hover {
            transform: scale(1.1); 
        }
        </style>
        
        <div class="title" style="font-size: 24px; font-weight: bold; color: #333;">${value.name}</div>

        <style>
        
        .title {
            font-size: 24px; 
            font-weight: bold; 
            color: #333; 
        }
        </style>
        
        <div class="price" style="font-size: 20px; font-weight: bold; color: #008000;">Rs ${value.price.toLocaleString()}</div>

        <style>
        
        .price {
            font-size: 20px; 
            font-weight: bold; 
            color: #008000; 
        }
        </style>
        
        <button class="addToCart" onclick="addToCard(${key})"
        style="background-color: #008CBA; color: #FFFFFF; padding: 10px 20px; border: none; cursor: pointer;"
        onmouseover="this.style.backgroundColor='#005f79';" onmouseout="this.style.backgroundColor='#008CBA';">
        Add To Cart
      </button>
      `;
        list.appendChild(newDiv);
    })
}

function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}

total.addEventListener('click', () => {
    // Assuming you want to redirect to a page named 'checkout.html'
    window.location.href = 'checkout.html';
});

initApp();
