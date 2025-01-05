import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom';
import Example from './components/Example';

if (document.getElementById('react-example')) {
    ReactDOM.render(<Example />, document.getElementById('react-example'));
}
