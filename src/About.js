import './App.css';

function About(){

    return(
            <section className='body' id='section-about'>
                <h1 className='about-title green'>About</h1>
                <div className='about-paragraph-container'>
                <p className='about-paragraph'>This website is all about fruits, <span className='emphasis'>I created this website for you</span> to explore what type of fruits there is <span className='green'>fruit</span> vending.
                every information about fruits is in here.
                </p>
                </div>
                <div className='about-img-container'>
                    <img src='green-community.png' className='about-img'/>
                </div>
            </section>
        );
}

export default About;