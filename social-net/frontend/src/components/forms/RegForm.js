import React from 'react';

class RegForm extends React.Component {
    render() {
        return (
            <form className="reg-form" method="post" action="">
                <label htmlFor="inputName">Имя</label>
                <input type="text" name="name" id="inputName"/>
                <br/>
                <label htmlFor="inputSurname">Фамилия</label>
                <input type="text" name="surname" id="inputSurname"/>
                <br/>
                <label htmlFor="inputLogin">Логин</label>
                <input type="text" name="login" id="inputLogin"/>
                <br/>
                <label htmlFor="inputPassword">Пароль</label>
                <input type="password" name="password" id="inputPassword"/>
                <br/>
                <label htmlFor="inputEmail">Email</label>
                <input type="email" name="email" id="inputEmail"/>
                <br/>
                <input type="submit" value="Зарегистрироваться" className="button button_form"/>
            </form>
        );
    }
}

export default RegForm;