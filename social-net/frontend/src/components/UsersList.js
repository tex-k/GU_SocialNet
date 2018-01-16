import React from 'react';
import UserItem from './UserItem';

class UsersList extends React.Component {
    render() {
        return (
            <div className="user-list">
                <ul className="user-list__menu">
                    {
                        this.props.users.map((user) => <UserItem user={user}/>)
                    }
                </ul>
            </div>
        );
    }
}

export default UsersList;