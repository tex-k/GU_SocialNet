import React from 'react';

class UserItem extends React.Component {
    link = '?c=userarticle&p=' + this.props.user;

    render() {
        return (
            <li className="user-list__item"><a href={this.link} className="user-list__link">{this.props.user}</a></li>
        );
    }
}

export default UserItem;