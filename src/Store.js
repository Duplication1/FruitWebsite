import React, { useState } from 'react';
import './App.css';

function Store() {
    const [selectedProduct, setSelectedProduct] = useState(null);
    const [showPopUp, setShowPopUp] = useState(false);

    const handleClick = (productName) => {
        setSelectedProduct(productName);
        setShowPopUp(true); // Show pop-up when product is selected
    };

    const handleClosePopUp = () => {
        setShowPopUp(false); // Close pop-up when close button is clicked
    };

    return (
        <section className='body' id='section-store'>
            <h1 className='h1-store green'>Store</h1>
            <div className='store-container'>
                <div className='store-column'>
                    <img src='./apple-fruit.jpg' className='store-column-img' alt='Apple' />
                    <h1 className='fruits-name'>Apple</h1>
                    <button className='fruits-description'>Click for more info.</button>
                    <button className='add-to-cart' onClick={() => handleClick('Apple')}>
                        <div className='add-to-cart-img'><img src='add-to-cart.png' alt='Add to Cart' /></div>
                        Add To Cart
                    </button>
                </div>
                <div className='store-column'>
                    <img src='./apple-fruit.jpg' className='store-column-img' alt='Apple' />
                    <h1 className='fruits-name'>Apple</h1>
                    <button className='fruits-description'>Click for more info.</button>
                    <button className='add-to-cart' onClick={() => handleClick('Apple')}>
                        <div className='add-to-cart-img'><img src='add-to-cart.png' alt='Add to Cart' /></div>
                        Add To Cart
                    </button>
                </div>
                <div className='store-column'>
                    <img src='./apple-fruit.jpg' className='store-column-img' alt='Apple' />
                    <h1 className='fruits-name'>Apple</h1>
                    <button className='fruits-description'>Click for more info.</button>
                    <button className='add-to-cart' onClick={() => handleClick('Apple')}>
                        <div className='add-to-cart-img'><img src='add-to-cart.png' alt='Add to Cart' /></div>
                        Add To Cart
                    </button>
                </div>
                <div className='store-column'>
                    <img src='./apple-fruit.jpg' className='store-column-img' alt='Apple' />
                    <h1 className='fruits-name'>Apple</h1>
                    <button className='fruits-description'>Click for more info.</button>
                    <button className='add-to-cart' onClick={() => handleClick('Apple')}>
                        <div className='add-to-cart-img'><img src='add-to-cart.png' alt='Add to Cart' /></div>
                        Add To Cart
                    </button>
                </div>
                <div className='store-column'>
                    <img src='./apple-fruit.jpg' className='store-column-img' alt='Apple' />
                    <h1 className='fruits-name'>Apple</h1>
                    <button className='fruits-description'>Click for more info.</button>
                    <button className='add-to-cart' onClick={() => handleClick('Apple')}>
                        <div className='add-to-cart-img'><img src='add-to-cart.png' alt='Add to Cart' /></div>
                        Add To Cart
                    </button>
                </div>
                <div className='store-column'>
                    <img src='./apple-fruit.jpg' className='store-column-img' alt='Apple' />
                    <h1 className='fruits-name'>Apple</h1>
                    <button className='fruits-description'>Click for more info.</button>
                    <button className='add-to-cart' onClick={() => handleClick('Apple')}>
                        <div className='add-to-cart-img'><img src='add-to-cart.png' alt='Add to Cart' /></div>
                        Add To Cart
                    </button>
                </div>
            </div>
            {showPopUp && (
                <div id='popUpDiv' className='pop-up-div'>
                    <button id='closeBtn' className='close-btn' onClick={handleClosePopUp}>X</button>
                    <h1 className='your-cart green'>Your Cart</h1>
                    {selectedProduct && <p>Product: {selectedProduct}</p>}
                </div>
            )}
        </section>
    );
}

export default Store;
