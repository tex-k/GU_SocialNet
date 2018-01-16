import React from 'react';
import ButtonDelArticle from "./buttons/ButtonDelArticle";

class Article extends React.Component {
    isDel = () => {
        if ((auth) && (this.props.article[5] === currentUser.login)) {
            return <ButtonDelArticle id={this.props.article[0]}/>;
        }
    };

    isAuthor = () => {
        if (this.props.author) {
            return <span className="article__author">{this.props.article[5]}</span>;
        }
    };

    render() {
        return (
            <div className="article">
                <h3>{this.props.article[2]}</h3>
                <div>{this.props.article[3]}</div>
                <span className="article__date">{this.props.article[4]}</span>
                <br/>
                {
                    this.isAuthor()
                }
                <br/>
                {
                    this.isDel()
                }
            </div>
        );
    }
}

export default Article;