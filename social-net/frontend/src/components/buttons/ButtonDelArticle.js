import React from 'react';

class ButtonDelArticle extends React.Component {
    render() {
        return (
            <a href={'?c=userpage&a=del&p=' + this.props.id} className="button button_del-article">Удалить</a>
        );
    }
}

export default ButtonDelArticle;