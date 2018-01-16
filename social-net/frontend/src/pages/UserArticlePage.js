import React from 'react';
import ArticleArray from "../components/ArticleArray";

class UserArticlePage extends React.Component {
    render() {
        return (
            <div className="user-article-page">
                <h1 className="user-article-page__h1">{user.login}</h1>
                <ArticleArray articles={articlesUser} author={false}/>
            </div>
        );
    }
}

export default UserArticlePage;