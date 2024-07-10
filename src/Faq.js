import './App.css';

function Faq(){

    return (
        <section className="body" id="section-faq">
            <h1 className="h1-store green">FAQ</h1>
            <ul id="accordion">
                <li>
                    <label for="first">How do i know where to go?<span>&#x3e;</span></label>
                    <input type='radio' name="accordion" id="first" />
                    <div className='content'>
                        <p>You can go into https://www.google.com/maps/place/35+Presidential+Rd,
                            +Quezon+City,+Metro+Manila/@14.6880828,121.0972117,18z/data=!3m1!4b1!4m6
                            !3m5!1s0x3397ba173e2be2e7:0x59089cd751af2a63!8m2!3d14.6880813!4d121.0
                            979772!16s%2Fg%2F11rxzhmg2f?entry=ttu</p>
                    </div>
                </li>
                <li>
                    <label for="second">How do i know where to go?<span>&#x3e;</span></label>
                    <input type='radio' name="accordion" id="second" />
                    <div className='content'>
                        <p>You can go into https://www.google.com/maps/place/35+Presidential+Rd,
                            +Quezon+City,+Metro+Manila/@14.6880828,121.0972117,18z/data=!3m1!4b1!4m6
                            !3m5!1s0x3397ba173e2be2e7:0x59089cd751af2a63!8m2!3d14.6880813!4d121.0
                            979772!16s%2Fg%2F11rxzhmg2f?entry=ttu</p>
                    </div>
                </li>
                <li>
                    <label for="third">How do i know where to go?<span>&#x3e;</span></label>
                    <input type='radio' name="accordion" id="third" />
                    <div className='content'>
                        <p>You can go into https://www.google.com/maps/place/35+Presidential+Rd,
                            +Quezon+City,+Metro+Manila/@14.6880828,121.0972117,18z/data=!3m1!4b1!4m6
                            !3m5!1s0x3397ba173e2be2e7:0x59089cd751af2a63!8m2!3d14.6880813!4d121.0
                            979772!16s%2Fg%2F11rxzhmg2f?entry=ttu</p>
                    </div>
                </li>
            </ul>
        </section>
    )
}

export default Faq;