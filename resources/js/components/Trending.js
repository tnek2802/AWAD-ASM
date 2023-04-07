import React, { Component } from 'react';
import ReactDOM from 'react-dom';

// function Trending() {
//     return (
//         <div className="container">
//             <div className="row justify-content-center">
//                 <div className="col-md-8">
//                     <div className="card">
//                         <h1>IM GONNA PUT TRENDING PRODUCTS IN THIS COMPONENT HERE OK</h1>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     );
// }

// export default Trending;

export default class Trending extends Component{
    render(){
        return (
                    <div className="container">
                        <div className="row justify-content-center">
                            <div className="col-md-8">
                                <div className="card">
                                    <h1>IM GONNA PUT TRENDING PRODUCTS IN THIS COMPONENT HERE OK</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                );
    }
}

if (document.getElementById('trending')) {
    ReactDOM.render(<Trending />, document.getElementById('trending'));
}
