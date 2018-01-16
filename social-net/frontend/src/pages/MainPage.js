import React from 'react';
import MainContent from '../components/MainContent';

class MainPage extends React.Component {
    render() {
        return (
            <div className="main-page">
                <MainContent content={this.props.content}/>
            </div>
        );
    }
}

export default MainPage;