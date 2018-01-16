import React from 'react';
import Item from './Item';

class Menu extends React.Component {
    render() {
        return (
            <ul className="header__menu menu">
                {
                    this.props.items.map((item) => <Item item={item}/>)
                }
            </ul>
        );
    }
}

export default Menu;