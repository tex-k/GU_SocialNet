import React from 'react';
import AuthForm from '../components/forms/AuthForm';

class AuthPage extends React.Component{
    render() {
        return (
            <div className="auth-page">
                <AuthForm/>
            </div>
        );
    }
}

export default AuthPage;