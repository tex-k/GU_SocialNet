import React from 'react';
import Header from '../components/Header';
import MainPage from '../pages/MainPage';
import UsersPage from '../pages/UsersPage';
import AuthPage from '../pages/AuthPage';
import RegPage from '../pages/RegPage';
import UserPage from '../pages/UserPage';
import UserArticlePage from "../pages/UserArticlePage";
import ArticlePage from "../pages/ArticlesPage";
import ErrorPage from "../pages/ErrorPage";

class Renderer extends React.Component {
    getPage = (page) => {
        switch (page) {
            case 'Главная':
                return <MainPage content={this.props.params.content}/>;
                break;
            case 'Пользователи':
                return <UsersPage users={this.props.params.users}/>;
                break;
            case 'Авторизация':
                return <AuthPage/>;
                break;
            case 'Регистрация':
                return <RegPage/>;
                break;
            case 'Кабинет':
                return <UserPage user={currentUser}/>;
                break;
            case 'Блог':
                return <UserArticlePage/>;
                break;
            case 'Статьи':
                return <ArticlePage/>;
                break;
            case 'Ошибка':
                return <ErrorPage/>;
                break;
        }
    };

    render() {
        return (
            <div>
                <Header items={this.props.params.items}/>
                {
                    this.getPage(this.props.page)
                }
            </div>
        );
    }
}

export default Renderer;