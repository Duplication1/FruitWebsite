import './App.css';
import Timer from './Timer';
import Burger from './Burger';

document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function Header() {
    return (
        <nav className="nav-bar">
            <div className='logo'>
                <img src='gamots-fruit.png'/>
            </div>
            <ul>
                <li><a className="nav-links" href="#section-hero">HOME</a></li>
                <li><a className="nav-links" href="#section-about">ABOUT</a></li>
                <li><a className="nav-links" href="#section-contact">CONTACT</a></li>
                <li><a className="nav-links" href="#section-store">STORE</a></li>
                <li><a className="nav-links" href="#section-faq">FAQ</a></li>
            </ul>
            <Burger/>
            
            <Timer />
        </nav>
       
    )
    
}

export default Header;