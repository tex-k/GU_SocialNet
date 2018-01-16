import React from 'react';

class AuthForm extends React.Component {
    render() {
        return (
            <form className="auth-form" method="post" action="">
                <label htmlFor="inputLogin">Логин</label>
                <input type="text" name="login" id="inputLogin"/>
                <br/>
                <label htmlFor="inputPassword">Пароль</label>
                <input type="password" name="password" id="inputPassword"/>
                <br/>
                <input type="submit" value="Войти" className="button button_form"/>
            </form>
        );
    }
}

export default AuthForm;