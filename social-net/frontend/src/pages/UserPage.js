import React from 'react';
import UserData from '../components/UserData';
import ArticleForm from '../components/forms/ArticleForm';
import ArticleArray from "../components/ArticleArray";

class UserPage extends React.Component {
    render() {
        return (
            <div className="user-page">
                <UserData user={this.props.user}/>
                <ArticleForm/>
                <ArticleArray articles={articlesCurrentUser} author={false}/>
            </div>
        );
    }
}

export default UserPage;