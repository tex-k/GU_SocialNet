import React from 'react';
import ReactDOM from 'react-dom';
import Renderer from './services/Renderer';

let params = {
    items: [
        ['Главная', 'mainpage'],
        ['Пользователи', 'userspage'],
        ['Статьи', 'articlespage']
    ],

    users: users,

    content: 'Это социальная сеть'
};

ReactDOM.render(
    <Renderer params={params} page={page}/>,
    document.getElementById('page')
);