import React from 'react';
import UsersList from '../components/UsersList';

class UsersPage extends React.Component {
    render() {
        return (
            <div className="users-page">
                <UsersList users={this.props.users}/>
            </div>
        );
    }
}

export default UsersPage;