import './App.css';
import React, { useRef, useEffect } from 'react';

function Hero () {

    function smoothScrollTo(targetId) {
        const targetSection = document.getElementById(targetId);
    
        if (targetSection) {
            window.scrollTo({
                top: targetSection.offsetTop,
                behavior: 'smooth'  // This makes the scroll animate smoothly
            });
        }
    }



    return (
        <section className='body' id='section-hero'>
            <div className='hero-title-paragraph-container'>
                <h1>Know your <span className='green'>FRUITS!</span></h1>
                <p>We got the information for you.</p>
                <button className='hero-button' onClick={() => smoothScrollTo('section-store')}>
                    Go To Store
                </button>
            </div>
            <div className='hero-image-container'>
                <img src='./apple-fruit.png'/>
            </div>
        </section>
    );
}

export default Hero;