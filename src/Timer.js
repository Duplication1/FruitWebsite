import React, { useState, useEffect } from 'react';
import './App.css';

function Timer() {
    const [time, setTime] = useState({
        hours: '',
        minutes: '',
        seconds: ''
    });

    useEffect(() => {
        const intervalId = setInterval(() => {
            const currentDate = new Date();
            const hours = String(currentDate.getHours()).padStart(2, '0');
            const minutes = String(currentDate.getMinutes()).padStart(2, '0');
            const seconds = String(currentDate.getSeconds()).padStart(2, '0');

            setTime({
                hours: hours,
                minutes: minutes,
                seconds: seconds
            });
        }, 1000); 

        return () => clearInterval(intervalId); 
    }, []); 

    return (
        <p className='timer'>
            <span className='hours'>{time.hours}</span>:
            <span className='minutes'>{time.minutes}</span>:
            <span className='seconds green'>{time.seconds}</span>
        </p>
    );
}

export default Timer;