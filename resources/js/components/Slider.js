import React, { useState } from "react";
import ReactDOM from 'react-dom';
import "../../css/slider.css";

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
            <div className="slider">Page 1</div>
            <div className="slider">Page 2</div>
            <div className="slider">Page 3</div>
          </div>
        </div>
  
        <div className="slider-nav">
          <button onClick={handlePrevPage} disabled={currentPage === 1}>Prev</button>
          <button onClick={handleNextPage} disabled={currentPage === 3}>Next</button>
        </div>
      </div>
    );

}

export default Slider;

if (document.getElementById("slider")) {
    ReactDOM.render(<Slider />, document.getElementById("slider"));
}
