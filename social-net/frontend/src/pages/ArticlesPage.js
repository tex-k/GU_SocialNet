import React from 'react';
import ArticleArray from "../components/ArticleArray";

class ArticlePage extends React.Component {
    render() {
        return (
            <div className="articles-page">
                <ArticleArray articles={articles} author={true}/>
            </div>
        );
    }
}

export default ArticlePage;