import React from 'react';
import ReactDOM from 'react-dom';

function Trending() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Trending Component</div>

                        <div className="card-body">I'm a trending component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('trending')) {
    ReactDOM.render(<Trending />, document.getElementById('trending'));
}
