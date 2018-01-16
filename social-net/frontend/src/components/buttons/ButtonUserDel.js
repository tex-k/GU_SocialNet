import React from 'react';

class ButtonUserDel extends React.Component {
    render() {
        return (
            <a href="?c=regpage&a=del" className="button button__del-user">Удалить аккаунт</a>
        );
    }
}

export default ButtonUserDel;