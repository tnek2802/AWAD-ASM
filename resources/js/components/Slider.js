import React, { useState } from "react";
import ReactDOM from 'react-dom';
import "../../css/slider.css";
import carousel1 from '../../../public/images/carousel1.jpg';
import carousel2 from '../../../public/images/carousel2.jpg';
import carousel3 from '../../../public/images/carousel3.jpg';

function Slider() {
    const [currentPage, setCurrentPage] = useState(1);

    const handlePrevPage = () => {
      setCurrentPage(currentPage - 1);
    };
  
    const handleNextPage = () => {
      setCurrentPage(currentPage + 1);
    };
  
    return (
      <div>
        <div className="slider-container">
          <div className="slider-wrapper" style={{ transform: `translateX(-${(currentPage - 1) * 100}%)` }}>
            <div className="slider"><img src={carousel1}/></div>
            <div className="slider"><img src={carousel2}/></div>
            <div className="slider"><img src={carousel3}/></div>
          </div>
        </div>
  
        <div className="slider-nav">
          <button onClick={handlePrevPage} disabled={currentPage === 1}>Prev</button>
          <button onClick={handleNextPage} disabled={currentPage === 3}>Next</button>
        </div>
      </div>
    );

}

// export default Slider;

if (document.getElementById("slider")) {
    ReactDOM.render(<Slider />, document.getElementById("slider"));
}
