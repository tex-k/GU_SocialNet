import React from 'react';
import Article from "./Article";

class ArticleArray extends React.Component {
    render() {
        return (
            <div className="article-array">
                {
                    this.props.articles.map((article) => <Article article={article} author={this.props.author}/>)
                }
            </div>
        );
    }
}

export default ArticleArray;