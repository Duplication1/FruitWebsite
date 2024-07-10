import React, { useState } from 'react';
import './App.css'; // Ensure your CSS file is imported

function Burger() {
    const [isModalOpen, setIsModalOpen] = useState(false);

    const toggleModal = () => {
        setIsModalOpen(!isModalOpen);
    };

    return (
      <>
        
            <button className="burger" onClick={toggleModal}>
                <img src="menu-hamburger-nav.svg" className='svg-hamburger'alt="Hamburger Icon" />
            </button>


            {isModalOpen && (
                <div className='burger-modal'>
                  
                    <a className="nav-burger-links" href="#section-hero">HOME</a>
                    <a className="nav-burger-links" href="#section-about">ABOUT</a>
                    <a className="nav-burger-links" href="#section-contact">CONTACT</a>
                    <a className="nav-burger-links" href="#section-store">STORE</a>
                    <a className="nav-burger-links" href="#section-faq">FAQ</a>  
                </div>
            )}
      </>
    );
}

export default Burger;