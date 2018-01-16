import React from 'react';
import RegForm from '../components/forms/RegForm';

class Registration extends React.Component {
    render() {
        return (
           <div className="reg-page">
               <RegForm/>
           </div>
        );
    }
}

export default Registration;