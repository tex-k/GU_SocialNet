import React from 'react';

class Item extends React.Component {
    link = '?c=' + this.props.item[1];

    render() {
        return (
            <li className="menu__item"><a href={this.link} className="menu__link">{this.props.item[0]}</a></li>
        );
    }
}

export default Item;