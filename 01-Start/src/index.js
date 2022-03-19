import React from 'react';
import ReactDOM from 'react-dom';
import './App.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';

// THIS IS THE ENTORY FILE
ReactDOM.render(
    <App />,
    //IT CONNECT THE HTML FILE WITH THE REACT
    // in this case i call it root you can call it anything
    document.getElementById('root')
);
registerServiceWorker();
