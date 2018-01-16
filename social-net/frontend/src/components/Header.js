import React from 'react';
import Menu from "./Menu";
import ButtonAuthPage from '../components/buttons/ButtonAuthPage';
import ButtonRegPage from '../components/buttons/ButtonRegPage';
import ButtonOut from '../components/buttons/ButtonOut';
import ButtonUserPage from '../components/buttons/ButtonUserPage';

class Header extends React.Component {
    checkAuth = () => {
        if (auth) {
            return (
                <div>
                    <ButtonOut/>
                    <ButtonUserPage/>
                </div>
            );
        } else {
            return (
                <div>
                    <ButtonAuthPage/>
                    <ButtonRegPage/>
                </div>
            );
        }
    };

    render() {
        return (
            <div className="header">
                <Menu items={this.props.items}/>
                {
                    this.checkAuth()
                }
            </div>
        );
    }
}

export default Header;