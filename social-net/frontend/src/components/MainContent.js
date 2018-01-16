import React from 'react';

class MainContent extends React.Component {
    render() {
        return (
            <div className="main-content">{this.props.content}</div>
        );
    }
}

export default MainContent;