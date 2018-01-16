import React from 'react';
import ButtonOut from './buttons/ButtonOut';
import ButtonUserDel from './buttons/ButtonUserDel';

class UserData extends React.Component {
    render() {
        return (
            <div className="user-data">
                <h1>{this.props.user.login}</h1>
                <div className="field">Имя:</div>
                <div className="field">{this.props.user.name}</div>
                <br/>
                <div className="field">Фамилия:</div>
                <div className="field">{this.props.user.surname}</div>
                <br/>
                <ButtonUserDel/>
            </div>
        );
    }
}

export default UserData;