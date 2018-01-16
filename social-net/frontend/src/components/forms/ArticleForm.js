import React from 'react';

class ArticleForm extends React.Component {
    render() {
        return (
            <form action="?c=userpage&a=article" method="post" className="article-form">
                <label htmlFor="title">Заголовок</label>
                <br/>
                <input type="text" name="title" id="title"/>
                <br/>
                <label htmlFor="text">Текст</label>
                <br/>
                <textarea rows={10} name="text" id="text" className="article-form__textarea"/>
                <br/>
                <input type="submit" value="Добавить" className="button button_add-article"/>
            </form>
        );
    }
}

export default ArticleForm;