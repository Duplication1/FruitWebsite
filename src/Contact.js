import './App.css';

function Contact(){

    return ( 
        <section className='body' id='section-contact'>
            <h1 className='h1-contact green'>Get in Touch With Us</h1>
            <div className='contact-main-container'>
                <div className='contact-left-container'>
                    <h1>Want to get in touch? We'd love to hear from you. Here's how you can reach from us</h1>
                    <div className='contact-inner-left-container'>
                        <div className='contact-image-container'>
                        <img src='phone-call.svg'/>
                        </div>
                        <p>Have some business? Call Us!</p>
                    <p><span className='green'>Contact Number:</span> 095215644754</p>
                    </div>
                </div>  
                <div className='contact-right-container'>
                    <form className='contact-form'>
                        <label for='name'>Name:</label><input type='text' id='name' className='contact-input-name'/>
                        <label for='email'>Email:</label><input type='text' id='email' className='contact-input-email'/>
                        <label for='message'>Message:</label><textarea className='contact-input-message'></textarea>
                        <button type='submit'>Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    )
}

export default Contact;